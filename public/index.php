<?php
   session_start();
   if (empty($_SESSION['csrf_token'])) {
      $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
   }
?>
<!DOCTYPE html><html lang="en"><!-- Basic --><head><meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>Aven - Real Estate Responsive HTML5 Landing Page Template</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
   <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Colors CSS -->
   <!-- <link rel="stylesheet" href="css/colors.css"> -->
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <!-- <link rel="stylesheet" href="css/custom.css"> -->
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>

   <style>
      .modal-body div span {
         color: red;
      }
      .modal-body a {
         text-decoration: underline;
      }
   </style>

   <script> 
      const urlParams = new URLSearchParams(window.location.search);
      const fbp = urlParams.get("fbp");
      const ggl = urlParams.get("ggl");

      const script = document.createElement('script');
      script.async = true;
      script.src = `https://www.googletagmanager.com/gtag/js?id=${ggl}`;
      document.head.appendChild(script);
   </script>
   <!-- Facebook Pixel Code -->
   <script>
      !(function (f, b, e, v, n, t, s) {
         if (f.fbq) return;
         n = f.fbq = function () {
            n.callMethod
            ? n.callMethod.apply(n, arguments)
            : n.queue.push(arguments);
         };
         if (!f._fbq) f._fbq = n;
         n.push = n;
         n.loaded = !0;
         n.version = "2.0";
         n.queue = [];
         t = b.createElement(e);
         t.async = !0;
         t.src = v;
         s = b.getElementsByTagName(e)[0];
         s.parentNode.insertBefore(t, s);
      })(
         window,
         document,
         "script",
         "https://connect.facebook.net/en_US/fbevents.js"
      );
      fbq("init", fbp);
   </script>
   <noscript>
      <img id="fbPixelImg" height="1" width="1" style="display: none" src="" />
   </noscript>
   <script>
      const fbImg = document.getElementById("fbPixelImg");
      if (fbImg) {
         fbImg.src = `https://www.facebook.com/tr?id=${fbPixel}&ev=Lead&noscript=1`;
      }
   </script>
      <!-- End Facebook Pixel Code -->

      <!-- Google tag (gtag.js) -->
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', ggl);
   </script>
       <link
       rel="stylesheet"
       href="https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.16/build/css/intlTelInput.css"
     />
     <link rel="stylesheet" href="./css/form.css">
   </head>
   <body class="realestate_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loader-realestate.gif" alt="">
      </div>
      <!-- end loader -->
      <!-- END LOADER -->
      <header class="header header_style_01">
         <nav class="megamenu navbar navbar-default" data-spy="affix">
            <div class="container-fluid">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index-real-estate.html"><img src="images/logo.png" width="220" alt="image"></a>
               </div>
               <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                     <li><a data-scroll="" href="#home">Home</a></li>
                     <li><a data-scroll="" href="#features">Features <span class="hidden-xs">*</span></a></li>
                     <li><a data-scroll="" href="#agent">The Agent</a></li>
                     <li><a data-scroll="" href="#gallery">Gallery</a></li>
                     <li><a data-scroll="" href="#testimonials">Testimonials</a></li>
                     <li><a data-scroll="" href="#support">Contact</a></li>
                     <li class="social-links"><a href="#"><i class="fa fa-twitter global-radius"></i></a></li>
                     <li class="social-links"><a href="#"><i class="fa fa-facebook global-radius"></i></a></li>
                     <li class="social-links"><a href="#"><i class="fa fa-linkedin global-radius"></i></a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </header>
      <div id="home" class="parallax first-section" data-stellar-background-ratio="0.4" style="background-image:url('images/parallax.jpg');">
         <div class="container">
            <div class="row">
              
               <div class="col-md-6 col-sm-12">
                  <div class="big-tagline clearfix">
                     <h2>Sell Your Property with Aven</h2>
                     <p class="lead">With Aven responsive landing page template, you can promote your all property &amp; real estate projects. </p>
                     <a data-scroll="" href="#gallery" class="btn btn-light btn-radius grd1 btn-brd">View Gallery</a>
                  </div>
               </div>
               <div class="col-md-6 wow slideInRight hidden-xs hidden-sm">
                  <div class="contact_form">
                     <h3><i class="fa fa-envelope-o grd1 global-radius"></i> QUICK APPOINTMENT</h3>
                     <form id="contactform1" class="row" name="contactform" method="post">
                        <fieldset class="row-fluid">
                           <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="first_name" id="first_name1" class="form-control" placeholder="First Name">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="last_name" id="last_name1" class="form-control" placeholder="Last Name">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="email" name="email" id="email1" class="form-control" placeholder="Your Email">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="phone" id="phone1" class="form-control" placeholder="Your Phone">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label class="sr-only">Select Time</label>
                              <select name="select_service" id="select_service1" class="selectpicker form-control" data-style="btn-white">
                                 <option value="selecttime">Select Time</option>
                                 <option value="Weekdays">Weekdays</option>
                                 <option value="Weekend">Weekend</option>
                              </select>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label class="sr-only">What is max price?</label>
                              <select name="select_price" id="select_price1" class="selectpicker form-control" data-style="btn-white">
                                 <option value="$100 - $2000">$100 - $2000</option>
                                 <option value="$2000 - $4000">$2000 - $4000</option>
                                 <option value="$4000 - $10000">$4000 - $10000</option>
                              </select>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                              <button type="submit" value="SEND" id="submit1" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get an Appointment</button>
                           </div>
                        </fieldset>                           
                        <div class="error-message" style="color: red;text-align: center;margin-top: 15px;"></div> <!-- Контейнер для сообщений об ошибках -->

                     </form>
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div id="features" class="section wb">
         <div class="container">
            
  
            <div class="section-title row text-center">
               <div class="col-md-8 col-md-offset-2">
                  <small>All Awesome Property Details</small>
                  <h3>Property Details</h3>
                  <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
               </div>
               <!-- end col -->
            </div>
            <!-- end title -->
            <div class="property-detail row clearfix">
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-coupon effect-1"></i>
                  <h4>Square Feet : 3200</h4>
               </div>
               <!-- end col -->
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-family-room effect-1"></i>
                  <h4>Ideal for Family</h4>
               </div>
               <!-- end col -->
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-house effect-1"></i>
                  <h4>Garage : 2</h4>
               </div>
               <!-- end col -->  
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-full-bed effect-1"></i>
                  <h4>Bedrooms : 3</h4>
               </div>
               <!-- end col -->  
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-swimming-pool effect-1"></i>
                  <h4>Pool : Yes</h4>
               </div>
               <!-- end col -->
               <div class="col-md-2 col-sm-3 col-xs-6">
                  <i class="flaticon-calendar effect-1"></i>
                  <h4>Build in : 2015</h4>
               </div>
               <!-- end col -->  
            </div>
            <!-- end how-its-work -->
            <hr class="invis">
            <div class="row text-center">
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="uploads/estate_01.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/estate_01.jpg" alt="" class="img-responsive img-rounded">
                     </div>
                     <h3>Spacious and Large Garden</h3>
                     <p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="uploads/estate_03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/estate_03.jpg" alt="" class="img-responsive img-rounded">
                     </div>
                     <h3>With its Own Pool</h3>
                     <p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
                  </div>
                  <!-- end service -->
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="service-widget">
                     <div class="post-media wow fadeIn">
                        <a href="uploads/estate_02.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="images/estate_02.jpg" alt="" class="img-responsive img-rounded">
                     </div>
                     <h3>In Forests- Fresh Clean Air</h3>
                     <p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet lacus vitae massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
                  </div>
                  <!-- end service -->
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
         <div class="sep1"></div>
      </div>
      <!-- end section -->
      <div id="agent" class="parallax section db parallax-off" >
         <div class="container">
            <div class="section-title row text-center">
               <div class="col-md-8 col-md-offset-2">
                  <h3>Agent Details</h3>
                  <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
               </div>
               <!-- end col -->
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-3">
                  <div class="post-media wow fadeIn">
                     <img src="images/agent.jpg" alt="" class="img-responsive img-rounded">
                     <a href="https://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                  </div>
                  <!-- end media -->
               </div>
               <!-- end col -->
               <div class="col-md-6">
                  <div class="message-box">
                     <h4>The Agent</h4>
                     <h2>Jenny Martines</h2>
                     <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
                     <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                     <a href="#contact" data-scroll="" class="btn btn-light global-radius btn-brd grd1 effect-1">Contact Me</a>
                  </div>
                  <!-- end messagebox -->
               </div>
               <!-- end col -->
               <div class="col-md-3">
                  <div class="agencies_meta clearfix">
                     <span><i class="fa fa-envelope "></i> <a href="/cdn-cgi/l/email-protection#34474144445b464074475d40515a5559511a575b59"><span class="__cf_email__" data-cfemail="8dfef8fdfde2fff9cdfee4f9e8e3ece0e8a3eee2e0">[email�&nbsp;protected]</span></a></span>
                     <span><i class="fa fa-link "></i> <a href="#">www.sitename.com</a></span>
                     <span><i class="fa fa-phone-square "></i> +1 232 444 55 66</span>
                     <span><i class="fa fa-print "></i> +1 232 444 55 66</span>
                     <span><i class="fa fa-facebook-square "></i> <a href="#">facebook.com/tagline</a></span>
                     <span><i class="fa fa-twitter-square "></i> <a href="#">twitter.com/tagline</a></span>
                     <span><i class="fa fa-linkedin-square "></i> <a href="#">linkedin.com/tagline</a></span>
                  </div>
                  <!-- end agencies_meta -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
      </div>
      <div id="gallery" class="section wb">
         <div class="sep2"></div>
         <div class="container">
            <div class="section-title row text-center">
               <div class="col-md-8 col-md-offset-2">
                  <h3>Property Gallery</h3>
                  <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
               </div>
               <!-- end col -->
            </div>
            <!-- end title -->
            <div id="da-thumbs" class="da-thumbs portfolio">
               <div class="post-media pitem item-w1 item-h1 cat1">
                  <a href="uploads/home_01.jpg" data-rel="prettyPhoto[gal]">
                     <img src="images/home_01.jpg" alt="" class="img-responsive">
                     <div>
                        <i class="flaticon-unlink"></i>
                     </div>
                  </a>
               </div>
               <div class="post-media pitem item-w1 item-h1 cat2">
                  <a href="uploads/home_02.jpg" data-rel="prettyPhoto[gal]">
                     <img src="images/home_02.jpg" alt="" class="img-responsive">
                     <div>
                        <i class="flaticon-unlink"></i>
                     </div>
                  </a>
               </div>
               <div class="post-media pitem item-w1 item-h1 cat1">
                  <a href="uploads/home_03.jpg" data-rel="prettyPhoto[gal]">
                     <img src="images/home_03.jpg" alt="" class="img-responsive">
                     <div>
                        <i class="flaticon-unlink"></i>
                     </div>
                  </a>
               </div>
               <div class="post-media pitem item-w1 item-h1 cat3">
                  <a href="uploads/home_04.jpg" data-rel="prettyPhoto[gal]">
                     <img src="images/home_04.jpg" alt="" class="img-responsive">
                     <div>
                        <i class="flaticon-unlink"></i>
                     </div>
                  </a>
               </div>
               <div class="post-media pitem item-w1 item-h1 cat2">
                  <a href="uploads/home_05.jpg" data-rel="prettyPhoto[gal]">
                     <img src="images/home_05.jpg" alt="" class="img-responsive">
                     <div>
                        <i class="flaticon-unlink"></i>
                     </div>
                  </a>
               </div>
               <div class="post-media pitem item-w1 item-h1 cat1">
                  <a href="uploads/home_06.jpg" data-rel="prettyPhoto[gal]">
                     <img src="images/home_06.jpg" alt="" class="img-responsive">
                     <div>
                        <i class="flaticon-unlink"></i>
                     </div>
                  </a>
               </div>
            </div>
            <!-- end portfolio -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div class="container my-block">
         <div class="my-title">My front-end section</div>
         <div class="menu-line">
            <div class="menu-line-container">
              <div class="menu-line-inner">
                
                <nav class="nav">
                  <a class="menu-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                  </a>
      
                  <ul class="menu">
                    <li>
                      <a href="#" class="nav-item"><span>Lorem</span></a>
                    </li>
                    <li>
                      <a href="#" class="nav-item"><span>Ipsum</span></a>
                    </li>
                    <li>
                      <a href="#" class="nav-item"><span>Dolor</span></a>
                    </li>
                    <li>
                      <a href="#" class="nav-item"><span>Consectetur</span></a>
                    </li>
                    <li>
                      <a href="#" class="nav-item"><span>Elit</span></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <script>
            const menuBtn = document.querySelector('.menu-btn');
            const menu = document.querySelector ('.menu');
            const menuItems = document.querySelectorAll('.menu li'); 
            menuBtn.addEventListener('click', () => {
               menu.classList.toggle('menu--active');
               menuBtn.classList.toggle('menu-btn--active'); // Добавляем класс для изменения кнопки

            })
            menuItems.forEach(item => {
               item.addEventListener('click', () => {
                  menu.classList.remove('menu--active'); // Закрываем меню
                  menuBtn.classList.remove('menu-btn--active'); // Возвращаем кнопку в исходное состояние
               });
            });
          </script>
         <div class="form_block" style="margin-top: 15px">
            <div class="form-wrap">
              <a href="#">
                <div class="pop-prod">
                  <div class="discount-block">
                    -
                    <span class="prod_sale">50%</span>
                  </div>
                  <img alt="product" class="prod_image" src="./images/prod.png" /></div
              ></a>
      
              <div class="form-part">
                <div class="form-title">Order with discount</div>
                <div class="price-block">
                  <div class="old-price-wrap">
                    <p class="old-price-name">Old price:</p>
                    <span class="prod_old_price">12 000$</span>
                  </div>
                  <div class="new-price-wrap">
                    <p class="new-price-name">New price:</p>
                    <span class="prod_price"> 9 999$</span>
                  </div>
                </div>
      
                <form method="post" id="regForm" class="regForm">
                  <label for="name">Enter your name:</label>
                  <input
                    class="top_info-form-input"
                    type="text"
                    name="name"
                    required
                    placeholder="Full name"
                  />
                  <label for="phone">Enter your phone:</label>
                  <input
                    class="input-field"
                    id="phone"
                    type="tel"
                    required
                    name="phone"
                    placeholder="Phone"
                  />
                  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.16/build/js/intlTelInput.min.js"></script>
                  <script>
                    const input = document.querySelector("#phone");
                    window.intlTelInput(input, {
                      utilsScript:
                        "https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.16/build/js/utils.js",
                      showSelectedDialCode: true,
                      initialCountry: "auto",
                      geoIpLookup: function (callback) {
                        fetch("https://ipapi.co/json")
                          .then(function (res) {
                            return res.json();
                          })
                          .then(function (data) {
                            callback(data.country_code);
                          })
                          .catch(function () {
                            callback();
                          });
                      },
                    });
                  </script>
                  <input
                    class="top_info-form-btn"
                    type="submit"
                    value="Order"
                    style="cursor: pointer"
                  />
                </form>
              </div>
            </div>
          </div>
      </div>
      <div id="testimonials" class="section lb">
         <div class="container">
            <div class="section-title row text-center">
               <div class="col-md-8 col-md-offset-2">
                  <h3>Happy Customers</h3>
                  <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
               </div>
               <!-- end col -->
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="testi-carousel owl-carousel owl-theme">
                     <div class="testimonial clearfix">
                        <div class="desc">
                           <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                           <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced &amp; professional team.</p>
                        </div>
                        <div class="testi-meta">
                           <!-- <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft"> -->
                           <h4>James Fernando <small>- Manager of Racer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                     </div>
                     <!-- end testimonial -->
                     <div class="testimonial clearfix">
                        <div class="desc">
                           <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                           <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                        </div>
                        <div class="testi-meta">
                           <!-- <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft"> -->
                           <h4>Jacques Philips <small>- Designer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                     </div>
                     <!-- end testimonial -->
                     <div class="testimonial clearfix">
                        <div class="desc">
                           <h3><i class="fa fa-quote-left"></i> Great &amp; Talented Team!</h3>
                           <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                        </div>
                        <div class="testi-meta">
                           <!-- <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft"> -->
                           <h4>Venanda Mercy <small>- Newyork City</small></h4>
                        </div>
                        <!-- end testi-meta -->
                     </div>
                     <!-- end testimonial -->
                     <div class="testimonial clearfix">
                        <div class="desc">
                           <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                           <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced &amp; professional team.</p>
                        </div>
                        <div class="testi-meta">
                           <!-- <img src="uploads/testi_01.png" alt="" class="img-responsive alignleft"> -->
                           <h4>James Fernando <small>- Manager of Racer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                     </div>
                     <!-- end testimonial -->
                     <div class="testimonial clearfix">
                        <div class="desc">
                           <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                           <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                        </div>
                        <div class="testi-meta">
                           <!-- <img src="uploads/testi_02.png" alt="" class="img-responsive alignleft"> -->
                           <h4>Jacques Philips <small>- Designer</small></h4>
                        </div>
                        <!-- end testi-meta -->
                     </div>
                     <!-- end testimonial -->
                     <div class="testimonial clearfix">
                        <div class="desc">
                           <h3><i class="fa fa-quote-left"></i> Great &amp; Talented Team!</h3>
                           <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                        </div>
                        <div class="testi-meta">
                           <!-- <img src="uploads/testi_03.png" alt="" class="img-responsive alignleft"> -->
                           <h4>Venanda Mercy <small>- Newyork City</small></h4>
                        </div>
                        <!-- end testi-meta -->
                     </div>
                     <!-- end testimonial -->
                  </div>
                  <!-- end carousel -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
      <div id="map"></div>
      <div id="support" class="section wb">
         <div class="container">
            <div class="section-title text-center">
               <h3>Get an Appointment Today</h3>
               <p class="lead">Let us give you more details about the special offer website you want us. Please fill out the form below. <br>We have million of website owners who happy to work with us!</p>
            </div>
            <!-- end title -->
            <div class="row">
               <div class="col-md-8 col-md-offset-2">
                  <div class="contact_form">
                     <div id="message"></div>
                     <form id="contactform" class="row"  name="contactform" method="post">
                        <fieldset class="row-fluid">
                           <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">

                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label class="sr-only">Select Time</label>
                              <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                 <option value="selecttime">Select Time</option>
                                 <option value="Weekdays">Weekdays</option>
                                 <option value="Weekend">Weekend</option>
                              </select>
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                              <label class="sr-only">What is max price?</label>
                              <select name="select_price" id="select_price" class="selectpicker form-control" data-style="btn-white">
                                 <option value="$100 - $2000">$100 - $2000</option>
                                 <option value="$2000 - $4000">$2000 - $4000</option>
                                 <option value="$4000 - $10000">$4000 - $10000</option>
                              </select>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.." ></textarea>
                           </div>
                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                              <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get Appointment</button>
                           </div>
                        </fieldset>
                        <div class="error-message" style="color: red;text-align: center;margin-top: 15px;"></div> <!-- Контейнер для сообщений об ошибках -->

                     </form>
                  </div>
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>
      <!-- end section -->
 
      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="widget clearfix">
                     <div class="widget-title">
                        <img src="images/logo.png" width="210" alt="">
                     </div>
                     <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                     <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                  </div>
                  <!-- end clearfix -->
               </div>
               <!-- end col -->
               <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="widget clearfix">
                     <div class="widget-title">
                        <h3>Contact Details</h3>
                     </div>
                     <ul class="footer-links">
                        <li><a href="/cdn-cgi/l/email-protection#b390"><span class="__cf_email__" data-cfemail="61080f070e21180e1413120815044f020e0c">[email�&nbsp;protected]</span></a></li>
                        <li><a href="#">www.yoursite.com</a></li>
                        <li>PO Box 16122 Collins Street West Victoria 8007 Australia</li>
                        <li>+61 3 8376 6284</li>
                     </ul>
                     <!-- end links -->
                  </div>
                  <!-- end clearfix -->
               </div>
               <!-- end col -->
               <div class="col-md-3 col-sm-3 col-xs-12">
                  <div class="widget clearfix">
                     <div class="widget-title">
                        <h3>Twitter Feed</h3>
                     </div>
                     <ul class="twitter-widget footer-links">
                        <li><a href="#"><i class="fa fa-twitter"></i> @Rt_miOnline o zaman en yakın Apple Store seni bekler geçmiş olsun</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i> @Harry - Thanks you so much for your help. Still waiting update for my Ticket!</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i> @MedyaPet - Welcome to the our community dude! You are awesome!</a></li>
                     </ul>
                     <!-- end links -->
                  </div>
                  <!-- end clearfix -->
               </div>
               <!-- end col -->
               <div class="col-md-2 col-sm-2 col-xs-12">
                  <div class="widget clearfix">
                     <div class="widget-title">
                        <h3>Social</h3>
                     </div>
                     <ul class="footer-links">
                        <li><a href="#"><i class="fa fa-facebook"></i> 22.543 Likes</a></li>
                        <li><a href="#"><i class="fa fa-github"></i> 128 Projects</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i> 12.860 Followers</a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i> 3312 Shots</a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i>3331 Pins</a></li>
                     </ul>
                     <!-- end links -->
                  </div>
                  <!-- end clearfix -->
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </footer>
      <!-- end footer -->
      <div class="copyrights">
         <div class="container">
            <div class="footer-distributed">
               <div class="footer-left">
                  <p class="footer-links">
                     <a href="#">Home</a>
                     <a href="#">Blog</a>
                     <a href="#">Pricing</a>
                     <a href="#">About</a>
                     <a href="#">Faq</a>
                     <a href="#">Contact</a>
                  </p>
                  <p class="footer-company-name">All Rights Reserved. <a href="https://html.design/">html.design</a> © 2021</p>
               </div>
               <div class="footer-right">
                  <form method="get" action="#">
                     <input placeholder="Subscribe our newsletter.." name="search">
                     <i class="fa fa-envelope-o"></i>
                  </form>
               </div>
            </div>
         </div>
         <!-- end container -->
      </div>
            <!-- Модальное окно -->
            <div
            class="modal fade"
            id="successModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
            style="background-color: rgba(0, 0, 0, 0.202);"
         >
            <div class="modal-dialog" role="document">
               <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Thank you!</h5>
                  <button
                     type="button"
                     class="close"
                     data-dismiss="modal"
                     aria-label="Close"
                  >
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <!-- <div class="modal-body">Ваши данные успешно отправлены</div> -->
               <div class="modal-body">
                  <div class="block-status">Status => <span id="request-status"></span></div>
                  <div class="block-url">Url for redirect => <span id="redir-url"></span></div>
                  <div class="block-message">Message for user => <span id="mes-for-user"></span></div>
                  <a href="" id="btn-redir">Click here for redirect</a>
               </div>
               <div class="modal-footer">
                  <button
                     type="button"
                     class="btn btn-secondary btn-primary"
                     data-dismiss="modal"
                  >
                     Close
                  </button>
               </div>
               </div>
            </div>
            </div>
      <!-- end copyrights -->
      <a href="#home" data-scroll="" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script data-cfasync="false" src="js/email-decode.min.js"></script>
      <script src="js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/custom.js"></script>
      <script src="js/portfolio.js"></script>
      <script src="js/hoverdir.js"></script>    
      <script src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
      <!-- MAP & CONTACT -->
      <script src="js/map.js"></script>
   
      <include id="includedContent"></include>
      <script>
      $(function(){
            $("#includedContent").load("../htmlads.html"); 
         });
      </script>
      <script src="./js/form-handler.js"></script>
   </body>
</html>