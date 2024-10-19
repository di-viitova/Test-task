<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

$config = include 'config.php';

function logToFile($message) {
    $logFile = __DIR__ . '/logs/log.txt';
    $currentTime = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$currentTime] $message" . PHP_EOL, FILE_APPEND);
}

function getGeoData($ip) {
    if ($ip === '127.0.0.1' || $ip === '::1') {
        return [
            'status' => 'fail',
            'message' => 'Localhost IP, no geo data available',
            'query' => $ip
        ];
    }

    $geoApiUrl = "http://ip-api.com/json/$ip";
    $geoData = file_get_contents($geoApiUrl);
    return json_decode($geoData, true);
}

function isEmpty($value) {
    return empty(trim($value));
}

function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function isValidPhone($phone) {
    return preg_match('/^\d+$/', $phone);
}

function saveUserToDatabase($firstName, $lastName, $email, $phone, $comments) {
    global $config;

    try {
        $db = new PDO($config['database']['driver'] . ':' . $config['database']['path']);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $createUsersTable = "
        CREATE TABLE IF NOT EXISTS users (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            first_name TEXT NOT NULL,
            last_name TEXT NOT NULL,
            email TEXT NOT NULL,
            phone TEXT NOT NULL,
            select_service TEXT,
            select_price TEXT,
            comments TEXT
        );
        ";
        $db->exec($createUsersTable);

        $service = 'default_service'; 
        $price = 'default_price';

        $sql = "INSERT INTO users (first_name, last_name, email, phone, select_service, select_price, comments)
                VALUES (:first_name, :last_name, :email, :phone, :select_service, :select_price, :comments)";
        
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':first_name', $firstName);
        $stmt->bindParam(':last_name', $lastName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':select_service', $service); 
        $stmt->bindParam(':select_price', $price); 
        $stmt->bindParam(':comments', $comments);

        $stmt->execute();
        
        return true;
    } catch (PDOException $e) {
        logToFile("Error saving user to database: " . $e->getMessage());
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $lastName = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $comments = isset($_POST['comments']) ? $_POST['comments'] : '';

    logToFile("Received request: " . json_encode($_POST));

    $errors = [];

    if (isEmpty($firstName)) {
        $errors['first_name'] = 'First name is required.';
    }
    if (isEmpty($lastName)) {
        $errors['last_name'] = 'Last name is required.';
    }
    if (isEmpty($email) || !isValidEmail($email)) {
        $errors['email'] = 'A valid email is required.';
    }
    if (isEmpty($phone) || !isValidPhone($phone)) {
        $errors['phone'] = 'A valid phone number is required.';
    }

    if (!empty($errors)) {
        http_response_code(400); // Bad Request
        header('Content-Type: application/json');
        $errorResponse = ['errors' => $errors];
        logToFile("Validation failed: " . json_encode($errorResponse));
        echo json_encode($errorResponse);
        exit;
    }

    $userIp = $_SERVER['REMOTE_ADDR'];
    $geoData = getGeoData($userIp);

    logToFile("GeoData for IP ($userIp): " . json_encode($geoData));

    if (saveUserToDatabase($firstName, $lastName, $email, $phone, $comments)) {
        $response = [
            'status' => '200',
            'url' => 'https://www.google.com',
            'message' => 'Thank you! We will contact with you!',
        ];

        logToFile("Response: " . json_encode($response));

        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        logToFile("Error saving data to the database.");
        http_response_code(500); // Internal Server Error
        echo json_encode(['error' => 'Error saving data to the database.']);
    }
} else {
    http_response_code(405); // Method Not Allowed
    logToFile("Invalid request method: " . $_SERVER["REQUEST_METHOD"]);
    echo json_encode(['error' => 'Method Not Allowed']);
}
?>
