<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Course || Kipso</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets_homepage/assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets_homepage/assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets_homepage/assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets_homepage/assets/images/favicons/site.webmanifest">

    <!-- plugin scripts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,500i,600,700,800%7CSatisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets_homepage/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets_homepage/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets_homepage/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets_homepage/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets_homepage/assets/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
    <link rel="stylesheet" href="/assets_homepage/assets/plugins/kipso-icons/style.css">
    <link rel="stylesheet" href="/assets_homepage/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets_homepage/assets/css/vegas.min.css">

    <!-- template styles -->
    <link rel="stylesheet" href="/assets_homepage/assets/css/style.css">
    <link rel="stylesheet" href="/assets_homepage/assets/css/responsive.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @toastr_css
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <div class="topbar-one">
            <div class="container">
                <div class="topbar-one__left">
                    <a href="#">needhelp@kipso.com</a>
                    <a href="#">444 888 0000</a>
                </div><!-- /.topbar-one__left -->
                @if (Auth::guard('cutomer')->check()){
                    <div class="topbar-one__right">
                        <a href="/logout">Logout</a>
                    </div>
                @else
                    <div class="topbar-one__right">
                        <a href="/login">Login</a>
                        <a href="/register">Register</a>
                    </div>
                @endif
            </div><!-- /.container -->
        </div><!-- /.topbar-one -->
        <header class="site-header site-header__header-one site-header__inner-page ">
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="/">
                            <img src="/assets_homepage/assets/images/logo-dark.png" class="main-logo" width="128" alt="Awesome Image" />
                        </a>
                        <div class="header__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div><!-- /.header__social -->
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="kipso-icon-menu"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box">
                            <li class="current">
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="/pricing">Pricing Plans</a></li>
                                    <li><a href="/faq">FAQ'S</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="/courses">Courses</a>
                                <ul class="sub-menu">
                                    <li><a href="/courses">Courses</a></li>
                                    <li><a href="/course-details-n1">Course Details</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <a class="header__search-btn search-popup__toggler" href="#"><i class="kipso-icon-magnifying-glass"></i>
                            <!-- /.kipso-icon-magnifying-glass --></a>
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
            <div class="site-header__decor">
                <div class="site-header__decor-row">
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-1"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-2"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                    <div class="site-header__decor-single">
                        <div class="site-header__decor-inner-3"></div><!-- /.site-header__decor-inner -->
                    </div><!-- /.site-header__decor-single -->
                </div><!-- /.site-header__decor-row -->
            </div><!-- /.site-header__decor -->
        </header><!-- /.site-header -->
        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Register Course</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Register Course</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="contact-one">
            <div class="container">
                <h2 class="contact-one__title text-center">Information</h2><!-- /.contact-one__title -->
                <form action="/create-course" method="post" class="contact-one__form">
                    @csrf
                    <div class="row low-gutters">
                        <div class="col-lg-6">
                            <input id="fullname" name="fullname" type="text" placeholder="Your Name">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input id="sex" name="sex" type="text" placeholder="Sex">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input id="datetime" name="datetime" type="date" type="text" placeholder="Date Time">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input id="phone" name="phone" type="text" placeholder="Phone">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input id="email" name="email" type="text" placeholder="Email">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input id="password" name="password" type="text" placeholder="Password">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <div class="text-center">
                                <button type="submit" class="contact-one__btn thm-btn">Add New</button>
                            </div><!-- /.text-center -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </form><!-- /.contact-one__form -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

        <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__contact">
                                <h2 class="footer-widget__title">Courses</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__course-list">
                                    <li>
                                        <h2><a href="course-details.html">Introduction Web Design</a></h2>
                                        <p>Mike Hardson</p>
                                    </li>
                                    <li>
                                        <h2><a href="course-details.html"> Learning MBA Management </a></h2>
                                        <p>Jessica Brown</p>
                                    </li>
                                </ul><!-- /.footer-widget__course-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__link">
                                <h2 class="footer-widget__title">Explore</h2><!-- /.footer-widget__title -->
                                <div class="footer-widget__link-wrap">
                                    <ul class="list-unstyled footer-widget__link-list">
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Overview</a></li>
                                        <li><a href="#">Teachers</a></li>
                                        <li><a href="#">Join Us</a></li>
                                        <li><a href="#">Our News</a></li>
                                    </ul><!-- /.footer-widget__link-list -->
                                    <ul class="list-unstyled footer-widget__link-list">
                                        <li><a href="#">Help </a></li>
                                        <li><a href="#">Contact</a></li>
                                        <li><a href="#">Register Now</a></li>
                                    </ul><!-- /.footer-widget__link-list -->
                                </div><!-- /.footer-widget__link-wrap -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__gallery">
                                <h2 class="footer-widget__title">Gallery</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__gallery-list">
                                    <li><a href="#"><img src="/assets_homepage/assets/images/footer-1-1.png" alt=""></a></li>
                                    <li><a href="#"><img src="/assets_homepage/assets/images/footer-1-2.png" alt=""></a></li>
                                    <li><a href="#"><img src="/assets_homepage/assets/images/footer-1-3.png" alt=""></a></li>
                                    <li><a href="#"><img src="/assets_homepage/assets/images/footer-1-4.png" alt=""></a></li>
                                    <li><a href="#"><img src="/assets_homepage/assets/images/footer-1-5.png" alt=""></a></li>
                                    <li><a href="#"><img src="/assets_homepage/assets/images/footer-1-6.png" alt=""></a></li>
                                </ul><!-- /.footer-widget__gallery -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__about">
                                <h2 class="footer-widget__title">About</h2><!-- /.footer-widget__title -->
                                <p class="footer-widget__text">Lorem ipsum dolor sit ametcon, sectetur adipiscing elit.
                                    Phasellus vehic sagittis euismod.</p><!-- /.footer-widget__text -->
                                <div class="footer-widget__btn-block">
                                    <a href="#" class="thm-btn">Contact</a><!-- /.thm-btn -->
                                    <a href="#" class="thm-btn">Purchase</a><!-- /.thm-btn -->
                                </div><!-- /.footer-widget__btn-block -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <p class="site-footer__copy">&copy; Copyright 2019 by <a href="#">Layerdrops.com</a></p>
                    <div class="site-footer__social">
                        <a href="#" data-target="html" class="scroll-to-target site-footer__scroll-top"><i class="kipso-icon-top-arrow"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div><!-- /.site-footer__social -->
                    <!-- /.site-footer__copy -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->

    </div><!-- /.page-wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.search-popup__overlay -->
        <div class="search-popup__inner">
            <form action="#" class="search-popup__form">
                <input type="text" name="search" placeholder="Type here to Search....">
                <button type="submit"><i class="kipso-icon-magnifying-glass"></i></button>
            </form>
        </div><!-- /.search-popup__inner -->
    </div><!-- /.search-popup -->
    @jquery
    @toastr_js
    @toastr_render
    <script src="/assets_homepage/assets/js/jquery.min.js"></script>
    <script src="/assets_homepage/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets_homepage/assets/js/owl.carousel.min.js"></script>
    <script src="/assets_homepage/assets/js/waypoints.min.js"></script>
    <script src="/assets_homepage/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets_homepage/assets/js/TweenMax.min.js"></script>
    <script src="/assets_homepage/assets/js/wow.js"></script>
    <script src="/assets_homepage/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets_homepage/assets/js/countdown.min.js"></script>
    <script src="/assets_homepage/assets/js/vegas.min.js"></script>

    <!-- template scripts -->
    <script src="/assets_homepage/assets/js/theme.js"></script>
</body>

</html>
