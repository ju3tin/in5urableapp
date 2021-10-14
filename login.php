
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Login/Registration</title>
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
      <section class="section one-screen-page bg-primary-dark">
        <div class="one-screen-page-inner">
          <header class="section page-header">
            <!-- RD Navbar-->
            <?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/include/menu.php";
   include_once($path);
?>
          </header>
          <div class="page-content text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-4">
                  <!-- Tabs-->
                  <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                    <!-- Nav tabs-->
                    <ul class="nav nav-tabs nav-tabs-inline">
                      <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">Login</a></li>
                      <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">Registration</a></li>
                    </ul>
                    <!-- Tab panes-->
                    <div class="tab-content">
                      <div class="tab-pane fade show active" id="tabs-1-1">
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
                          <button class="button button-lg button-round button-block button-primary" type="submit">Register</button>
                        </form>
                        <div class="group-sm group-sm-justify group-middle social-items"><span>or use</span><a class="icon icon-lg icon-gray-100 novi-icon fa fa-facebook" href="#"></a><a class="icon icon-lg icon-gray-100 novi-icon fa fa-twitter" href="#"></a></div>
                      </div>
                      <div class="tab-pane fade" id="tabs-1-2">
                        <h3>Registration</h3>
                        <!-- RD Mailform-->
                        <form class="rd-form form-lg rd-mailform">
                          <div class="form-wrap">
                            <input class="form-input" id="register-name" type="text" name="username" data-constraints="@Required">
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
                        <div class="group-sm group-sm-justify group-middle social-items"><span>or use</span><a class="icon icon-lg icon-gray-100 novi-icon fa fa-facebook" href="#"></a><a class="icon icon-lg icon-gray-100 novi-icon fa fa-twitter" href="#"></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page-footer">
            <div class="container">
              <!-- Rights-->
              <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>All rights reserved</span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- PANEL-->
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  <!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager --></body>
</html>