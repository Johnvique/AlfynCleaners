<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ALFINE CLEANERS LIMITED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top black-bg d-none d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="header-contact">
                            <a href="{{url('tel:+254704973187')}}"><i class="fa fa-phone"></i> +254704973187</a>
                            <a href="{{url('mailto:admin@alfinecleaners.com')}}"><i class="fa fa-envelope"></i> admin@alfinecleaners.com</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="header-top-menu">
                                <nav>
                                    <ul>
                                        <p style="color:white">Motto:<em>keeping clean and fancy is our priority</em></p>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area white-bg">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                            <a href="{{url('/#')}}">
                                    {{-- <img src="img/logo.png" alt=""> --}}
                                    <span style="color:#CB3301">ALFINE LTD</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                    <li><a class="active" href="{{url('/')}}">Home</a></li>
                                    <li><a href="#">Portfolio <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                        <li><a href="{{url('/about-us')}}">About Us</a></li>
                                        </ul>
                                    </li>
                                        <li><a href="#">Our Work <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                            <li><a href="{{url('/our-services')}}">Services Offered</a></li>
                                            <li><a href="{{url('/why-us')}}">Why Us</a></li>
                                            </ul>
                                        </li>
                                    <li><a href="{{url('/photo-gallery')}}">Gallery</a></li>
                                    <li><a href="{{url('/contact-us')}}">Contact Us</a></li>
                                </nav>
                            </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <div class="quote-area">
                                <div class="get-quote d-none d-lg-block">
                                <a class="boxed-btn" href="{{url('/contact-us')}}">Get a quote</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                    <div class="search_input" id="search_input_box">
                        <div class="container ">
                            <form class="d-flex justify-content-between search-inner">
                                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                                <button type="submit" class="btn"></button>
                                <span class="fa fa-close" id="close_search" title="Close Search"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    @yield('master')

    <!-- footer-start -->
    <footer class="footer-area ">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-3 col-xl-4">
                    <div class="single-footer-widget footer_1">
                        <span style="color:style="color:#00639A"">ALFINE CLEANERS LTD</span>
                        <a href="index.html"> <img src="img/footer-logo.png" alt=""> </a>
                        <div class="social-links">
                            <ul>
                            <li><a href="{{url('/#')}}"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="{{url('/#')}}"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="{{url('/#')}}"> <i class="fa fa-instagram"></i> </a></li>
                                <li><a href="{{url('/#')}}"> <i class="fa fa-linkedin"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-2 col-xl-2">
                    <div class="single-footer-widget">
                        <h5 style="color:#00639A">Quick Links</h5>
                        <ul>
                        <li><a href="{{url('/')}}">Home Page</a></li>
                            <li><a href="{{url('/our-services')}}">Our Projects</a></li>
                            <li><a href="{{url('/about-us')}}">Alfine History</a></li>
                            <li><a href="{{url('/contact-us')}}">Talk To Us</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xl-3">
                    <div class="single-footer-widget">
                        <h5 style="color:#00639A">Solutions</h5>
                        <ul>
                            <li><a href="#">Industrial problems</a></li>
                            <li><a href="#"> Construction solution</a></li>
                            <li><a href="#">Car manufacturing</a></li>
                            <li><a href="#">Mechanical problems</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-xl-3">
                    <div class="single-footer-widget footer_icon">
                        <h5 style="color:#00639A">Contact Address</h5>
                        <div class="office-location">
                            <ul>
                                <li>
                                    <p>Alfine Cleaners Limited,<br>
                                    P.O BOX 22-40400, <br>
                                        RONGO-MIGORI.<br>
                                     Phone:<a href="{{url('tel:+254704973187')}}"><i class="fa fa-phone"></i> +254704973187</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>| 
                            <a href="{{url('http://johnvique.info')}}">
                            <span style="color:#00639A">Alfine Cleaners Limited</span></a> | All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>