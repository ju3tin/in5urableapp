
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Grid Gallery</title>
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
   $path .= "/menu/menu.php";
   include_once($path);
?>
      </header>
      <!-- Breadcrumbs -->
      <section class="section section-bredcrumbs">
        <div class="container context-dark breadcrumb-wrapper">
          <h1>Grid Gallery</h1>
          <ul class="breadcrumbs-custom">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Grid Gallery</li>
          </ul>
        </div>
      </section>
      <!-- Your Career Starts Here-->
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row">
            <!-- Isotope Filters-->
            <div class="col-lg-12">
              <div class="isotope-filters isotope-filters-horizontal isotope-filters-line">
                <button class="isotope-filters-toggle button button-sm button-primary" data-custom-toggle="#isotope-filters" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button>
                <ul class="isotope-filters-list" id="isotope-filters">
                  <li><a class="active" data-isotope-filter="*" data-isotope-group="gallery" href="#">All Types</a></li>
                  <li><a data-isotope-filter="Category 1" data-isotope-group="gallery" href="#">Type 1</a></li>
                  <li><a data-isotope-filter="Category 2" data-isotope-group="gallery" href="#">Type 2</a></li>
                  <li><a data-isotope-filter="Category 3" data-isotope-group="gallery" href="#">Type 3</a></li>
                </ul>
              </div>
            </div>
            <!-- Isotope Content-->
            <div class="col-lg-12 text-left">
              <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
                <div class="row">
                  <div class="col-sm-6 col-lg-4 isotope-item" data-filter="*"><a class="gallery-item" data-lightgallery="item" href="images/gallery-original-1-1200x600.jpg"><img src="images/grid-gallery-1-370x248.jpg" alt="" width="370" height="248"/>
                      <div class="gallery-item-content">
                        <div class="heading-5 title">Photo #1</div>
                        <div class="exeption">Dot Bank offers its clients high-quality banking services all over the world.</div>
                      </div></a>
                  </div>
                  <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Category 3"><a class="gallery-item" data-lightgallery="item" href="images/gallery-original-2-1200x600.jpg"><img src="images/grid-gallery-2-370x248.jpg" alt="" width="370" height="248"/>
                      <div class="gallery-item-content">
                        <div class="heading-5 title">Photo #2</div>
                        <div class="exeption">Dot Bank offers its clients high-quality banking services all over the world.</div>
                      </div></a>
                  </div>
                  <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Category 3"><a class="gallery-item" data-lightgallery="item" href="images/gallery-original-3-1200x600.jpg"><img src="images/grid-gallery-3-370x248.jpg" alt="" width="370" height="248"/>
                      <div class="gallery-item-content">
                        <div class="heading-5 title">Photo #3</div>
                        <div class="exeption">Dot Bank offers its clients high-quality banking services all over the world.</div>
                      </div></a>
                  </div>
                  <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Category 3"><a class="gallery-item" data-lightgallery="item" href="images/gallery-original-4-1200x600.jpg"><img src="images/grid-gallery-4-370x248.jpg" alt="" width="370" height="248"/>
                      <div class="gallery-item-content">
                        <div class="heading-5 title">Photo #4</div>
                        <div class="exeption">Dot Bank offers its clients high-quality banking services all over the world.</div>
                      </div></a>
                  </div>
                  <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="gallery-item" data-lightgallery="item" href="images/gallery-original-5-1200x600.jpg"><img src="images/grid-gallery-5-370x248.jpg" alt="" width="370" height="248"/>
                      <div class="gallery-item-content">
                        <div class="heading-5 title">Photo #5</div>
                        <div class="exeption">Dot Bank offers its clients high-quality banking services all over the world.</div>
                      </div></a>
                  </div>
                  <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Category 2"><a class="gallery-item" data-lightgallery="item" href="images/gallery-original-6-1200x600.jpg"><img src="images/grid-gallery-6-370x248.jpg" alt="" width="370" height="248"/>
                      <div class="gallery-item-content">
                        <div class="heading-5 title">Photo #6</div>
                        <div class="exeption">Dot Bank offers its clients high-quality banking services all over the world.</div>
                      </div></a>
                  </div>
                  <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="gallery-item" data-lightgallery="item" href="images/gallery-original-7-1200x600.jpg"><img src="images/grid-gallery-7-370x248.jpg" alt="" width="370" height="248"/>
                      <div class="gallery-item-content">
                        <div class="heading-5 title">Photo #7</div>
                        <div class="exeption">Dot Bank offers its clients high-quality banking services all over the world.</div>
                      </div></a>
                  </div>
                  <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="gallery-item" data-lightgallery="item" href="images/gallery-original-8-1200x600.jpg"><img src="images/grid-gallery-8-370x248.jpg" alt="" width="370" height="248"/>
                      <div class="gallery-item-content">
                        <div class="heading-5 title">Photo #8</div>
                        <div class="exeption">Dot Bank offers its clients high-quality banking services all over the world.</div>
                      </div></a>
                  </div>
                  <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Category 1"><a class="gallery-item" data-lightgallery="item" href="images/gallery-original-9-1200x600.jpg"><img src="images/grid-gallery-9-370x248.jpg" alt="" width="370" height="248"/>
                      <div class="gallery-item-content">
                        <div class="heading-5 title">Photo #9</div>
                        <div class="exeption">Dot Bank offers its clients high-quality banking services all over the world.</div>
                      </div></a>
                  </div>
                </div>
              </div>
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