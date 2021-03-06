<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Details Page || Kipso</title>
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
</head>

<body>
    <div class="preloader"><span></span></div><!-- /.preloader -->
    <div class="page-wrapper">
        <header class="site-header site-header__home-three ">
            <div class="topbar-one">
                <div class="container">
                    <div class="topbar-one__left">
                        <a href="#">chieuthuymaijenny@gmail.com</a>
                        <a href="#">0963 779 109</a>
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
            <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
                <div class="container clearfix">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="logo-box clearfix">
                        <a class="navbar-brand" href="/">
                            <img src="/assets_homepage/assets/images/logo-light.png" class="main-logo" width="128" alt="Awesome Image" />
                        </a>
                        <button class="menu-toggler" data-target=".main-navigation">
                            <span class="kipso-icon-menu"></span>
                        </button>
                    </div><!-- /.logo-box -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="main-navigation">
                        <ul class=" navigation-box">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="/pricing">Pricing Plans</a></li>
                                    <li><a href="/faq">FAQ'S</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li class="current">
                                <a href="/course">Courses</a>
                                <ul class="sub-menu">
                                    <li><a href="/course">Courses</a></li>
                                    <li><a href="/course-details-n1">Course Details</a></li>
                                </ul><!-- /.sub-menu -->
                            </li>
                            <li>
                                <a href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                    <div class="right-side-box">
                        <div class="header__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div><!-- /.header__social -->
                    </div><!-- /.right-side-box -->
                </div>
                <!-- /.container -->
            </nav>
        </header><!-- /.site-header -->
        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Course Details</a></li>
                </ul><!-- /.list-unstyled -->
                <h2 class="inner-banner__title">Course Details</h2><!-- /.inner-banner__title -->
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->
        <section class="course-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="course-details__content">
                            <p class="course-details__author">
                                <img src="/assets_homepage/assets/images/team-1-1.jpg" alt="">
                                by <a>Anh Minh</a>
                            </p><!-- /.course-details__author -->

                            <div class="course-details__top">
                                <div class="course-details__top-left">
                                    <h2 class="course-details__title">JLPT N3</h2>
                                    <!-- /.course-details__title -->
                                    <div class="course-one__stars">
                                        <span class="course-one__stars-wrap">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span><!-- /.course-one__stars-wrap -->
                                        <span class="course-one__count">4.8</span><!-- /.course-one__count -->
                                        <span class="course-one__stars-count">250</span><!-- /.course-one__stars-count -->
                                    </div><!-- /.course-one__stars -->
                                </div><!-- /.course-details__top-left -->
                                <div class="course-details__top-right">
                                    <a href="#" class="course-one__category">intermediate</a><!-- /.course-one__category -->
                                </div><!-- /.course-details__top-right -->
                            </div><!-- /.course-details__top -->
                            <div class="course-one__image">
                                <img src="/assets_homepage/assets/images/course-d-3.jpg" alt="">
                                <i class="far fa-heart"></i><!-- /.far fa-heart -->
                            </div><!-- /.course-one__image -->

                            <ul class="course-details__tab-navs list-unstyled nav nav-tabs" role="tablist">
                                <li>
                                    <a class="active" role="tab" data-toggle="tab" href="#overview">Overview</a>
                                </li>
                                <li>
                                    <a class="" role="tab" data-toggle="tab" href="#curriculum">Curriculum</a>
                                </li>
                                <li>
                                    <a class="" role="tab" data-toggle="tab" href="#review">Reviews</a>
                                </li>
                            </ul><!-- /.course-details__tab-navs list-unstyled -->
                            <div class="tab-content course-details__tab-content ">
                                <div class="tab-pane show active  animated fadeInUp" role="tabpanel" id="overview">
                                    <p class="course-details__tab-text">The ???Online Japanese N3 Course??? is Japanese study materials related to the JLPT N3 level. You can study vocabulary, grammar, reading comprehension that corresponds to the JLPT N3 level. The Japanese of N3 level is applied in actual conversations, so this course is useful for JLPT preparation and advancing your Japanese communication proficiency.

                                    </p><!-- /.course-details__tab-text -->
                                    <br>
                                    <p class="course-details__tab-text"> You will be able to access to our Video Lecture 24 hours a day. Our Live Lecture is in in small group. You can participate in classes anywhere with the internet connection. You can also access to the recorded lectures even if you are absent.

                                    </p>
                                    <!-- /.course-details__tab-text -->
                                    <br>
                                    <ul class="list-unstyled course-details__overview-list">
                                        <li>Master vocabulary, grammar, and reading comprehension related to the JLPT N3.</li>
                                        <li>Be able to comprehend and read everyday topics, slightly complex Japanese sentences, newspaper headlines</li>
                                        <li>Be able to speak and understand intermediate level business Japanese.</li>
                                        <li>Be able to comprehend contents spoken in almost natural speed in daily life conversations.</li>
                                    </ul><!-- /.list-unstyled course-details__overview-list -->
                                </div><!-- /.course-details__tab-content -->
                                <div class="tab-pane  animated fadeInUp" role="tabpanel" id="curriculum">
                                    <h3 class="course-details__tab-title">Starting intermediate level course</h3>
                                    <!-- /.course-details__title -->
                                    <br>
                                    <p class="course-details__tab-text"></p>
                                    <!-- /.course-details__tab-text -->
                                    <br>
                                    <ul class="course-details__curriculum-list list-unstyled">
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon video-icon">
                                                    <i class="fas fa-play"></i><!-- /.fas fa-play -->
                                                </div><!-- /.course-details__icon -->
                                                <a>Vocabulary</a>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <div class="course-details__curriculum-list-right"></div>
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon video-icon">
                                                    <i class="fas fa-play"></i><!-- /.fas fa-play -->
                                                </div><!-- /.course-details__icon -->
                                                <a>Kanji</a>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <div class="course-details__curriculum-list-right"></div>
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon file-icon">
                                                    <i class="fas fa-folder"></i><!-- /.far fa-folder -->
                                                </div><!-- /.course-details__icon -->
                                                <a>Grammar</a>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon quiz-icon">
                                                    <i class="fas fa-comment"></i><!-- /.fas fa-play -->
                                                </div><!-- /.course-details__icon -->
                                                <a>Quiz</a>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <div class="course-details__curriculum-list-right">200 questions</div>
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                    </ul><!-- /.course-details__curriculum-list -->
                                    <br><br>
                                    <h3 class="course-details__tab-title">Extra skills to learn</h3>
                                    <!-- /.course-details__title -->
                                    <br>
                                    <p class="course-details__tab-text"></p>
                                    <!-- /.course-details__tab-text -->
                                    <br>
                                    <ul class="course-details__curriculum-list list-unstyled">
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon video-icon">
                                                    <i class="fas fa-play"></i><!-- /.fas fa-play -->
                                                </div><!-- /.course-details__icon -->
                                                <a>Kaiwa</a>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <div class="course-details__curriculum-list-right"></div>
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon file-icon">
                                                    <i class="fas fa-folder"></i><!-- /.far fa-folder -->
                                                </div><!-- /.course-details__icon -->
                                                <a>Reading</a>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                        <li>
                                            <div class="course-details__curriculum-list-left">
                                                <div class="course-details__meta-icon quiz-icon">
                                                    <i class="fas fa-comment"></i><!-- /.fas fa-play -->
                                                </div><!-- /.course-details__icon -->
                                                <a>Quiz</a>
                                            </div><!-- /.course-details__curriculum-list-left -->
                                            <div class="course-details__curriculum-list-right">230 questions</div>
                                            <!-- /.course-details__curriculum-list-right -->
                                        </li>
                                    </ul><!-- /.course-details__curriculum-list -->
                                </div><!-- /.course-details__tab-content -->
                                <div class="tab-pane  animated fadeInUp" role="tabpanel" id="review">
                                    <div class="row">
                                        <div class="col-xl-7 d-flex">
                                            <div class="course-details__progress my-auto">
                                                <div class="course-details__progress-item">
                                                    <p class="course-details__progress-text">Excellent</p>
                                                    <!-- /.course-details__progress-text -->
                                                    <div class="course-details__progress-bar">
                                                        <span style="width: 95%"></span>
                                                    </div><!-- /.course-details__progress-bar -->
                                                    <p class="course-details__progress-count">5</p>
                                                    <!-- /.course-details__progress-count -->
                                                </div><!-- /.course-details__progress-item -->
                                                <div class="course-details__progress-item">
                                                    <p class="course-details__progress-text">Very Good</p>
                                                    <!-- /.course-details__progress-text -->
                                                    <div class="course-details__progress-bar">
                                                        <span style="width: 65%"></span>
                                                    </div><!-- /.course-details__progress-bar -->
                                                    <p class="course-details__progress-count">2</p>
                                                    <!-- /.course-details__progress-count -->
                                                </div><!-- /.course-details__progress-item -->
                                                <div class="course-details__progress-item">
                                                    <p class="course-details__progress-text">Average</p>
                                                    <!-- /.course-details__progress-text -->
                                                    <div class="course-details__progress-bar">
                                                        <span style="width: 33%"></span>
                                                    </div><!-- /.course-details__progress-bar -->
                                                    <p class="course-details__progress-count">1</p>
                                                    <!-- /.course-details__progress-count -->
                                                </div><!-- /.course-details__progress-item -->
                                                <div class="course-details__progress-item">
                                                    <p class="course-details__progress-text">Poor</p>
                                                    <!-- /.course-details__progress-text -->
                                                    <div class="course-details__progress-bar">
                                                        <span style="width: 0%" class="no-bubble"></span>
                                                    </div><!-- /.course-details__progress-bar -->
                                                    <p class="course-details__progress-count">0</p>
                                                    <!-- /.course-details__progress-count -->
                                                </div><!-- /.course-details__progress-item -->
                                                <div class="course-details__progress-item">
                                                    <p class="course-details__progress-text">Terrible</p>
                                                    <!-- /.course-details__progress-text -->
                                                    <div class="course-details__progress-bar">
                                                        <span style="width: 0%" class="no-bubble"></span>
                                                    </div><!-- /.course-details__progress-bar -->
                                                    <p class="course-details__progress-count">0</p>
                                                    <!-- /.course-details__progress-count -->
                                                </div><!-- /.course-details__progress-item -->
                                            </div><!-- /.course-details__progress -->
                                        </div><!-- /.col-lg-8 -->
                                        <div class="col-xl-5 justify-content-xl-end justify-content-sm-center d-flex">
                                            <div class="course-details__review-box">
                                                <p class="course-details__review-count">4.6</p>
                                                <!-- /.course-details__review-count -->
                                                <div class="course-details__review-stars">
                                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                    <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                                    <i class="fas fa-star-half"></i><!-- /.fas fa-star -->
                                                </div><!-- /.course-details__review-stars -->
                                                <p class="course-details__review-text">30 reviews</p>
                                                <!-- /.course-details__review-text -->
                                            </div><!-- /.course-details__review-box -->
                                        </div><!-- /.col-lg-4 -->
                                    </div><!-- /.row -->
                                    <div class="course-details__comment">
                                        <div class="course-details__comment-single">
                                            <div class="course-details__comment-top">
                                                <div class="course-details__comment-img">
                                                    <img src="/assets_homepage/assets/images/team-1-1.jpg" alt="">
                                                </div><!-- /.course-details__comment-img -->
                                                <div class="course-details__comment-right">Bao Ngoc</h2>
                                                    <!-- /.course-details__comment-name -->
                                                    <div class="course-details__comment-meta">
                                                        <p class="course-details__comment-date">29 Jan, 2022</p>
                                                        <!-- /.course-details__comment-date -->
                                                        <div class="course-details__comment-stars">
                                                            <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star star-disabled"></i><!-- /.fa fa-star -->
                                                        </div><!-- /.course-details__comment-stars -->
                                                    </div><!-- /.course-details__comment-meta -->
                                                </div><!-- /.course-details__comment-right -->
                                            </div><!-- /.course-details__comment-top -->
                                            <p class="course-details__comment-text">Kipso has awesome methods to teach Japanese Language. They are very professional making lessons comfortable even if the class level is a bit more hard. Halfway Update: Like in Schools timeline new Kyoshi but with the same quality and professionalism like Ando Aki Sensei. Sumiyoshi Risa Sensei has the same passion to teach. Final Update: My best feelings to learn with you, now move on the N2 course. Thank you so much Kipso.</p>
                                            <!-- /.course-details__comment-text -->
                                        </div><!-- /.course-details__comment-single -->
                                        <div class="course-details__comment-single">
                                            <div class="course-details__comment-top">
                                                <div class="course-details__comment-img">
                                                    <img src="/assets_homepage/assets/images/team-1-2.jpg" alt="">
                                                </div><!-- /.course-details__comment-img -->
                                                <div class="course-details__comment-right">
                                                    <h2 class="course-details__comment-name">Khanh Ha</h2>
                                                    <!-- /.course-details__comment-name -->
                                                    <div class="course-details__comment-meta">
                                                        <p class="course-details__comment-date">30 July, 2021</p>
                                                        <!-- /.course-details__comment-date -->
                                                        <div class="course-details__comment-stars">
                                                            <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star star-disabled"></i><!-- /.fa fa-star -->
                                                            <i class="fa fa-star star-disabled"></i><!-- /.fa fa-star -->
                                                        </div><!-- /.course-details__comment-stars -->
                                                    </div><!-- /.course-details__comment-meta -->
                                                </div><!-- /.course-details__comment-right -->
                                            </div><!-- /.course-details__comment-top -->
                                            <p class="course-details__comment-text">Very very good course. Will not make you pass the N3 on its own, some supplemental vocabulary and grammar should be studied elsewhere.

                                                Videos and audios are high quality.</p>
                                            <!-- /.course-details__comment-text -->
                                        </div><!-- /.course-details__comment-single -->
                                    </div><!-- /.course-details__comment -->
                                    <form action="#" class="course-details__comment-form">
                                        <h2 class="course-details__title">Add a review</h2><!-- /.course-details__title -->
                                        <p class="course-details__comment-form-text">Rate this Course? <a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a><a href="#" class="fas fa-star"></a></p><!-- /.course-details__coment-form-text -->
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" placeholder="Your Name">
                                                <input type="text" placeholder="Email Address">
                                            </div><!-- /.col-lg-6 -->
                                            <div class="col-lg-12">
                                                <textarea placeholder="Write Message"></textarea>
                                                <button type="submit" class="thm-btn course-details__comment-form-btn">Leave a
                                                    Review</button>
                                            </div><!-- /.col-lg-12 -->
                                        </div><!-- /.row -->
                                    </form><!-- /.course-details__comment-form -->
                                </div><!-- /.course-details__tab-content -->
                            </div><!-- /.tab-content -->
                        </div><!-- /.course-details__content -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="course-details__price">
                            <p class="course-details__price-text">Course price </p><!-- /.course-details__price-text -->
                            <p class="course-details__price-amount">4.000.000VND</p><!-- /.course-details__price-amount -->
                            @if (Auth::guard('cutomer')->check())
                                <a href="/create-course" class="thm-btn course-details__price-btn">Buy This Course</a><!-- /.thm-btn -->
                            @else
                                <a href="/login" class="thm-btn course-details__price-btn">Buy This Course</a><!-- /.thm-btn -->
                            @endif
                        </div><!-- /.course-details__price -->

                        <div class="course-details__meta">
                            <a class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-clock"></i><!-- /.far fa-clock -->
                                </span><!-- /.course-details__icon -->
                                Durations: 12 months</span>
                            </a><!-- /.course-details__meta-link -->
                            <a class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-folder-open"></i><!-- /.far fa-folder-open -->
                                </span><!-- /.course-details__icon -->
                                Quizzes: 430</span>
                            </a><!-- /.course-details__meta-link -->
                            <a class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-user-circle"></i><!-- /.far fa-user-circle -->
                                </span><!-- /.course-details__icon -->
                                Students: Unlimited</span>
                            </a><!-- /.course-details__meta-link -->
                            <a class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="fas fa-play"></i><!-- /.fas fa-play -->
                                </span><!-- /.course-details__icon -->
                                Video: 1285 </span>
                            </a><!-- /.course-details__meta-link -->
                            <a class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-flag"></i><!-- /.far fa-flag -->
                                </span><!-- /.course-details__icon -->
                                Skill Level: Intermediate</span>
                            </a><!-- /.course-details__meta-link -->
                            <a class="course-details__meta-link">
                                <span class="course-details__meta-icon">
                                    <i class="far fa-bell"></i><!-- /.far fa-bell -->
                                </span><!-- /.course-details__icon -->
                                Language: Vietnamese</span>
                            </a><!-- /.course-details__meta-link -->
                        </div><!-- /.course-details__meta -->
                        <div class="course-details__list">
                            <h2 class="course-details__list-title">New Courses</h2><!-- /.course-details__list-title -->
                            <div class="course-details__list-item">
                                <div class="course-details__list-img">
                                    <img src="/assets_homepage/assets/images/lc-1-1.jpg" alt="">
                                </div><!-- /.course-details__list-img -->
                                <div class="course-details__list-content">
                                    <a class="course-details__list-author">by <span>Anh Minh</span></a>
                                    <h3><a href="course-details-N4">JLPT N4</a></h3>
                                    <div class="course-details__list-stars">
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <span>4.8</span>
                                    </div><!-- /.course-details__list-stars -->
                                </div><!-- /.course-details__list-content -->
                            </div><!-- /.course-details__list-item -->
                            <div class="course-details__list-item">
                                <div class="course-details__list-img">
                                    <img src="/assets_homepage/assets/images/lc-1-0.jpg" alt="">
                                </div><!-- /.course-details__list-img -->
                                <div class="course-details__list-content">
                                    <a class="course-details__list-author">by <span>Anh Minh</span></a>
                                    <h3><a href="course-details-n5.html">JLPT N5</a></h3>
                                    <div class="course-details__list-stars">
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <span>4.8</span>
                                    </div><!-- /.course-details__list-stars -->
                                </div><!-- /.course-details__list-content -->
                            </div><!-- /.course-details__list-item -->
                            <div class="course-details__list-item">
                                <div class="course-details__list-img">
                                    <img src="/assets_homepage/assets/images/lc-1-3.jpg" alt="">
                                </div><!-- /.course-details__list-img -->
                                <div class="course-details__list-content">
                                    <a class="course-details__list-author">by <span>Thuy Chill</span></a>
                                    <h3><a href="course-details-n2.html">JLPT N2</a></h3>
                                    <div class="course-details__list-stars">
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <span>4.9</span>
                                    </div><!-- /.course-details__list-stars -->
                                </div><!-- /.course-details__list-content -->
                            </div><!-- /.course-details__list-item -->
                            <div class="course-details__list-item">
                                <div class="course-details__list-img">
                                    <img src="/assets_homepage/assets/images/lc-1-4.jpg" alt="">
                                </div><!-- /.course-details__list-img -->
                                <div class="course-details__list-content">
                                    <a class="course-details__list-author">by <span>Thuy Chill</span></a>
                                    <h3><a href="course-details-n1.html">JLPT N1</a></h3>
                                    <div class="course-details__list-stars">
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <i class="fas fa-star"></i><!-- /.fas fa-star -->
                                        <span>4.7</span>
                        </div><!-- /.course-details__list -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.course-details -->
        <footer class="site-footer">
            <div class="site-footer__upper">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__contact">
                                <h2 class="footer-widget__title">Courses</h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__course-list">
                                    <li>
                                        <h2><a href="#">Online Japanese for beginners</a></h2>
                                        <p>Anh Minh</p>
                                    </li>
                                    <li>
                                        <h2><a href="#">Online Japanese for intermediate students</a></h2>
                                        <p>Thuy Chill</p>
                                    </li>
                                </ul><!-- /.footer-widget__course-list -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                        <div class="col-xl-3 col-lg-6 col-sm-12">
                            <div class="footer-widget footer-widget__link">
                                <h2 class="footer-widget__title">Explore</h2><!-- /.footer-widget__title -->
                                <div class="footer-widget__link-wrap">
                                    <ul class="list-unstyled footer-widget__link-list">
                                        <li><a href="#">Overview</a></li>
                                        <li><a href="/course">Course </a></li>
                                        <li><a href="/contact">Contact</a></li>
                                        <li><a href="/register">Register Now</a></li>
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
                                <p class="footer-widget__text"> Japanese learning center. <br>
                                    All of the narration contains English subtitles, so that foreigner Japanese learners can freely study.</p><!-- /.footer-widget__text -->
                                <div class="footer-widget__btn-block">
                                    <a href="/contact" class="thm-btn">Contact</a><!-- /.thm-btn -->
                                    <a href="#" class="thm-btn">Purchase</a><!-- /.thm-btn -->
                                </div><!-- /.footer-widget__btn-block -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-lg-3 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__upper -->
            <div class="site-footer__bottom">
                <div class="container">
                    <p class="site-footer__copy">&copy; Copyright 2022 by <a href="#">Thuy Chill</a></p>
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
    <script src="/assets_homepage/assets/js/jquery.validate.min.js"></script>
    <script src="/assets_homepage/assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- template scripts -->
    <script src="/assets_homepage/assets/js/theme.js"></script>
</body>

</html>
