@extends('Frontend.Layouts.appSecond')
@section('content')
<body class="home-yellow onepage three">

    <header class="header-three header--sticky">
        <div class="container">
            <div class="row header-top-three">
                <div class="col-lg-6">
                    <p class="top-left">Are you ready to grow up your business? <a href="{{ route('contactPage') }}">Contact Us <i
                            class="far fa-arrow-right"></i></a></p>
                </div>
                <div class="col-lg-6 right-h-three">
                    <div class="header-top-right">
                        <div class="single-right email">
                            <i class="fas fa-envelope"></i>
                            <a href="#">info@example.com</a>
                        </div>
                        <div class="single-right call">
                            <i class="far fa-phone-volume"></i>
                            <span>Hotline:</span>
                            <a href="#">+210-9856988</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row main-header main-header-three">
                <div class="col-lg-3 col-md-4 col-sm-5 col-5">
                    <a href="#!" class="thumbnail-logo">
                        <img src="{{ asset('assets/images/logo/logo-3.svg') }}" alt="Logo_three">
                    </a>
                </div>
                <div class="col-lg-6 d-none d-xl-block">
                    <div class="text-center d-flex justify-content-center">
                        <nav class="nav-main mainmenu-nav d-none d-xl-block">
                            <ul class="mainmenu">
                                <li class="#">
                                    <a href="#banner">Home</a>
                                </li>
                                <li><a href="#about">About Us</a></li>
                                <li class="#">
                                    <a href="#services">Services</a>
                                </li>
                                <li class="#">
                                    <a href="#product">Product</a>
                                </li>
                                <li class="#">
                                    <a href="#blog">Blog</a>
                                </li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-9 col-md-8 col-sm-7 col-7">
                    <div class="right justify-content-end">
                        <a href="#" class="rts-btn btn-primary-3">Book a Meeting</a>
                        <button id="menu-btn" class="menu rts-btn btn-primary-3-menu ml--20">
                            <img class="menu-dark" src="{{ asset('assets/images/icon/menu.png') }}" alt="Menu-icon">
                            <img class="menu-light" src="{{ asset('assets/images/icon/menu-light.png') }}" alt="Menu-icon">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo-1.svg') }}" alt="finbiz_logo"></a>
            <a class="logo-2" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo-4.svg') }}" alt="finbiz_logo"></a>
            <a class="logo-3" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo-3.svg') }}" alt="finbiz_logo"></a>
            <div class="body d-none d-xl-block">
                <p class="disc">
                    We must explain to you how all seds this mistakens idea denouncing pleasures and praising account.
                </p>
                <div class="get-in-touch">
                    <!-- title -->
                    <div class="h6 title">Get In Touch</div>
                    <!-- title End -->
                    <div class="wrapper">
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-phone-alt"></i>
                            <a href="#">+8801234566789</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-envelope"></i>
                            <a href="#">example@gmail.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-globe"></i>
                            <a href="#">www.webexample.com</a>
                        </div>
                        <!-- single ENd -->
                        <!-- single -->
                        <div class="single">
                            <i class="fas fa-map-marker-alt"></i>
                            <a href="#">13/A, New Pro State, NYC</a>
                        </div>
                        <!-- single ENd -->
                    </div>
                    <div class="social-wrapper-two menu">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="body-mobile d-block d-xl-none">
                <nav class="nav-main mainmenu-nav">
                    <ul class="mainmenu">
                        <li class="#">
                            <a href="#banner">Home</a>
                        </li>
                        <li><a href="#about">About Us</a></li>
                        <li class="#">
                            <a href="#services">Services</a>
                        </li>
                        <li class="#">
                            <a href="#product">Product</a>
                        </li>
                        <li class="#">
                            <a href="#blog">Blog</a>
                        </li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="social-wrapper-two menu mobile-menu">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <!-- <a href="#"><i class="fab fa-linkedin"></i></a> -->
                </div>
                <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btnmenu">Get Quote</a>
            </div>
        </div>
        <!-- inner menu area desktop End -->

    </div>
    <div id="anywhere-home"></div>

    <!-- banner area start three -->
    <div class="rts-banner-area banner-three" id="banner">
        <div class="swiper mySwiperh3_banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class=" bg_banner-three bg_image rts-section-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-three-inner">
                                        <span class="subtitle-banner">Make Your Strategy Strong</span>
                                        <!-- type headline start-->
                                        <h1 class="title cd-headline clip is-full-width">
                                            Grow Business
                                        </h1>
                                        <p class="disc">
                                            Urna justo odio ultrices aliquet vitae sollicitudin gravida congue in sapien eget sociosqu
                                            mollis lacus cursus per primis quis nascetur nisl risus porta issues business solution
                                            service
                                        </p>
                                        <div class="button-group">
                                            <a href="{{ route('pricePlans') }} " class="rts-btn btn-primary-3">Get Started</a>
                                            <a href="{{ route('aboutPage') }}" class="rts-btn btn-primary-3 transparent">About Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class=" bg_banner-three slide-2 bg_image rts-section-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-three-inner">
                                        <span class="subtitle-banner">Make Your Strategy Strong</span>
                                        <!-- type headline start-->
                                        <h1 class="title cd-headline clip is-full-width">
                                            Expert Solution
                                        </h1>
                                        <p class="disc">
                                            Urna justo odio ultrices aliquet vitae sollicitudin gravida congue in sapien eget sociosqu
                                            mollis lacus cursus per primis quis nascetur nisl risus porta issues business solution
                                            service
                                        </p>
                                        <div class="button-group">
                                            <a href="{{ route('pricePlans') }} " class="rts-btn btn-primary-3">Get Started</a>
                                            <a href="{{ route('aboutPage') }}" class="rts-btn btn-primary-3 transparent">About Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class=" bg_banner-three slide-3 bg_image rts-section-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-three-inner">
                                        <span class="subtitle-banner">Make Your Strategy Strong</span>
                                        <!-- type headline start-->
                                        <h1 class="title cd-headline clip is-full-width">
                                            Modern Strategy
                                        </h1>
                                        <p class="disc">
                                            Urna justo odio ultrices aliquet vitae sollicitudin gravida congue in sapien eget sociosqu
                                            mollis lacus cursus per primis quis nascetur nisl risus porta issues business solution
                                            service
                                        </p>
                                        <div class="button-group">
                                            <a href="{{ route('pricePlans') }} " class="rts-btn btn-primary-3">Get Started</a>
                                            <a href="{{ route('aboutPage') }}" class="rts-btn btn-primary-3 transparent">About Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






    </div>
    <!-- banner area end three -->

    <!-- start about area two -->
    <div class="rts-about-area-two rts-section-gap about-two-bg" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="about-three-thumbnail-left">
                        <img src="{{ asset('assets/images/about/main/05.jpg') }}" alt="Business-about">
                        <div class="about-sm-thumb">
                            <img src="{{ asset('assets/images/about/main/about-01-sm.jpg') }}" alt="business_about-sm">
                        </div>
                        <a href="#" class="vedio-icone">
                            <span id="play-video" class="video-play-button">
                                <img src="{{ asset('assets/images/about/shape/play-btn.png') }}" alt="Play btn">
                                <span></span>
                            </span>
                            <div id="video-overlay" class="video-overlay">
                                <span class="video-overlay-close">×</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 pl--50 pl_md--15 pl_sm--15">
                    <div class="about-right-three">
                        <div class="title-area-about-three">
                            <span class="sub">Easy Business Solution</span>
                            <h2 class="title">
                                The Most Leading
                                <span>Solution <span>For You</span></span>
                            </h2>
                        </div>
                        <div class="inner-about-three">
                            <p class="disc">
                                Commodo dignissim nibh tristique urna arcu sagittis nec sapien velit, praesent at
                                dictumst sollicitudin cursus tellus senectus aliquet vivamus curabitur, sociis libero
                                lacus cubilia leo porta penatibus varius arcu sagittis nec sapien velit
                            </p>
                            <!-- start -->
                            <div class="row">
                                <!-- start -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="solution-wrapper">
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>Leading Business Solution</p>
                                        </div>
                                        <!-- single business solution -->
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>Business is the best plan</p>
                                        </div>
                                        <!-- single business solution -->
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>Services we provide </p>
                                        </div>
                                        <!-- single business solution -->
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>How to improve business</p>
                                        </div>
                                        <!-- single business solution -->
                                    </div>
                                </div>
                                <!-- end -->
                                <!-- start -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="solution-wrapper-right">
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>Leading Business Solution</p>
                                        </div>
                                        <!-- single business solution -->
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>Business is the best plan</p>
                                        </div>
                                        <!-- single business solution -->
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>Services we provide </p>
                                        </div>
                                        <!-- single business solution -->
                                        <!-- single business solution -->
                                        <div class="single-business-solution">
                                            <i class="far fa-check"></i>
                                            <p>How to improve business</p>
                                        </div>
                                        <!-- single business solution -->
                                    </div>
                                </div>
                                <!-- end -->
                            </div>
                        </div>
                        <!--usrer aresa start -->
                        <div class="row">
                            <div class="col-l2">
                                <div class="rts-user-three-wrapper">
                                    <div class="user-wrapper">
                                        <a href="#"><img src="{{ asset('assets/images/about/main/user/01.png') }}" alt="Business_User"></a>
                                        <a href="#"><img src="{{ asset('assets/images/about/main/user/02.png') }}" alt="Business_User"></a>
                                        <a href="#"><img src="{{ asset('assets/images/about/main/user/03.png') }}" alt="Business_User"></a>
                                    </div>
                                    <div class="reviews">
                                        <h5 class="title">1500+</h5>
                                        <span>Active Reviews</span>
                                    </div>
                                    <a href="#" class="rts-btn btn-primary-3 color-h-black ml--35">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <!--usrer aresa end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about area two -->

    <!-- rts-service area start -->
    <div class="rts-service-area rts-section-gap pb--140" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center title-service-three">
                        <p class="pre-title">
                            Our Services
                        </p>
                        <h2 class="title">What We Do</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-12">
                    <div class="swiper mySwiperh2_Service">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="service-one-inner-four">
                                    <div class="big-thumbnail-area">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/service/07.jpg') }}" alt="Business-service">
                                        </a>
                                        <div class="content">
                                            <img src="{{ asset('assets/images/service/icon/16.svg') }}" alt="Business-icon">
                                            <h5 class="title">Business Consultancy</h5>
                                            <p class="disc">Aenean augue venenatis est porttitor fames aptent lobortis
                                                nam potenti
                                            </p>
                                        </div>
                                        <a href="{{ route('serviceDetailsPage') }}" class="over_link"></a>
                                    </div>
                                    <a href="{{ route('serviceDetailsPage') }}" class="rts-btn btn-primary-3"> Read More<i
                                            class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-one-inner-four">
                                    <div class="big-thumbnail-area">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/service/08.jpg') }}" alt="Business-service">
                                        </a>
                                        <div class="content">
                                            <img src="{{ asset('assets/images/service/icon/17.svg') }}" alt="Business-icon">
                                            <h5 class="title">Target Marketing</h5>
                                            <p class="disc">Aenean augue venenatis est porttitor fames aptent lobortis
                                                nam potenti
                                            </p>
                                        </div>
                                        <a href="{{ route('serviceDetailsPage') }}" class="over_link"></a>
                                    </div>
                                    <a href="{{ route('serviceDetailsPage') }}" class="rts-btn btn-primary-3"> Read More<i
                                            class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-one-inner-four">
                                    <div class="big-thumbnail-area">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/service/09.jpg') }}" alt="Business-service">
                                        </a>
                                        <div class="content">
                                            <img src="{{ asset('assets/images/service/icon/18.svg') }}" alt="Business-icon">
                                            <h5 class="title">Investment Analysis</h5>
                                            <p class="disc">Aenean augue venenatis est porttitor fames aptent lobortis
                                                nam potenti
                                            </p>
                                        </div>
                                        <a href="{{ route('serviceDetailsPage') }}" class="over_link"></a>
                                    </div>
                                    <a href="{{ route('serviceDetailsPage') }}" class="rts-btn btn-primary-3"> Read More<i
                                            class="fal fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--80">
                <div class="col-12">
                    <div class="pagination-arrow navigation-center-bottom service text-center position-relative">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-service area end -->

    <!-- rts cta area start -->
    <div class="rts-cta-area ptb--100 rts-cta-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-three-wrapper">
                        <h4 class="title">Need Any Business Consultancy? <a href="#">Contact With Us</a>
                        </h4>
                        <a class="rts-btn btn-secondary-3" href="{{ route('contactPage') }}">Lets Work Together</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts cta area End -->

    <!-- leading business solution area -->
    <div class="rts-business-solution rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <!-- business solution left -->
                    <div class="rts-business-solution-left">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/business-goal/01.png') }}" alt="">
                        </div>
                        <div class="success-rate">
                            <h2 class="title">85%</h2>
                            <span>Success Rate</span>
                        </div>
                    </div>
                    <!-- business solution left End -->
                </div>
                <div class="col-lg-6">
                    <div class="rts-business-solution-right">
                        <div class="title-area">
                            <span class="sub">
                                Leading Business SOlution
                            </span>
                            <h2 class="title">
                                We Are Help Our <br>
                                <span>Clients <span>For Goal</span></span>
                            </h2>
                        </div>
                        <div class="content-area">
                            <p class="disc">
                                Nisi aenean mu suscipit ni phasellus gravida primis massa, rutrum duis semper posuere
                                pharetra magnis porta diam, bibendum molestie d cursus ante mattis habitasse. Egestas
                                sagittis curabitur quam business solution
                            </p>
                            <!-- single business solution -->
                            <div class="single-business-solution-2">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/business-goal/icon/01.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">
                                        Strategic Vision Work
                                    </h6>
                                    <p class="disc">
                                        Dorem ipsum dolor sit amet, consectetu mod tempor incididunt business phasellus
                                        gravida
                                    </p>
                                </div>
                            </div>
                            <!-- single business solution end -->
                            <!-- single business solution -->
                            <div class="single-business-solution-2">
                                <div class="icon">
                                    <img src="{{ asset('assets/images/business-goal/icon/02.png') }}" alt="">
                                </div>
                                <div class="content">
                                    <h6 class="title">
                                        Tactical Vision Work
                                    </h6>
                                    <p class="disc">
                                        Dorem ipsum dolor sit amet, consectetu mod tempor incididunt business phasellus
                                        gravida
                                    </p>
                                </div>
                            </div>
                            <!-- single business solution end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- leading business solution area End -->

    <!-- Our Business case style start -->
    <div class="rts-business-case-area rts-section-gapTop business-case-bg" id="product">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area-business-case-3">
                        <div class="title-area">
                            <span class="sub">RECENT CASE STUDIES</span>
                            <h2 class="title">Our Business Cases</h2>
                        </div>
                        <a class="rts-btn btn-primary-3 color-h-black" href="{{ route('contactPage') }}">Lets Work Together</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-2 mt--65">
            <div class="row g-5">
                <div class="swiper mySwiperh3_business-case">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- single case study -->
                            <div class="rts-cse-study-3-wrapper">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/business-case/01.jpg') }}" alt="Business-solution">
                                    <a href="#" class="icon">
                                        <i class="far fa-eye"></i>
                                    </a>
                                    <div class="content">
                                        <div class="content-wrap">
                                            <a href="#">
                                                <h5 class="title">Digital Business Solution</h5>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                    <a href="#" class="over_link"></a>
                                </div>
                            </div>
                            <!-- single case study End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single case study -->
                            <div class="rts-cse-study-3-wrapper">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/business-case/02.jpg') }}" alt="Business-solution">
                                    <a href="#" class="icon">
                                        <i class="far fa-eye"></i>
                                    </a>
                                    <div class="content">
                                        <div class="content-wrap">
                                            <a href="#">
                                                <h5 class="title">Digital Business Solution</h5>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                    <a href="#" class="over_link"></a>
                                </div>
                            </div>
                            <!-- single case study End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single case study -->
                            <div class="rts-cse-study-3-wrapper">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/images/business-case/03.jpg') }}" alt="Business-solution">
                                    <a href="#" class="icon">
                                        <i class="far fa-eye"></i>
                                    </a>
                                    <div class="content">
                                        <div class="content-wrap">
                                            <a href="#">
                                                <h5 class="title">Digital Business Solution</h5>
                                            </a>
                                            <span>Business Strategy</span>
                                        </div>
                                    </div>
                                    <a href="#" class="over_link"></a>
                                </div>
                            </div>
                            <!-- single case study End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Business case style End -->

    <!-- rts counter up section area -->
    <div class="pb--120 pb_md--80 pb_sm--60 rts-counter-up-area rts-section-gapTop">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="counter-wrapper-two">
                        <div class="single-counter">
                            <img src="{{ asset('assets/images/counterup/icon/05.svg') }}" alt="Business_counter">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">15000</span></h2>
                                <p class="disc">Business Solution</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="counter-wrapper-two">
                        <div class="single-counter">
                            <img src="{{ asset('assets/images/counterup/icon/08.svg') }}" alt="Business_counter">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">196</span></h2>
                                <p class="disc">Solution Experts</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="counter-wrapper-two">
                        <div class="single-counter">
                            <img src="{{ asset('assets/images/counterup/icon/07.svg') }}" alt="Business_counter">
                            <div class="counter-details">
                                <h2 class="title"><span class="counter animated fadeInDownBig">999</span></h2>
                                <p class="disc">Worldwide Partner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts counter up section area -->

    <!-- rts faq section area -->
    <div class="rts-faq-section rts-section-gap rts-faq-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-two-inner">
                        <div class="title-area-faq">
                            <span class="sub">WHY CHOOSE US</span>
                            <h2 class="title">We Are Experienced
                                <span class="sm-title">Business <span>Solution</span></span>
                            </h2>
                        </div>
                        <!-- faq accordion area -->
                        <div class="faq-accordion-area">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <span>01. </span> What should i included my personal details?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque partrient nascetur facilisis suscipit ridiculus agna lobortis
                                            imperdiet vivamus est aliquam euismod nector quam convallis ornare justo
                                            service lifereu visionary sources unleash online businesss solutions
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02. </span> Where i can find my business growth result?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque partrient nascetur facilisis suscipit ridiculus agna lobortis
                                            imperdiet vivamus est aliquam euismod nector quam convallis ornare justo
                                            service lifereu visionary sources unleash online businesss solutions
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <span>03. </span> Did you get any business consultant?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Neque partrient nascetur facilisis suscipit ridiculus agna lobortis
                                            imperdiet vivamus est aliquam euismod nector quam convallis ornare justo
                                            service lifereu visionary sources unleash online businesss solutions
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- faq accordion area end -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-faq-four">
                        <img src="{{ asset('assets/images/faq/02.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts faq section area End -->

    <!-- rts team two area -->
    <div class="rts-team-area rts-section-gap team-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area team text-center">
                        <p class="pre-title">
                            Professionals Team
                        </p>
                        <h2 class="title">Professionals Team</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20 mt_md--30 mt_sm--0">
                <div class="swiper mySwiperh3_team">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- single team inner -->
                            <div class="team-inner-two">
                                <a href="{{ route('teamDetails') }}" class="thumbnail">
                                    <img src="{{ asset('assets/images/team/tm/lg-01.jpg') }}" alt="">
                                </a>
                                <!-- Acquaintance area -->
                                <div class="acquaintance-area">
                                    <div class="header">
                                        <h5 class="title">Kevin Martin</h5>
                                        <span>Consultant</span>
                                    </div>
                                    <div class="acquaintance-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <!-- Acquaintance area -->
                            </div>
                            <!-- single team inner End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single team inner -->
                            <div class="team-inner-two">
                                <a href="{{ route('teamDetails') }}" class="thumbnail">
                                    <img src="{{ asset('assets/images/team/tm/lg-02.jpg') }}" alt="">
                                </a>
                                <!-- Acquaintance area -->
                                <div class="acquaintance-area">
                                    <div class="header">
                                        <h5 class="title">Kevin Martin</h5>
                                        <span>Consultant</span>
                                    </div>
                                    <div class="acquaintance-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <!-- Acquaintance area -->
                            </div>
                            <!-- single team inner End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- single team inner -->
                            <div class="team-inner-two">
                                <a href="{{ route('teamDetails') }}" class="thumbnail">
                                    <img src="{{ asset('assets/images/team/tm/lg-03.jpg') }}" alt="">
                                </a>
                                <!-- Acquaintance area -->
                                <div class="acquaintance-area">
                                    <div class="header">
                                        <h5 class="title">Kevin Martin</h5>
                                        <span>Consultant</span>
                                    </div>
                                    <div class="acquaintance-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                                <!-- Acquaintance area -->
                            </div>
                            <!-- single team inner End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts team two area End -->

    <!-- start client area -->
    <div class="rts-client-area ptb--100 client-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="client-two-wrapper">
                        <img src="{{ asset('assets/images/client/01.png') }}" alt="Business_client">
                        <img src="{{ asset('assets/images/client/02.png') }}" alt="Business_client">
                        <img src="{{ asset('assets/images/client/03.png') }}" alt="Business_client">
                        <img src="{{ asset('assets/images/client/04.png') }}" alt="Business_client">
                        <img src="{{ asset('assets/images/client/05.png') }}" alt="Business_client">
                        <img src="{{ asset('assets/images/client/06.png') }}" alt="Business_client">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start client area End -->

    <!-- rts pricing area start -->
    <div class="rts-pricing-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing-three-title-area">
                        <div class="title-area">
                            <span class="sub">Price Table</span>
                            <h2 class="title">Pricing & Plans</h2>
                        </div>
                        <div class="pricing-tab-button-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Monthly PLan</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Yearly
                                        Plan</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt--100">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$160</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Starter Package</span>
                                            <h4 class="title">
                                                Basic Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary-3" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt_sm--80">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$180</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Starter Package</span>
                                            <h4 class="title">
                                                Standard Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary-3" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt_md--80 mt_sm--80">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/month</span>
                                            <h3 class="title">$260</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Starter Package</span>
                                            <h4 class="title">
                                                Premium Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary-3" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-lg-4">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/year</span>
                                            <h3 class="title">$1800</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Starter Package</span>
                                            <h4 class="title">
                                                Basic Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary-3" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-lg-4">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/year</span>
                                            <h3 class="title">$2000</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Standard Plan</span>
                                            <h4 class="title">
                                                Standard Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary-3" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-lg-4">
                                    <div class="pricing-wrapper-one">
                                        <div class="plane-process">
                                            <span>/year</span>
                                            <h3 class="title">$2300</h3>
                                        </div>
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <span class="pre-title">Premium Plan</span>
                                            <h4 class="title">
                                                Premium Plan
                                            </h4>
                                        </div>
                                        <!-- pricing header End -->
                                        <!-- pricing body start -->
                                        <div class="pricing-body">
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Business Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Great Customer Support</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing ">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <!-- single pricing -->
                                            <div class="single-pricing">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">24/7 Consultant Service</span>
                                            </div>
                                            <!-- single pricing End -->
                                            <a class="rts-btn btn-primary-3" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts pricing area end -->

    <!-- start project with us section -->
    <div class="rts-project-area rts-section-gap bg-project-three margin-controlerproject mt_sm--0" id="contact">
        <div class="container controler">
            <div class="row g-0">
                <div class="col-lg-7">
                    <!-- project area left wrapper -->
                    <div class="title-area-project-w-in">
                        <span class="sub">
                            Make An Appointment
                        </span>
                        <h2 class="title">
                            START PROJECT <br> <span>WITH US!</span>
                        </h2>
                        <p class="disc">
                            Penatibus habitant ligula dapibus rhoncus dictum viverra gravida <br> elementum, integer
                            potenti
                            dui et molestie ante...
                        </p>
                        <div class="bg-email">
                            <div class="content-wrapper">
                                <!-- single-contact info -->
                                <div class="contact-info">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/product/icon/01.jpg') }}" alt="Product_icon">
                                    </div>
                                    <div class="discription">
                                        <span>Need any help?</span>
                                        <h5 class="title-sm">+254 21456.21458</h5>
                                    </div>
                                </div>
                                <!-- single-contact info End -->
                                <!-- single-contact info -->
                                <div class="contact-info">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/product/icon/02.jpg') }}" alt="Product_icon">
                                    </div>
                                    <div class="discription">
                                        <span>Email us anytime</span>
                                        <h5 class="title-sm">info@example.com</h5>
                                    </div>
                                </div>
                                <!-- single-contact info End -->
                            </div>
                        </div>
                    </div>
                    <!-- project area left wrapper end -->
                </div>
                <div class="col-lg-5">
                    <div class="bg-input-project">
                        <form class="product-form" action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Your Name" required>
                                </div>
                                <div class="col-lg-6 mt_md--20 mt_sm--20">
                                    <input type="email" placeholder="Your Email" required>
                                </div>
                                <div class="col-12 mt--20">
                                    <input type="text" placeholder="Your Website">
                                </div>
                                <div class="col-12 mt--20">
                                    <textarea placeholder="Your Comment"></textarea>
                                </div>
                                <div class="col-12 mt--35">
                                    <button type="submit" class="rts-btn btn-primary-3 color-h-black">Get in Touch</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start project with us section End -->

    <!-- tart latest blog area -->
    <div class="rts-latest-blog-three rts-section-gapBottom" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area blog-three text-center">
                        <span>Weekly Updates</span>
                        <h2 class="title">Our Latest Updates</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <!-- single blog -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-three-wrapepr">
                        <a href="{{ route('blogPage') }}" class="main-thumbnail">
                            <img src="{{ asset('assets/images/blog/05.jpg') }}" alt="Blog_image">
                            <span class="badge-blog">Solution</span>
                        </a>
                        <div class="blog-body">
                            <div class="blog-header">
                                <div class="left">
                                    <i class="far fa-clock"></i>
                                    <span>25 Jan, 2022</span>
                                </div>
                                <div class="right">
                                    <i class="far fa-user"></i>
                                    <span>by david smith</span>
                                </div>
                            </div>
                            <div class="body">
                                <a href="{{ route('blogPage') }}">
                                    <h5 class="title">
                                        The quick settle tips new ages
                                        exist working solution
                                    </h5>
                                </a>
                                <a href="{{ route('blogPage') }}" class="rts-btn btn-light-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
                <!-- single blog -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-three-wrapepr">
                        <a href="{{ route('blogPage') }}" class="main-thumbnail">
                            <img src="{{ asset('assets/images/blog/06.jpg') }}" alt="Blog_image">
                            <span class="badge-blog">Solution</span>
                        </a>
                        <div class="blog-body">
                            <div class="blog-header">
                                <div class="left">
                                    <i class="far fa-clock"></i>
                                    <span>25 Jan, 2022</span>
                                </div>
                                <div class="right">
                                    <i class="far fa-user"></i>
                                    <span>by david smith</span>
                                </div>
                            </div>
                            <div class="body">
                                <a href="{{ route('blogPage') }}">
                                    <h5 class="title">
                                        The quick settle tips new ages
                                        exist working solution
                                    </h5>
                                </a>
                                <a href="{{ route('blogPage') }}" class="rts-btn btn-light-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
                <!-- single blog -->
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="blog-three-wrapepr">
                        <a href="{{ route('blogPage') }}" class="main-thumbnail">
                            <img src="{{ asset('assets/images/blog/07.jpg') }}" alt="Blog_image">
                            <span class="badge-blog">Solution</span>
                        </a>
                        <div class="blog-body">
                            <div class="blog-header">
                                <div class="left">
                                    <i class="far fa-clock"></i>
                                    <span>25 Jan, 2022</span>
                                </div>
                                <div class="right">
                                    <i class="far fa-user"></i>
                                    <span>by david smith</span>
                                </div>
                            </div>
                            <div class="body">
                                <a href="{{ route('blogPage') }}">
                                    <h5 class="title">
                                        The quick settle tips new ages
                                        exist working solution
                                    </h5>
                                </a>
                                <a href="{{ route('blogPage') }}" class="rts-btn btn-light-3">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single blog -->
            </div>
        </div>
    </div>
    <!-- tart latest blog area End -->

    <!-- start call to action area -->
    <div class="rts-callto-acation-area bg-call-to-action-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-two-wrapper">
                        <div class="title-area">
                            <h3 class="title">Let’s discuss about how we can help
                                make your business better</h3>
                        </div>
                        <a class="rts-btn btn-secondary-3" href="{{ route('contactPage') }}">Lets Work Together</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end call to action area -->

    <!-- start header area -->
    <!-- rts footer three area start -->
    <div class="rts-footer-area footer-three rts-section-gapTop footer-bg-2">
        <div class="container pb--100 pb_sm--40">
            <div class="row g-5">
                <div class="col-xl-3 col-lg-6">
                    <div class="footer-three-single-wized left">
                        <a href="index" class="logo_footer">
                            <img src="{{ asset('assets/images/logo/logo-3.svg') }}" alt="Logo-image">
                        </a>
                        <p class="disc">Felis consquat magnis fames sagittis ultrices plasodales porttitor quisque
                            ultrice tempor turpis.</p>
                        <ul class="social-three-wrapper">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- footer three mid area -->
                <div class="col-xl-6 col-lg-6">
                    <div class="row">
                        <!-- footer mid area left -->
                        <div class="col-lg-6">
                            <div class="footer-three-single-wized mid-left">
                                <h5 class="title">Office Information</h5>
                                <div class="body">
                                    <div class="info-wrapper">
                                        <div class="single">
                                            <ul class="icon">
                                                <li><i class="fas fa-phone-alt"></i></li>
                                            </ul>
                                            <div class="info">
                                                <span>Call Us 24/7</span>
                                                <a href="#">(+256) 2145.2156</a>
                                            </div>
                                        </div>
                                        <div class="single">
                                            <ul class="icon">
                                                <li><i class="far fa-envelope"></i></li>
                                            </ul>
                                            <div class="info">
                                                <span>Work with us</span>
                                                <a href="#">info@finbiz.com</a>
                                            </div>
                                        </div>
                                        <div class="single">
                                            <ul class="icon">
                                                <li><i class="fas fa-map-marker-alt"></i></li>
                                            </ul>
                                            <div class="info">
                                                <span>Our Location</span>
                                                <a href="#">XYZ Hilton Street, 125 <br>
                                                    Town United State</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer mid area left end -->

                        <!-- footer mid area right -->
                        <div class="col-lg-6">
                            <div class="footer-three-single-wized mid-right">
                                <h5 class="title">Get Updates</h5>
                                <div class="body">
                                    <div class="update-wrapper">
                                        <p class="disc">Sign up for our latest news & articles. We won’t give you spam
                                            mails.</p>
                                        <form class="email-footer-area">
                                            <input type="email" placeholder="Enter Email Address" required>
                                            <button type="submit"><i class="fas fa-location-arrow"></i></button>
                                        </form>
                                        <div class="note-area">
                                            <p><span>Note:</span> We do not publish your email</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- footer mid area right end -->
                    </div>
                </div>
                <!-- footer three mid area ENd -->
                <div class="col-xl-3 col-lg-6">
                    <div class="footer-three-single-wized right">
                        <h5 class="title">Instagram Posts</h5>
                        <div class="body">
                            <div class="footer-gallery-inner">
                                <a href="#"><img src="{{ asset('assets/images/footer/three-gallery/01.png') }}" alt="Footer-gallery"></a>
                                <a href="#"><img src="{{ asset('assets/images/footer/three-gallery/02.png') }}" alt="Footer-gallery"></a>
                                <a href="#"><img src="{{ asset('assets/images/footer/three-gallery/03.png') }}" alt="Footer-gallery"></a>
                                <a href="#"><img src="{{ asset('assets/images/footer/three-gallery/04.png') }}" alt="Footer-gallery"></a>
                                <a href="#"><img src="{{ asset('assets/images/footer/three-gallery/05.png') }}" alt="Footer-gallery"></a>
                                <a href="#"><img src="{{ asset('assets/images/footer/three-gallery/06.png') }}" alt="Footer-gallery"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area ptb--20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="disc text-center">
                            FINBIZ - Copyright 2022. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts footer three area end -->
    <!-- ENd Header Area -->


    <!-- start loader -->
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End loader -->

    <!-- progress Back to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- progress Back to top End -->
@endsection