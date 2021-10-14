
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Forms</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,700,900">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/include/menu.php";
   include_once($path);
?>
      </header>
      <!-- Breadcrumbs -->
      <section class="section section-bredcrumbs">
        <div class="container context-dark breadcrumb-wrapper">
          <h1>Forms</h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Forms</li>
          </ul>
        </div>
      </section>
      <!-- Contact us-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-5 col-xxl-4">
              <h2>Get in Touch</h2>
              <!-- RD Mailform-->
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-name">Name</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email">E-mail</label>
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-message">Message</label>
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                </div>
                <button class="button button-primary" type="submit">Send</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Subscribe to Our Newsletter-->
      <section class="section section-sm bg-primary-gradient context-dark text-center">
        <div class="container">
          <div class="row row-20 justify-content-md-center">
            <div class="col-md-9 col-lg-6 col-xxl-7">
              <h3>Subscribe for <span class="font-weight-bold">News and Updates</span></h3>
            </div>
            <div class="col-md-8 col-lg-5 col-xxl-4">
              <!-- RD Mailform-->
              <form class="rd-form rd-mailform rd-form-inline-2" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <input class="form-input" id="subscribe-form-0-email" type="email" name="email" data-constraints="@Email @Required"/>
                  <label class="form-label" for="subscribe-form-0-email">Enter your e-mail</label>
                </div>
                <button class="form-icon-button mdi mdi-email-outline" type="submit"></button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Newsletter-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-6 col-xxl-3">
              <h5>Newsletter</h5>
              <p>Keep up with our always upcoming financial news. Enter your e-mail and subscribe to our newsletter to get all updates right into your inbox.</p>
              <!-- RD Mailform-->
              <form class="rd-form form-sm rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <input class="form-input" id="newsletter-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="newsletter-email">Enter your e-mail</label>
                </div>
                <button class="button button-sm button-primary" type="submit">Subscribe</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Register Form-->
      <section class="section section-lg bg-default text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-6 col-xxl-4">
              <h3>Registration</h3>
              <!-- RD Mailform-->
              <form class="rd-form form-lg rd-mailform">
                <div class="form-wrap">
                  <input class="form-input" id="register-name" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="register-name">Username</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="register-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="register-email">E-mail</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="register-password" type="password" name="password" data-constraints="@Required">
                  <label class="form-label" for="register-password">Password</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="register-confirm-password" type="password" name="confirm-password" data-constraints="@Required">
                  <label class="form-label" for="register-confirm-password">Confirm Password</label>
                </div>
                <button class="button button-lg button-round button-block button-primary" type="submit">Register</button>
              </form>
              <div class="group-sm group-sm-justify group-middle social-items"><span>or use</span><a class="icon icon-lg icon-gray-400 novi-icon fa fa-facebook" href="#"></a><a class="icon icon-lg icon-gray-400 novi-icon fa fa-twitter" href="#"></a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Login Form-->
      <section class="section section-lg bg-default text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-6 col-xxl-4">
              <h3>Login</h3>
              <!-- RD Mailform-->
              <form class="rd-form form-lg rd-mailform">
                <div class="form-wrap">
                  <input class="form-input" id="login-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="login-email">E-mail</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="login-password" type="password" name="password" data-constraints="@Required">
                  <label class="form-label" for="login-password">Password</label>
                </div>
                <button class="button button-lg button-round button-block button-primary" type="submit">Sign In</button>
              </form>
              <div class="group-sm group-sm-justify group-middle social-items"><span>or enter with</span><a class="icon icon-lg icon-gray-400 novi-icon fa fa-facebook" href="#"></a><a class="icon icon-lg icon-gray-400 novi-icon fa fa-twitter" href="#"></a></div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Us (with reCAPTCHA)-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-7 col-xxl-4">
              <h3>Contact Us (with reCAPTCHA)</h3>
              <!-- RD Mailform-->
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <input class="form-input" id="contact-2-name" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-2-name">Name</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="contact-2-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-2-email">E-mail</label>
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-2-message">Message</label>
                  <textarea class="form-input" id="contact-2-message" name="message" data-constraints="@Required"></textarea>
                </div>
                <div class="form-wrap form-wrap-recaptcha">
                  <!-- Google captcha-->
                  <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
                </div>
                <button class="button button-primary" type="submit">Send</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="section footer-1">
        <div class="container">
          <div class="row row-40 wow fadeIn">
            <div class="col-md-6 col-lg-4">
              <h5 class="title">About Us</h5>
              <p>Dot Bank is the leading financial establishment providing high-quality international banking services. Our success is attributed to our loyal customers and to the talent and dedication of our professional and skilled employees. We are always ready to partner with you by offering full financial support to our clients worldwide.</p><a class="footer-logo" href="index.html"><img src="images/logo-inverse-145x39.png" alt="" width="145" height="39"/></a>
            </div>
            <div class="col-md-6 col-lg-4">
              <h5 class="title">Twitter Feed</h5>
              <!-- RD Twitter Feed-->
              <div class="twitter" data-twitter-username="templatemonster" data-twitter-date-hours=" hours ago" data-twitter-date-minutes=" minutes ago">
                <div class="tweet" data-twitter-type="tweet">
                  <div class="tweet-left">
                    <div class="icon fa-twitter"></div>
                  </div>
                  <div class="tweet-right">
                    <div class="twitter-text text-dark" data-tweet="text"></div>
                    <div class="twitter-meta">
                      <div class="twitter-name" data-screen_name="text"></div>
                    </div>
                  </div>
                </div>
                <div class="tweet" data-twitter-type="tweet">
                  <div class="tweet-left">
                    <div class="icon fa-twitter"></div>
                  </div>
                  <div class="tweet-right">
                    <div class="twitter-text text-dark" data-tweet="text"></div>
                    <div class="twitter-meta">
                      <div class="twitter-name" data-screen_name="text"></div>
                    </div>
                  </div>
                </div>
                <div class="tweet" data-twitter-type="tweet">
                  <div class="tweet-left">
                    <div class="icon fa-twitter"></div>
                  </div>
                  <div class="tweet-right">
                    <div class="twitter-text text-dark" data-tweet="text"></div>
                    <div class="twitter-meta">
                      <div class="twitter-name" data-screen_name="text"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-10 col-lg-4">
              <h5 class="title">Get in Touch</h5>
              <!-- RD Mailform-->
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <input class="form-input" id="contact-name-footer" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-name-footer">Name</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="contact-email-footer" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email-footer">E-mail</label>
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-message-footer">Message</label>
                  <textarea class="form-input" id="contact-message-footer" name="message" data-constraints="@Required"></textarea>
                </div>
                <button class="button button-primary" type="submit">Send</button>
              </form>
            </div>
          </div>
          <!-- Rights-->
          <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>All rights reserved</span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
        </div>
      </footer>
    </div>
    <!-- PANEL-->
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager --></body>
</html>