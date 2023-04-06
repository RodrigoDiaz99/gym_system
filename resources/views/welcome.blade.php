<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="modinatheme">
    <!-- ======== Page title ============ -->
    <title>Techex - Information & Technology HTML Template</title>
    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets_home/assets/img/favicon.png">
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="assets_home/assets/css/icons.css">
    <!--  animate css plugins -->
    <link rel="stylesheet" href="assets_home/assets/css/animate.css">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="assets_home/assets/css/magnific-popup.css">
    <!--  owl carosuel css plugins -->
    <link rel="stylesheet" href="assets_home/assets/css/owl.carousel.min.css">
    <!-- metis menu css file -->
    <link rel="stylesheet" href="assets_home/assets/css/metismenu.css">
    <!--  owl theme css plugins -->
    <link rel="stylesheet" href="assets_home/assets/css/owl.theme.css">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="assets_home/assets/css/bootstrap.min.css">
    <!--  main style css file -->
    <link rel="stylesheet" href="assets_home/assets/css/style.css">
    <!-- template main style css file -->
    <link rel="stylesheet" href="style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-wrapper">

    <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
                <div class="txt-loading">
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="P" class="letters-loading">
                        P
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="F" class="letters-loading">
                        F
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="M" class="letters-loading">
                        M
                    </span>
                    <span data-text-preloader="´S" class="letters-loading">
                        ´S
                    </span>
                </div>
            <p class="text-center">Cargando</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- welcome content start from here -->

    <header class="header-wrap header-2">
        <div class="top-header d-none d-md-block">
            <div class="container-flud">
                <div class="row">
                    <div class="col-md-7 pr-md-0 col-12">
                        <div class="header-cta">
                            <ul>
                                <li>
                                  <a href="mailto:support@gmail.com"><i class="fal fa-envelope"></i> support@gmail.com</a>
                                </li>
                                <li>
                                  <a href="tel:+8801700080702"><i class="fal fa-phone"></i> +012 (345) 67 89</a>
                                </li>
                              </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-12">
                        <div class="header-right-cta d-flex justify-content-end">
                            <div class="social-profile mr-30">
                                @if (Route::has('login'))

                                    @auth
                                        <a href="{{ route('sales.point') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"><i class="fas fa-home"></i> Panel</a>
                                    @else
                                    <a href="{{route('login')}}"><i class="fas fa-users"></i> Acceso</a>


                                    @endauth

                            @endif



                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header-wraper">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="header-logo">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets_home/assets/img/logo-2.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="header-menu d-none d-xl-block">
                        <div class="main-menu">
                            <ul>
                                <li><a href="#">Home <i class="fas fa-angle-down"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">home 1</a></li>
                                        <li><a href="index-2.html">home 2</a></li>
                                        <li><a href="index-3.html">home 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a> </li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="cases-grid.html">Case Study</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-right d-flex align-items-center">
                        <div class="header-btn-cta">
                            <a href="contact.html" class="theme-btn">Consultancy <i class="fas fa-arrow-right"></i></a>
                        </div>
                        <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                            <div class="mobile-nav-wrap">
                                <div id="hamburger">
                                    <i class="fal fa-bars"></i>
                                </div>
                                <!-- mobile menu - responsive menu  -->
                                <div class="mobile-nav">
                                    <button type="button" class="close-nav">
                                        <i class="fal fa-times-circle"></i>
                                    </button>
                                    <nav class="sidebar-nav">
                                        <ul class="metismenu" id="mobile-menu">
                                            <li><a class="has-arrow" href="#">Homes</a>
                                                <ul class="sub-menu">
                                                    <li><a href="index.html">Homepage 1</a></li>
                                                    <li><a href="index-2.html">Homepage 2</a></li>
                                                    <li><a href="index-3.html">Homepage 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="services.html">services</a></li>
                                            <li>
                                                <a class="has-arrow" href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="faq.html">faq</a></li>
                                                    <li><a href="services-details.html">services details</a></li>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="cases-grid.html">Case Grid</a></li>
                                                    <li><a href="case-2.html">Case Grid 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="news.html">News</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>

                                    <div class="action-bar">
                                        <a href="mailto:modinatheme@gmail.com"><i class="fal fa-envelope-open-text"></i>info@webmail.com</a>
                                        <a href="tel:123-456-7890"><i class="fal fa-phone"></i>987-098-098-09</a>
                                        <a href="contact.html" class="d-btn theme-btn black">Consultancy</a>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="hero-slide-wrapper hero-2">
        <div class="hero-text">Techex</div>
        <div class="hero-slider-2 owl-carousel">
            <div class="single-slide bg-cover" style="background-image: url('assets_home/assets/img/home2/slide1.jpg')">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <div class="hero-contents">
                                <h1>IT Solutions For <br> Grow Your Business.</h1>
                                <p>We Have 25 Years Of Experience In IT Solutions</p>
                                <a href="services.html" class="theme-btn">Service we provide <i class="fas fa-arrow-right"></i></a>
                                <a href="about.html" class="theme-btn minimal-btn">learn more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide bg-cover" style="background-image: url('assets_home/assets/img/home2/slide2.jpg')">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <div class="hero-contents">
                                <h1>Grow Your IT <br> Solutions Business.</h1>
                                <p>We Have 15 Years Of Experience In IT Solutions</p>
                                <a href="services.html" class="theme-btn">Service we provide <i class="fas fa-arrow-right"></i></a>
                                <a href="about.html" class="theme-btn minimal-btn">learn more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide bg-cover" style="background-image: url('assets_home/assets/img/home2/slide1.jpg')">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-10 col-xl-8">
                            <div class="hero-contents">
                                <h1>Technology<br> Grow your Business.</h1>
                                <p>We Have 25 Years Of Experience In IT Solutions</p>
                                <a href="services.html" class="theme-btn">Service we provide <i class="fas fa-arrow-right"></i></a>
                                <a href="about.html" class="theme-btn minimal-btn">learn more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features-wrapper features-2 section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-xl-6">
                    <div class="row mtm-30">
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="flaticon flaticon-monitor"></i>
                                </div>
                                <h4><a href="services-details.html">Development</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="flaticon flaticon-pyramid"></i>
                                </div>
                                <h4><a href="services-details.html">Engineering</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="flaticon flaticon-diagram"></i>
                                </div>
                                <h4><a href="services-details.html">IT Marketing</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="flaticon flaticon-diagram-1"></i>
                                </div>
                                <h4><a href="services-details.html">UX Strategy</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="flaticon flaticon-meeting"></i>
                                </div>
                                <h4><a href="services-details.html">Consultancy</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="icon-box">
                                <div class="icon">
                                    <i class="flaticon flaticon-stats"></i>
                                </div>
                                <h4><a href="services-details.html">Apps Design</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-5 offset-xl-1 mt-5 mt-xl-0">
                    <div class="section-title">
                        <p>How can help you</p>
                        <h1>Business Solutions To Growth Business</h1>
                    </div>
                    <p class="mt-20">Sed ut perspiciatis unde omnis natus error voluptatems
                        accusa ntium doloremque laudantium totam.</p>
                    <a href="about.html" class="theme-btn mt-30">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <svg class="feature-bg"><path fill-rule="evenodd"  opacity="0.039" fill="rgb(8, 106, 215)"
             d="M-0.000,232.999 C-0.000,232.999 239.131,-52.566 575.000,47.000 C910.869,146.565 1087.000,55.653 1231.000,19.999 C1375.000,-15.654 1800.820,-31.520 1915.000,232.999 C1445.000,232.999 -0.000,232.999 -0.000,232.999 Z"/>
            </svg>
    </section>

    <section class="about-us-wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 pr-xl-5">
                    <div class="section-title mb-30">
                        <p>About Company</p>
                        <h1>25 Years Of Experience <br> In IT Solutions</h1>
                    </div>

                    <p class="pr-md-5">Sed ut perspiciatis unde omnis natus error sit voluptatem accusa ntium doloremque laudantium totam rem aperiamea queipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                    <div class="about-check-list d-flex">
                        <div class="banner bg-cover" style="background-image: url('assets_home/assets/img/about_list.jpg')"></div>

                        <ul class="checked-list">
                            <li>Product Engineering</li>
                            <li>Digital Services</li>
                            <li>IT Consultancy</li>
                            <li>Automated Software</li>
                        </ul>
                    </div>

                </div>

                <div class="col-xl-6 col-md-10 col-lg-6 pl-xl-5 col-12 mt-5 mt-xl-0">
                    <div class="about-thum">
                        <div class="item top-image text-right">
                            <img src="assets_home/assets/img/about-big-thumb-1.jpg" alt="rrdevs">
                        </div>
                        <div class="item bottom-image">
                            <img src="assets_home/assets/img/about-big-thumb-2.jpg" alt="rrdevs">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="funfact-wrapper bottom text-white">
        <div class="container">
            <div class="funfact-content-grid bg-cover" style="background-image: url('assets_home/assets/img/funfact-line.png')">
                <div class="single-funfact-item">
                    <div class="icon">
                        <i class="fal fa-gem"></i>
                    </div>
                    <h3>368</h3>
                    <p>Project Completed</p>
                </div>
                <div class="single-funfact-item">
                    <div class="icon">
                        <i class="fal fa-drafting-compass"></i>
                    </div>
                    <h3>785</h3>
                    <p>Expert Consultants</p>
                </div>
                <div class="single-funfact-item">
                    <div class="icon">
                        <i class="fal fa-stars"></i>
                    </div>
                    <h3>896</h3>
                    <p>5 Stars Rating</p>
                </div>
                <div class="single-funfact-item">
                    <div class="icon">
                        <i class="fal fa-trophy-alt"></i>
                    </div>
                    <h3>125</h3>
                    <p>Awards Winning</p>
                </div>
            </div>
        </div>
    </section>

    <section class="services-wrapper service-2 section-padding section-bg bg-contain" style="background-image: url('assets_home/assets/img/circle-bg.png')">
        <div class="container">
            <div class="row mb-50">
                <div class="col-12 col-lg-12">
                    <div class="section-title text-white text-center">
                        <p>Popular IT services</p>
                        <h1>Solutions For IT Business</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-xl-4 col-12">
                    <div class="single-service-box">
                        <div class="icon bg-cover" style="background-image: url('assets_home/assets/img/home2/s1.jpg')">
                        </div>
                        <div class="content-visible">
                            <h4><a href="services-details.html">Manage IT Services</a></h4>
                            <p>Sed perspicias unde omnis natus</p>
                        </div>
                        <div class="content-overlay">
                            <h4><a href="services-details.html">Manage IT Services</a></h4>
                            <p>Quis autem vel eum iure reprehenderit
                            qui in ea voluptate velit esse</p>
                            <a href="services-details.html" class="read-link">learn more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-12">
                    <div class="single-service-box">
                        <div class="icon bg-cover" style="background-image: url('assets_home/assets/img/home2/s2.jpg')">
                        </div>
                        <div class="content-visible">
                            <h4><a href="services-details.html">Product  Engineering</a></h4>
                            <p>Sed perspicias unde omnis natus</p>
                        </div>
                        <div class="content-overlay">
                            <h4><a href="services-details.html">Product  Engineering</a></h4>
                            <p>Quis autem vel eum iure reprehenderit
                            qui in ea voluptate velit esse</p>
                            <a href="services-details.html" class="read-link">learn more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-12">
                    <div class="single-service-box">
                        <div class="icon bg-cover" style="background-image: url('assets_home/assets/img/home2/s3.jpg')">
                        </div>
                        <div class="content-visible">
                            <h4><a href="services-details.html">Digital Marketing</a></h4>
                            <p>Sed perspicias unde omnis natus</p>
                        </div>
                        <div class="content-overlay">
                            <h4><a href="services-details.html">Product  Engineering</a></h4>
                            <p>Quis autem vel eum iure reprehenderit
                            qui in ea voluptate velit esse</p>
                            <a href="services-details.html" class="read-link">learn more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section section-padding">
        <div class="faq-bg bg-cover d-none d-lg-block" style="background-image: url('assets_home/assets/img/faq_home_2.jpg')"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7">
                    <div class="col-12 col-lg-12 mb-40">
                        <div class="section-title">
                            <p>Why choose us</p>
                            <h1>Innovating Solutions <br> Digital Mindset</h1>
                        </div>
                    </div>

                    <div class="faq-content">
                        <div class="faq-accordion">
                            <div id="accordion" class="accordion">
                                <div class="card">
                                    <div class="card-header" id="faq1">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-1">
                                            Can I Get Internet In My Area?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="faq-1" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin
                                        </div>
                                    </div>
                                </div> <!-- /card -->
                                <div class="card">
                                    <div class="card-header" id="faq2">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="true" href="#faq-2">
                                                How Helping Solve Climate Change ?
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-2" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin
                                        </div>
                                    </div>
                                </div> <!-- /card -->
                                <div class="card">
                                    <div class="card-header" id="faq4">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-3">
                                                How To Integrate Social Mobile Web ?
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-3" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin
                                        </div>
                                    </div>
                                </div> <!-- /card -->
                                <div class="card">
                                    <div class="card-header" id="faq4">
                                        <p class="mb-0 text-capitalize">
                                            <a class="collapsed" role="button" data-toggle="collapse" aria-expanded="false" href="#faq-4">
                                                Mobile Emails Increase Conversion ?
                                            </a>
                                        </p>
                                    </div>
                                    <div id="faq-4" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin
                                        </div>
                                    </div>
                                </div> <!-- /card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-team-wrapper section-padding">
        <div class="container">
            <div class="row align-items-center mb-40">
                <div class="col-12 col-md-7 text-center text-md-left">
                    <div class="section-title">
                        <p>Exclusive Members</p>
                        <h1>Meet Our Experience Team Members</h1>
                    </div>
                </div>
                <div class="col-12 col-md-5 mt-4 mt-md-0 text-center text-md-right">
                    <a href="team.html" class="theme-btn off-white">View all Member <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="team-members-list row">
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-team-member">
                        <div class="member-img bg-cover bg-center" style="background-image: url('assets_home/assets/img/team/team1.jpg')">
                        </div>
                        <div class="member-bio">
                            <h4>Wallace S. Camacho</h4>
                            <p>Business Manager</p>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-team-member active">
                        <div class="member-img bg-cover bg-center" style="background-image: url('assets_home/assets/img/team/team2.jpg')">
                        </div>
                        <div class="member-bio">
                            <h4>Lawrence Pacheco</h4>
                            <p>Web Developer</p>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-team-member">
                        <div class="member-img bg-cover bg-center" style="background-image: url('assets_home/assets/img/team/team3.jpg')">
                        </div>
                        <div class="member-bio">
                            <h4>Timothy L. Figueroa</h4>
                            <p>Business Manager</p>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-team-member">
                        <div class="member-img bg-cover bg-center" style="background-image: url('assets_home/assets/img/team/team4.jpg')">
                        </div>
                        <div class="member-bio">
                            <h4>Michael L. Branch</h4>
                            <p>Product Manager</p>
                        </div>
                        <div class="social-profile">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="case-study-carousel-wrapper">
        <div class="container text-center">
            <div class="case-study-items owl-carousel">
                <div class="single-case-item">
                    <div class="case-thumb bg-cover" style="background-image: url('assets_home/assets/img/home2/cs1.jpg')"></div>
                    <div class="contents">
                        <div class="content-visible">
                            <h3>Business Knowladge</h3>
                            <span>IT Consultation</span>
                        </div>
                        <div class="overlay-content">
                            <h3><a href="project-details.html">Business Knowladge</a></h3>
                            <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                            <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="single-case-item">
                    <div class="case-thumb bg-cover" style="background-image: url('assets_home/assets/img/home2/cs2.jpg')"></div>
                    <div class="contents">
                        <div class="content-visible">
                            <h3>Market Leader Idea</h3>
                            <span>IT Consultation</span>
                        </div>
                        <div class="overlay-content">
                            <h3><a href="project-details.html">Market Leader Idea</a></h3>
                            <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                            <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="single-case-item">
                    <div class="case-thumb bg-cover" style="background-image: url('assets_home/assets/img/home2/cs3.jpg')"></div>
                    <div class="contents">
                        <div class="content-visible">
                            <h3>Relationship Buildup</h3>
                            <span>IT Consultation</span>
                        </div>
                        <div class="overlay-content">
                            <h3><a href="project-details.html">Relationship Buildup</a></h3>
                            <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                            <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="single-case-item">
                    <div class="case-thumb bg-cover" style="background-image: url('assets_home/assets/img/home2/cs1.jpg')"></div>
                    <div class="contents">
                        <div class="content-visible">
                            <h3>Business Knowladge</h3>
                            <span>IT Consultation</span>
                        </div>
                        <div class="overlay-content">
                            <h3><a href="project-details.html">Business Knowladge</a></h3>
                            <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                            <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="single-case-item">
                    <div class="case-thumb bg-cover" style="background-image: url('assets_home/assets/img/home2/cs3.jpg')"></div>
                    <div class="contents">
                        <div class="content-visible">
                            <h3>Relationship Buildup</h3>
                            <span>IT Consultation</span>
                        </div>
                        <div class="overlay-content">
                            <h3><a href="project-details.html">Relationship Buildup</a></h3>
                            <p>Sed ut perspiciatis unde omnis natus erroraccusa ntium doloreque</p>
                            <a href="project-details.html" class="theme-btn">read more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="consultations-wrapper section-padding bg-contain pb-0" style="background-image: url('assets_home/assets/img/circle-bg-2.png')">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5">
                    <h1>Don’t Hesited To <br> Contact With Us, We’re  Very Friendly </h1>
                    <p class="mt-3">Sed ut perspiciatis unde omnis natus error sit voluptatem
                        accusa ntium doloremque laudantium totam rem aperiamea
                        queipsa quae abillo inventore veritatise.</p>

                    <div class="call-consultation mt-30 mb-40">
                        <div class="icon">
                            <i class="fal fa-phone-plus"></i>
                        </div>
                        <div class="content">
                            <span>Phone Number</span>
                            <h5><a href="tel:+012 (345) 789 66">+012 (345) 789 66</a></h5>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-6 offset-xl-1">
                    <div class="consultations-form text-white">
                        <p>let’s talk with us</p>
                        <h1>Free Consultations</h1>
                        <form action="#">
                            <input type="text" placeholder="Full Name Here">
                            <input type="email" placeholder="Email Address">
                            <textarea placeholder="Write Message"></textarea>
                            <button class="theme-btn" type="submit">Get Free Quote <i class="fas fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial-wrapper pt-50 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="testimonial-carousel-2 owl-carousel owl-theme">
                        <div class="single-testimonial active">
                            <div class="icon">
                                <i class="flaticon-right-quote"></i>
                            </div>
                            <h2>On the other hand denounc with
                                ghteo indignation and dislike men
                                who so beguiled and demoralized
                                the charms of pleasure the momen
                                blinded by desire cannot foresee
                                the pain and trouble.</h2>
                            <div class="client-info">
                                <div class="client-img bg-cover" style="background-image: url('assets_home/assets/img/home1/testi1.jpg')"></div>
                                <div class="client-bio">
                                    <h3>Salman Ahmed</h3>
                                    <p>Web Developer</p>
                                </div>
                            </div>
                        </div>

                        <div class="single-testimonial">
                            <div class="icon">
                                <i class="flaticon-right-quote"></i>
                            </div>
                            <h2>On the other hand denounc with
                                ghteo indignation and dislike men
                                who so beguiled and demoralized
                                the charms of pleasure the momen
                                blinded by desire cannot foresee
                                the pain and trouble.</h2>
                            <div class="client-info">
                                <div class="client-img bg-cover" style="background-image: url('assets_home/assets/img/home1/testi1.jpg')"></div>
                                <div class="client-bio">
                                    <h3>Rahul M. McLean</h3>
                                    <p>WordPress Expert</p>
                                </div>
                            </div>
                        </div>

                        <div class="single-testimonial">
                            <div class="icon">
                                <i class="flaticon-right-quote"></i>
                            </div>
                            <h2>On the other hand denounc with
                                ghteo indignation and dislike men
                                who so beguiled and demoralized
                                the charms of pleasure the momen
                                blinded by desire cannot foresee
                                the pain and trouble.</h2>
                            <div class="client-info">
                                <div class="client-img bg-cover" style="background-image: url('assets_home/assets/img/home1/testi1.jpg')"></div>
                                <div class="client-bio">
                                    <h3>Salman Ahmed</h3>
                                    <p>Frontend Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="client-brand-logo-wrap">
        <div class="container">
            <div class="brand-carousel-active pt-60 pb-60 d-flex justify-content-between owl-carousel">
                <div class="single-client">
                    <img src="assets_home/assets/img/brand/1.png" alt="">
                </div>
                <div class="single-client">
                    <img src="assets_home/assets/img/brand/2.png" alt="">
                </div>
                <div class="single-client">
                    <img src="assets_home/assets/img/brand/3.png" alt="">
                </div>
                <div class="single-client">
                    <img src="assets_home/assets/img/brand/4.png" alt="">
                </div>
                <div class="single-client">
                    <img src="assets_home/assets/img/brand/b4.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <section class="cta-banner">
        <div class="container-fluid bg-cover section-bg" style="background-image: url('assets_home/assets/img/cta_bg1.png')">
            <div class="cta-content">
                <div class="row align-items-center">
                    <div class="col-xl-7 text-white col-12 text-center text-xl-left">
                        <h1>Ready To Get Free Consulations For <br> Any Kind Of It Solutions ? </h1>
                    </div>
                    <div class="col-xl-5 col-12 text-center text-xl-right">
                        <a href="contact.html" class="theme-btn mt-4 mt-xl-0">Get a quote <i class="fas fa-arrow-right"></i></a>
                        <a href="services-details.html" class="ml-sm-3 mt-4 mt-xl-0 theme-btn minimal-btn">read more <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-2 footer-wrap">
        <div class="footer-widgets">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3 col-12 pr-xl-4">
                        <div class="single-footer-wid site_footer_widget">
                            <a href="index.html">
                                <img src="assets_home/assets/img/logo.png" alt="">
                            </a>
                            <p class="mt-4">Sed ut perspiciatis unde omnis natus voluptatem accusa ntiumy doloremque laudantium.omnis natus voluptatem accusa ntiumy doloremque laudantium</p>
                            <div class="social-link mt-30">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class="col-md-6 col-xl-2 col-12">
                        <div class="single-footer-wid">
                            <div class="wid-title">
                                <h4>Company</h4>
                            </div>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about.html">Company History</a></li>
                                <li><a href="contact.html">Need a Career</a></li>
                                <li><a href="project-details.html">Working Process</a></li>
                                <li><a href="news.html">Blog Post</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class="col-md-6 col-xl-2 col-12">
                        <div class="single-footer-wid">
                            <div class="wid-title">
                                <h4>Company</h4>
                            </div>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about.html">Company History</a></li>
                                <li><a href="contact.html">Need a Career</a></li>
                                <li><a href="project-details.html">Working Process</a></li>
                                <li><a href="news.html">Blog Post</a></li>
                            </ul>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                    <div class="col-md-6 col-xl-3 col-12">
                        <div class="single-footer-wid recent_post_widget">
                            <div class="wid-title">
                                <h4>News News</h4>
                            </div>
                            <div class="recent-post-list">
                                <div class="single-recent-post">
                                    <div class="thumb bg-cover" style="background-image: url('assets_home/assets/img/blog/b1.jpg');"></div>
                                    <div class="post-data">
                                        <span><i class="fal fa-calendar-alt"></i>24th Nov 2020</span>
                                        <h5><a href="news-details.html">User’s Perspes Using Story Structure</a></h5>
                                    </div>
                                </div>
                                <div class="single-recent-post">
                                    <div class="thumb bg-cover" style="background-image: url('assets_home/assets/img/blog/b2.jpg');"></div>
                                    <div class="post-data">
                                        <span><i class="fal fa-calendar-alt"></i>15th July 2021</span>
                                        <h5><a href="news-details.html">Optimiz For Assistive Technology Users</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-3 - single-footer-wid -->
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container text-center">
                <div class="footer-bottom-content">
                    © 2021 Techex All Rights Reserved, Share By <a href="https://nullphpscript.com/category/html/">HTML Templates</a>
                </div>
            </div>
        </div>
    </footer>

    <!--  ALl JS Plugins
    ====================================== -->
    <script src="assets_home/assets/js/jquery.min.js"></script>
    <script src="assets_home/assets/js/modernizr.min.js"></script>
    <script src="assets_home/assets/js/jquery.easing.js"></script>
    <script src="assets_home/assets/js/popper.min.js"></script>
    <script src="assets_home/assets/js/bootstrap.min.js"></script>
    <script src="assets_home/assets/js/isotope.pkgd.min.js"></script>
    <script src="assets_home/assets/js/imageload.min.js"></script>
    <script src="assets_home/assets/js/scrollUp.min.js"></script>
    <script src="assets_home/assets/js/owl.carousel.min.js"></script>
    <script src="assets_home/assets/js/magnific-popup.min.js"></script>
    <script src="assets_home/assets/js/waypoint.js"></script>
    <script src="assets_home/assets/js/easypiechart.min.js"></script>
    <script src="assets_home/assets/js/counterup.min.js"></script>
    <script src="assets_home/assets/js/wow.min.js"></script>
    <script src="assets_home/assets/js/metismenu.js"></script>
    <script src="assets_home/assets/js/timeline.min.js"></script>
    <script src="assets_home/assets/js/ajax-mail.js"></script>
    <script src="assets_home/assets/js/active.js"></script>
</body>

</html>
