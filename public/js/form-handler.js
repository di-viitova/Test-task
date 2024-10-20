


document.addEventListener("DOMContentLoaded", function () {
    const forms = document.querySelectorAll('form[name="contactform"]');

    forms.forEach(form => {
        form.addEventListener('submit', function (event) {
            event.preventDefault(); 
            
            if(document.querySelectorAll('.error-message')) {
                document.querySelectorAll('.error-message').forEach(function (errorMessage) {
                    errorMessage.innerHTML = ''; 
                });
            }

            const formData = new FormData(form); 

            // Валидация данных
            const validationError = validateForm(formData);
            if (validationError) {
                displayError(form, validationError);
                return;
            }

            submitForm(formData, form); // Вызываем функцию для отправки данных

        });
    });

    function validateForm(formData) {
        const first_name = formData.get('first_name');
        const last_name = formData.get('last_name');
        const email = formData.get('email');
        const phone = formData.get('phone');

        if (!first_name || first_name.length < 2) {
            return 'The name must be at least 2 characters long.';
        }
        if (!last_name || last_name.length < 2) {
            return 'The last name must contain at least 2 characters.';
        }
        if (!validateEmail(email)) {
            return 'Please enter a valid email address.';
        }
        if (!validatePhone(phone)) {
            return 'Please enter a valid phone number.';
        }

        return null; 
    }

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }

    function validatePhone(phone) {
        const re = /^[0-9\-\+\(\)\s]+$/; 
        const minLength = 7; 
    
        
        const cleanedPhone = phone.replace(/[^\d]/g, '');
        
        return re.test(String(phone)) && cleanedPhone.length >= minLength;
    }
    

    function displayError(form, message) {
        let errorContainer = form.querySelector('.error-message');
        errorContainer.textContent = message;
    }

    function showModal(form, data){
        form.reset();
        
        const successModal = document.getElementById("successModal");
        const body = document.getElementsByTagName("body")[0];

        const statusEl = document.getElementById('request-status');
        const urlEl = document.getElementById('redir-url');
        const messEl = document.getElementById('mes-for-user');
        const redirLink = document.getElementById('btn-redir');

        successModal.removeAttribute("aria-hidden");
        successModal.removeAttribute("inert");

        successModal.classList.remove("fade");
        successModal.classList.add("show");
        successModal.style.display = "block";
        body.style.overflow = 'hidden';
        
        
        const closeModalButtons = successModal.querySelectorAll("[data-dismiss='modal']");

        closeModalButtons.forEach(button => {
            button.addEventListener("click", function () {
                successModal.classList.remove("show");
                successModal.style.display = "none";
                body.style.overflow = 'unset';
                successModal.setAttribute("aria-hidden", "true");
                successModal.setAttribute("inert", "");
            });
        });

        statusEl.textContent = data.status;
        urlEl.textContent = data.url;
        messEl.textContent = data.message;
        redirLink.setAttribute('href', data.url);
    }



    // Функция для отправки формы и обработки ответа
    function submitForm(formData, form) {
        
        fetch('../send.php', {
            method: 'POST',
            body: formData,
            mode: 'cors'
        })
        .then(response => {
            if (response.status === 403) {
                displayError(form, 'We have already received your application. You will be contacted soon :)');
                throw new Error('Application already received (403)');
            }
            if (!response.ok) {
                throw new Error('The server returned an error: ' + response.status);
            }
            return response.json();
        })
        .then(data => {
            showModal(form, data);
            
            var eventID = crypto.randomUUID();
            fbq("track", "Lead", {}, { eventID: eventID });

            gtag('event', 'lead', {});

            // Выполнение редиректа (если нужно)
            // setTimeout(() => {
            //     window.location.href = redirUrl;
            // }, 5000);
        })
        .catch(error => {
            console.error('Error:', error);
            if (error.message !== 'Application already received (403)') {
                displayError(form, 'Something went wrong... Try again!');
            }


        });
    }
    

});



