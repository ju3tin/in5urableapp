
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Buttons</title>
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
          <h1>Buttons</h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Buttons</li>
          </ul>
        </div>
      </section>
      <!-- Button Sizes-->
      <section class="section section-lg bg-default">
        <div class="container">
          <h2>Button Sizes</h2>
          <div class="group-xl group-middle buttons-group">
            <div class="button button-lg button-primary">Large Size</div>
            <div class="button button-primary">Default Size</div>
            <div class="button button-sm button-primary">Small Size</div>
          </div>
        </div>
      </section>
      <!-- Button Shapes-->
      <section class="section section-lg bg-default">
        <div class="container">
          <h2>Button Shapes</h2>
          <div class="group-xl group-middle buttons-group">
            <div class="button button-primary button-circle">Circle</div>
            <div class="button button-primary button-round">Round</div>
          </div>
        </div>
      </section>
      <!-- Buttons with Icons-->
      <section class="section section-lg bg-default">
        <div class="container">
          <h2>Buttons with Icons</h2>
          <div class="group-xl group-middle buttons-group">
            <div class="button button-lg button-icon button-icon-left button-primary"><span class="icon mdi mdi-credit-card"></span>Book a Card</div>
          </div>
        </div>
      </section>
      <!-- Buttons with Shadow-->
      <section class="section section-lg bg-default">
        <div class="container">
          <h2>Buttons without Shadow</h2>
          <div class="group-xl group-middle buttons-group">
            <div class="button button-lg button-primary button-no-shadow">Large size</div>
            <div class="button button-primary button-no-shadow">Default size</div>
            <div class="button button-sm button-primary button-no-shadow">Small size</div>
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