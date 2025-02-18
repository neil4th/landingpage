@extends('Frontend.Layouts.appSecond')
@section('content')
<body class="home-blue2 onepage">

    <!-- start header area -->
    <header class="header--sticky header-one header-four header-five">
        <div class="header-top header-top-one header-top-four header-top-five">
            <div class="container">
                <div class="row">
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
            </div>
        </div>
        <div class="header-main-one bg-white header-main-five">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="thumbnail">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo/logo-4.svg') }}" alt="finbiz-logo">
                            </a>
                        </div>
                    </div>
                    <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-6">
                        <div class="main-header main-header-four main-header-five">
                            <nav class="nav-main mainmenu-nav d-none d-xl-block">
                                <ul class="mainmenu">
                                    <li><a href="#banner">Home</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#about-us">About Us</a></li>
                                    <li><a href="#projects">Projects</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="button-area">
                                <div class="search-input-area">
                                    <div class="container">
                                        <div class="search-input-inner">
                                            <div class="input-div">
                                                <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                                                <button><i class="far fa-search"></i></button>
                                            </div>
                                            <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="rts-btn btn-primary btn-primary-4 ml--20 ml_sm--5 header-one-btn quote-btn">Get Quote</a>
                                <button id="menu-btn" class="menu rts-btn btn-primary-alta btn-primary-alta-four ml--20 ml_sm--5">
                                    <img class="menu-dark" src="{{ asset('assets/images/icon/menu.png') }}" alt="Menu-icon">
                                    <img class="menu-light" src="{{ asset('assets/images/icon/menu-light.png') }}" alt="Menu-icon">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header area -->

    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo-1.svg') }}" alt="finbiz_logo"></a>
            <a class="logo-2" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo-4.svg') }}" alt="finbiz_logo"></a>
            <a class="logo-3" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo-3.svg') }}" alt="finbiz_logo"></a>
            <a class="logo-4" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo-5.svg') }}" alt="finbiz_logo"></a>
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
                        <li><a href="#banner">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#blog">Blog</a></li>
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
    <div class="rts-banner-area banner-three banner-four banner-five" id="banner">
        <div class=" bg_banner-three bg_banner-four bg_image rts-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-three-inner banner-four-inner banner-five-inner">
                            <div class="banner-title">
                                <span class="subtitle-banner"><strong>WELCOME!</strong> START GROWING YOUR INSURANCE</span>
                                <!-- type headline start-->
                                <h1 class="title">
                                    Build Your Effective <br>
                                    <div class="changebox">
                                        <span>Business</span><br>
                                        <span>Marketing</span><br>
                                    </div>
                                    Strategy
                                </h1>
                            </div>
                            <p class="disc">
                                Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit <br> Dui feugiat fusce conubia ridiculus tristique parturient
                            </p>
                            <div class="button-group">
                                <a href="{{ route('pricePlans') }}" class="rts-btn btn-primary-3 btn-primary-4">Free Consultant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end three -->

    <!-- rts-service area start -->
    <div class="rts-service-area rts-service-area5" id="services">
        <div class="container">
            <div class="row g-5 mt--20">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="service-one-inner-four">
                        <a href="#" class="icon">
                            <img src="{{ asset('assets/images/service/icon/service-logo1.svg') }}" alt="Business-service">
                        </a>
                        <div class="content">
                            <h5 class="title">Financial Planning</h5>
                            <p class="disc">Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa
                            </p>
                        </div>
                        <a href="{{ route('serviceDetailsPage') }}" class="rts-btn btn-primary-3"> Read More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="service-one-inner-four">
                        <a href="#" class="icon">
                            <img src="{{ asset('assets/images/service/icon/service-logo2.svg') }}" alt="Business-service">
                        </a>
                        <div class="content">
                            <h5 class="title">Business Planning</h5>
                            <p class="disc">Commodo gravida sodales pulvinar quamta habitant tristique auctore sapien
                            </p>
                        </div>
                        <a href="{{ route('serviceDetailsPage') }}" class="rts-btn btn-primary-3"> Read More</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="service-one-inner-four">
                        <a href="#" class="icon">
                            <img src="{{ asset('assets/images/service/icon/service-logo3.svg') }}" alt="Business-service">
                        </a>
                        <div class="content">
                            <h5 class="title">Marketing Planning</h5>
                            <p class="disc">Sodales pulvinar habitant tristique sapien pretiumto turpis dignissim mus
                            </p>
                        </div>
                        <a href="{{ route('serviceDetailsPage') }}" class="rts-btn btn-primary-3"> Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-service area end -->

    <!-- leading business solution area -->
    <div class="rts-business-solution rts-business-solution5" id="about-us">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-12 first-child">
                    <div class="rts-business-solution-right">
                        <div class="title-area">
                            <span class="sub">
                                More About Us
                            </span>
                            <h2 class="title">
                                Here is your perfect Marketing Solution
                            </h2>
                        </div>
                        <div class="content-area">
                            <p class="disc">
                                Platea vehicula rutrum curae magna taciti acut quis malesuada inceptos phasellus massa, eget ultrices tempor lacinia dictumst tincidunt leo mollis luctus varius gravida eleifend cursus litora consequat class fames netus lacus id ligula.
                            </p>
                            <!-- single business solution -->
                            <div class="single-business-solution-2">
                                <div class="content">
                                    <h6 class="title">
                                        Best Marketing Solutions <br> since 2002
                                    </h6>
                                </div>
                            </div>
                            <!-- single business solution end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <!-- business solution left -->
                    <div class="rts-business-solution-left">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/images/business-goal/03.jpg') }}" alt="">
                            <div class="shape1">
                                <img src="{{ asset('assets/images/business-goal/icon/setting.png') }}" alt="">
                            </div>
                            <div class="shape2">
                                <img src="{{ asset('assets/images/business-goal/icon/setting.png') }}" alt="">
                            </div>
                            <div class="shape3">
                                <img src="{{ asset('assets/images/business-goal/icon/bag.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- business solution left End -->
                </div>
            </div>
        </div>
    </div>
    <!-- leading business solution area End -->

    <!-- start call to action area -->
    <div class="rts-callto-acation-area rts-callto-acation-area5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-two-wrapper">
                        <div class="title-area">
                            <h3 class="title">Need Any Marketing Solutions? Contact With Us</h3>
                        </div>
                        <a class="rts-btn btn-secondary-3" href="{{ route('contactPage') }}">Lets Work Together</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end call to action area -->

    <!-- business goal area -->
    <div class="rts-business-goal rts-business-goal5 mt--0 rts-section-gapBottom">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <div class="title-area">
                        <span class="sub">
                            OUR STRATEGY
                        </span>
                        <h2 class="title">
                            Grow Your Business with <br> Finbiz Pro SEO
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <!-- business goal left -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 first-child">
                    <ul class="content-box first">
                        <li class="content left">
                            <h5 class="main-title">Financial Planning</h5>
                            <p class="desc">Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa</p>
                        </li>
                        <li class="content left one">
                            <h5 class="main-title">Working Planning</h5>
                            <p class="desc">Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa</p>
                        </li>
                        <li class="content left">
                            <h5 class="main-title">Project Planning</h5>
                            <p class="desc">Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa</p>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="business-goal-one">
                        <img src="{{ asset('assets/images/business-goal/characters.png') }}" alt="Business_Goal">
                        <div class="shape"><img src="{{ asset('assets/images/business-goal/icon/line.png') }}" alt=""></div>
                    </div>
                </div>
                <!-- business goal right -->

                <!-- right area business -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12">
                    <ul class="content-box last">
                        <li class="content right">
                            <h5 class="main-title">Marketing Planning</h5>
                            <p class="desc">Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa</p>
                        </li>
                        <li class="content right two">
                            <h5 class="main-title">Service Planning</h5>
                            <p class="desc">Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa</p>
                        </li>
                        <li class="content right">
                            <h5 class="main-title">Placement Planning</h5>
                            <p class="desc">Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa</p>
                        </li>
                    </ul>
                </div>
                <!-- right area business ENd -->
            </div>
        </div>
    </div>
    <!-- business goal area End -->

    <!-- rts-counter up area start -->
    <div class="rts-counter-up-area counter-5 rts-section-gap">
        <div class="container">
            <div class="row">
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter">
                        <img src="{{ asset('assets/images/counterup/icon/09.svg') }}" alt="Business_counter">
                        <div class="counter-details">
                            <h2 class="title"><span class="counter animated fadeInDownBig">858</span></h2>
                            <p class="disc">Successful Projects</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center two pl--30">
                        <img src="{{ asset('assets/images/counterup/icon/10.svg') }}" alt="Business_counter">
                        <div class="counter-details">
                            <h2 class="title"><span class="counter animated fadeInDownBig">650</span></h2>
                            <p class="disc">Media Activities</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-center three pl--50">
                        <img src="{{ asset('assets/images/counterup/icon/11.svg') }}" alt="Business_counter">
                        <div class="counter-details">
                            <h2 class="title"><span class="counter animated fadeInDownBig">567</span></h2>
                            <p class="disc">Skilled Experts</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
                <!-- counter up area -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-counter pl--10 justify-content-end four">
                        <img src="{{ asset('assets/images/counterup/icon/12.svg') }}" alt="Business_counter">
                        <div class="counter-details">
                            <h2 class="title happy"><span class="counter animated fadeInDownBig">28</span></h2>
                            <p class="disc">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <!-- counter up area -->
            </div>
        </div>
    </div>
    <!-- rts-counter up area end -->

    <!-- business case start -->
    <div class="rts-business-case rts-section-gap" id="projects">
        <div class="container">
            <div class="row">
                <div class="title-area text-center business-case business-case5">
                    <span>Our Case Studies</span>
                    <h2 class="title">Our Recent Projects</h2>
                </div>
            </div>
        </div>
        <div class="container-cusiness-case-h2 mt--50">
            <div class="row">
                <div class="col-12">
                    <div class="swiper mySwiperh2_Business_Cases">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/04.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/05.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Business Growth
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/06.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Startup Solution
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/07.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Growth Manage
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/04.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Company Skills
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single business case -->
                                <div class="rts-business-case-s-2">
                                    <a href="{{ route('portfolioDetails') }}" class="thumbnail">
                                        <img src="{{ asset('assets/images/business-case/05.jpg') }}" alt="Business_case">
                                    </a>
                                    <div class="inner">
                                        <a href="{{ route('portfolioDetails') }}">
                                            <h5 class="title">
                                                Personal skill
                                            </h5>
                                        </a>
                                        <span>Business Strategy</span>
                                    </div>
                                    <a href="{{ route('portfolioDetails') }}" class="over_link"></a>
                                </div>
                                <!-- single business case End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- business case End -->

    <!-- testimonials area start -->
    <div class="rts-testimonials-h2-area rts-section-gap bg_testimonials-h2">
        <div class="container">
            <div class="row mb--30">
                <div class="col-12">
                    <div class="title-area testimonials-area-h2 text-center">
                        <span data-sal-delay="150" data-sal="slide-up" data-sal-duration="800">Customer
                            Testimonial</span>
                        <h2 class="title" data-sal-delay="250" data-sal="slide-up" data-sal-duration="800">2356+
                            Customer Feedback’s</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12">
                    <!-- Swiper -->
                    <div class="swiper testimonials-h2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single testimonials area -->
                                <div class="single-testimonials-h2">
                                    <div class="body">
                                        <h5 class="title">Great Business Solution</h5>
                                        <p class="disc">
                                            “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                            quisque ad dictumst semper tempor aliquam senectus commodo”
                                        </p>
                                    </div>
                                    <div class="footer">
                                        <div class="left">
                                            <a class="thumbnail" href="#"><img src="{{ asset('assets/images/testimonials/07.png') }}" alt="testimonials_image"></a>
                                            <div class="desig">
                                                <a href="#">
                                                    <h6 class="title">
                                                        Jasmine Lemon
                                                    </h6>
                                                </a>
                                                <p>Manager at <span>Apple</span></p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="stars-area">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonials area End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single testimonials area -->
                                <div class="single-testimonials-h2">
                                    <div class="body">
                                        <h5 class="title">Great Marketing Solution</h5>
                                        <p class="disc">
                                            “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                            quisque ad dictumst semper tempor aliquam senectus commodo”
                                        </p>
                                    </div>
                                    <div class="footer">
                                        <div class="left">
                                            <a class="thumbnail" href="#"><img src="{{ asset('assets/images/testimonials/07.png') }}" alt="testimonials_image"></a>
                                            <div class="desig">
                                                <a href="#">
                                                    <h6 class="title">
                                                        Jasmine Lemon
                                                    </h6>
                                                </a>
                                                <p>Manager at <span>Apple</span></p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="stars-area">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonials area End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single testimonials area -->
                                <div class="single-testimonials-h2">
                                    <div class="body">
                                        <h5 class="title">Great Corporate Solution</h5>
                                        <p class="disc">
                                            “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                            quisque ad dictumst semper tempor aliquam senectus commodo”
                                        </p>
                                    </div>
                                    <div class="footer">
                                        <div class="left">
                                            <a class="thumbnail" href="#"><img src="{{ asset('assets/images/testimonials/07.png') }}" alt="testimonials_image"></a>
                                            <div class="desig">
                                                <a href="#">
                                                    <h6 class="title">
                                                        Jasmine Lemon
                                                    </h6>
                                                </a>
                                                <p>Manager at <span>Apple</span></p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="stars-area">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonials area End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single testimonials area -->
                                <div class="single-testimonials-h2">
                                    <div class="body">
                                        <h5 class="title">Great Insurance Solution</h5>
                                        <p class="disc">
                                            “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                            quisque ad dictumst semper tempor aliquam senectus commodo”
                                        </p>
                                    </div>
                                    <div class="footer">
                                        <div class="left">
                                            <a class="thumbnail" href="#"><img src="{{ asset('assets/images/testimonials/07.png') }}" alt="testimonials_image"></a>
                                            <div class="desig">
                                                <a href="#">
                                                    <h6 class="title">
                                                        Jasmine Lemon
                                                    </h6>
                                                </a>
                                                <p>Manager at <span>Apple</span></p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="stars-area">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonials area End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- single testimonials area -->
                                <div class="single-testimonials-h2">
                                    <div class="body">
                                        <h5 class="title">Great Consulting Solution</h5>
                                        <p class="disc">
                                            “Dictum egravida praimis rhoncus maecenas qismart curae mauris turpis
                                            quisque ad dictumst semper tempor aliquam senectus commodo”
                                        </p>
                                    </div>
                                    <div class="footer">
                                        <div class="left">
                                            <a class="thumbnail" href="#"><img src="{{ asset('assets/images/testimonials/07.png') }}" alt="testimonials_image"></a>
                                            <div class="desig">
                                                <a href="#">
                                                    <h6 class="title">
                                                        Jasmine Lemon
                                                    </h6>
                                                </a>
                                                <p>Manager at <span>Apple</span></p>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="stars-area">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single testimonials area End -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination2"></div>
                    <!-- swiper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials area end -->

    <!-- rts-service area start -->
    <div class="rts-blog-area4 blog-area5 rts-section-gap pb--120 pb_sm--60" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center title-service-three">
                        <p class="pre-title">
                            Weekly Posts
                        </p>
                        <h2 class="title">Our Latest Post</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-xl-6 col-lg-6">
                    <div class="service-one-inner-four">
                        <div class="big-thumbnail-area">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('assets/images/blog/13.jpg') }}" alt="Business-service">
                                <span class="date">25 Dec, 2022</span>
                            </a>
                            <div class="content-box">
                                <div class="author-box">
                                    <p class="author"><span>BUSINESS SOLUTION</span> / BY DAVID DOLEAN</p>
                                </div>
                                <div class="content">
                                    <h5 class="title">The quick settle tips of the new ages exist</h5>
                                    <p class="desc">Euismod pulvinar tempus mi cum imperdiet felis blandit veldui libero pharetra enim magna nostra urna erat sagittis venatis</p>
                                </div>
                                <div class="button-area">
                                    <a href="{{ route('blogDetailsPage') }}"><span><i class="far fa-arrow-right"></i></span>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="service-one-inner-four">
                        <div class="big-thumbnail-area area-5">
                            <div class="content-box">
                                <div class="author-box">
                                    <p class="author"><span>MARKETING SOLUTION</span> / BY DAVID DOLEAN</p>
                                </div>
                                <div class="content">
                                    <h5 class="title">The new ages tips of the quick settle</h5>
                                    <p class="desc">Euismod pulvinar tempus mi cum imperdiet felis blandit veldui libero pharetra enim magna nostra urna erat sagittis venatis</p>
                                </div>
                            </div>
                        </div>
                        <div class="big-thumbnail-area area-5">
                            <div class="content-box">
                                <div class="author-box">
                                    <p class="author"><span>CONSULTING SOLUTION</span> / BY DAVID DOLEAN</p>
                                </div>
                                <div class="content">
                                    <h5 class="title">Report current news in your bussiness</h5>
                                    <p class="desc">Euismod pulvinar tempus mi cum imperdiet felis blandit veldui libero pharetra enim magna nostra urna erat sagittis venatis</p>
                                </div>
                            </div>
                        </div>
                        <div class="big-thumbnail-area area-5">
                            <div class="content-box">
                                <div class="author-box">
                                    <p class="author"><span>CORPORATE SOLUTION</span> / BY DAVID DOLEAN</p>
                                </div>
                                <div class="content">
                                    <h5 class="title">Profitable bussiness make your profit</h5>
                                    <p class="desc">Euismod pulvinar tempus mi cum imperdiet felis blandit veldui libero pharetra enim magna nostra urna erat sagittis venatis</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts-service area end -->

    <!-- start trusted client section -->
    <div class="rts-trusted-client rts-trusted-client2 rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area-client text-center">
                        <p class="client-title">Our Trusted Clients</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="client-wrapper-one">
                    <a href="#"><img src="{{ asset('assets/images/client/01.png') }}" alt="business_finbiz"></a>
                    <a href="#"><img src="{{ asset('assets/images/client/02.png') }}" alt="business_finbiz"></a>
                    <a href="#"><img src="{{ asset('assets/images/client/03.png') }}" alt="business_finbiz"></a>
                    <a href="#"><img src="{{ asset('assets/images/client/04.png') }}" alt="business_finbiz"></a>
                    <a href="#"><img src="{{ asset('assets/images/client/05.png') }}" alt="business_finbiz"></a>
                    <a href="#"><img src="{{ asset('assets/images/client/06.png') }}" alt="business_finbiz"></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end trusted client section -->

    <!-- start footer area -->
    <!-- rts footer area start -->
    <div class="rts-footer-area footer-one footer-five rts-section-gapTop bg-footer-one" id="contact">
        <div class="container bg-shape-f1">
            <!-- footer call to action area -->
            <div class="row">
                <div class="col-12">
                    <div class="rts-cta-wrapper">
                        <div class="background-cta">
                            <div class="row">
                                <!-- cta-left -->
                                <div class="col-lg-6">
                                    <div class="cta-left-wrapepr">
                                        <p class="cta-disc">
                                            Latest Business Ideas
                                        </p>
                                        <h3 class="title">Sign Up Newsletter</h3>
                                    </div>
                                </div>
                                <!-- cta left end -->
                                <div class="col-lg-6">
                                    <!-- cta right -->
                                    <form class="cta-input-arae">
                                        <input type="email" name="email" placeholder="Enter Email Address" required>
                                        <button type="submit" class="rts-btn btn-primary">Subscribe Now</button>
                                    </form>
                                    <!-- cta right End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer call to action area End -->
            <!-- rts footer area -->
            <div class="row pt--120 pt_sm--80 pb--80 pb_sm--40">
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized">
                        <div class="wized-title">
                            <h5 class="title">Quick Links</h5>
                            <img src="{{ asset('assets/images/footer/under-title.png') }}" alt="finbiz_footer">
                        </div>
                        <div class="quick-link-inner">
                            <ul class="links">
                                <li><a href="#"><i class="far fa-arrow-right"></i> Forum Support</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Help & FAQ</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Contact Us</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Pricing & Plans</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> Cookie Policy</a></li>
                            </ul>
                            <ul class="links margin-left-70">
                                <li><a href="#"><i class="far fa-arrow-right"></i> About Us</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i> My Account</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i>Our Company</a></li>
                                <li><a href="#"><i class="far fa-arrow-right"></i>Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- footer mid area -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized mid-bg">
                        <div class="wized-title">
                            <h5 class="title">Opening Hours</h5>
                            <img src="{{ asset('assets/images/footer/under-title.png') }}" alt="finbiz_footer">
                        </div>
                        <div class="opening-time-inner">
                            <div class="single-opening">
                                <p class="day">Week Days</p>
                                <p class="time">09.00 - 24:00</p>
                            </div>
                            <div class="single-opening">
                                <p class="day">Saturday</p>
                                <p class="time">08:00 - 03.00</p>
                            </div>
                            <div class="single-opening mb--30 mb_sm--10">
                                <p class="day">Sunday</p>
                                <p class="time">Day Off</p>
                            </div>
                            <a href="#" class="rts-btn btn-primary contact-us">Contact Us</a>
                        </div>
                    </div>
                </div>
                <!-- footer mid area end -->

                <!-- footer end area post -->
                <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                    <div class="footer-one-single-wized margin-left-65">
                        <div class="wized-title">
                            <h5 class="title">Popular Updates</h5>
                            <img src="{{ asset('assets/images/footer/under-title.png') }}" alt="finbiz_footer">
                        </div>
                        <div class="post-wrapper">
                            <!-- single post -->
                            <div class="single-footer-post mb--30">
                                <div class="left-thumbnail">
                                    <img src="{{ asset('assets/images/footer/post/01.png') }}" alt="finbiz_business-post">
                                </div>
                                <div class="post-right">
                                    <p> <i class="fal fa-clock"></i> 15th April, 2022</p>
                                    <a href="{{ route('blogDetailsPage') }}">
                                        <h6 class="title">Best Business Ideas For
                                            Getting Solution</h6>
                                    </a>
                                    <a class="red-more" href="{{ route('blogDetailsPage') }}">Read More<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single post End -->
                            <!-- single post -->
                            <div class="single-footer-post">
                                <div class="left-thumbnail">
                                    <img src="{{ asset('assets/images/footer/post/02.png') }}" alt="finbiz_business-post">
                                </div>
                                <div class="post-right">
                                    <p> <i class="fal fa-clock"></i> 15th April, 2022</p>
                                    <a href="{{ route('blogDetailsPage') }}">
                                        <h6 class="title">Best Business Ideas For
                                            Getting Solution</h6>
                                    </a>
                                    <a class="red-more" href="{{ route('blogDetailsPage') }}">Read More<i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- single post End -->
                        </div>
                    </div>
                </div>
                <!-- footer end area post end-->
            </div>
            <!-- rts footer area End -->
        </div>
        <!-- copyright area start -->
        <div class="rts-copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <p>FINBIZ - Copyright 2022. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- copyright area end -->
    </div>
    <!-- rts footer area end -->
    <!-- ENd footer Area -->

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