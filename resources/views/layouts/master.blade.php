<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>@yield('title')</title>
    <link rel="icon" href="favicon.ico" type="image/png">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
        <script src="js/respond-1.1.0.min.js"></script>
        <script src="js/html5shiv.js"></script>
        <script src="js/html5element.js"></script>
    <![endif]-->

  </head>
  <body>

  @yield('content')

  <!--Footer-->
  <footer class="footer_wrapper" id="contact">
    <div class="container">
      <section class="page_section contact" id="contact">
        <div class="contact_section">
          <h2>Contact Us</h2>
          <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4">

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 wow fadeInLeft">
  		 <div class="contact_info">
                <div class="detail">
                    <h4>K-Vents Infoway</h4>
                    <p>Jalan Sukabirus, Telkom University, Bandung</p>
                </div>
                <div class="detail">
                    <h4>call us</h4>
                    <p>+62 822 8337 7806</p>
                </div>
                <div class="detail">
                    <h4>Email us</h4>
                    <p>zkhalida34@gmail.com</p>
                </div>
            </div>
          </div>
          <div class="col-lg-5 wow fadeInLeft delay-06s">
            <img width="275px" src="img/icon_kvents1.png" class="delay-03s animated wow zoomIn" alt="kvents-logo">
          </div>
        </div>
      </section>
    </div>
    <div class="container">
      <div class="footer_bottom"><span>Copyright © 2018 K-Vents | Edit by
        <a href="http://vanard.github.io" target="_blank"> vanard </a> </span> </div>
    </div>
  </footer>

    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

    </body>
  </html>
