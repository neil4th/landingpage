@extends('Frontend.Layouts.appSecond')
@section('content')
<body class="home-violet onepage">

    <!-- start header area -->
    <header class="header--sticky header-one header-four ">
        <div class="header-top header-top-one header-top-four">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="top-left">Are you ready to grow up your business? <a href="{{ route('contactPage') }}">Contact Us
                                <i class="far fa-arrow-right"></i></a></p>
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
        <div class="header-main-one bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="thumbnail">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo/logo-5.svg') }}" alt="finbiz-logo">
                            </a>
                        </div>
                    </div>
                    <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-6">
                        <div class="main-header main-header-four">
                            <nav class="nav-main mainmenu-nav d-none d-xl-block">
                                <ul class="mainmenu">
                                    <li><a href="#banner">Home</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#about-us">About Us</a></li>
                                    <li><a href="#team">Team</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                    <li><a href="#blog">Blog</a></li>
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
                                <a href="#" class="rts-btn btn-primary btn-primary-4 ml--20 ml_sm--5 header-one-btn quote-btn">Book
                                    a
                                    Meeting</a>
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
                        <li><a href="#team">Team</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#blog">Blog</a></li>
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
    <div class="rts-banner-area banner-three banner-four">
        <div class="shape">
            <img src="{{ asset('assets/images/banner/shape/rectangle.png') }}" alt="">
        </div>
        <div class="shape1">
            <img src="{{ asset('assets/images/banner/shape/05.png') }}" alt="">
        </div>
        <div class="shape2">
            <img src="{{ asset('assets/images/banner/shape/06.png') }}" alt="">
        </div>
        <div class="shape3">
            <img src="{{ asset('assets/images/banner/shape/07.png') }}" alt="">
        </div>
        <div class="shape4">
            <img src="{{ asset('assets/images/banner/shape/08.png') }}" alt="">
        </div>
        <div class=" bg_banner-three bg_banner-four bg_image rts-section-gap " id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-three-inner banner-four-inner">
                            <span class="subtitle-banner">START GROWING YOUR INSURANCE</span>
                            <!-- type headline start-->
                            <h1 class="title cd-headline clip is-full-width">
                                Plan for the future <br> live your life now
                            </h1>
                            <p class="disc">
                                Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit <br> Dui
                                feugiat fusce conubia ridiculus tristique parturient
                            </p>
                            <div class="button-group">
                                <a href="{{ route('pricePlans') }}" class="rts-btn btn-primary-3 btn-primary-4">Free
                                    Consultant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end three -->

    <!-- rts-service area start -->
    <div class="rts-service-area rts-service-area4 rts-section-gap pb--140" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center title-service-three">
                        <p class="pre-title">
                            Popular Insurance
                        </p>
                        <h2 class="title">Our Latest Insurance</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="service-one-inner-four">
                        <div class="big-thumbnail-area">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('assets/images/service/14.jpg') }}" alt="Business-service">
                            </a>
                            <div class="content">
                                <h5 class="title">Personal Insurance</h5>
                                <p class="disc">Commodo gravida quamta sodales pulvinar habitant tristique auctore
                                    sapien pretiumto turpis dignissim mus feugiat
                                </p>
                            </div>
                            <a href="{{ route('serviceDetailsPage') }}" class="over_link"></a>
                        </div>
                        <a href="{{ route('serviceDetailsPage') }}" class="rts-btn btn-primary-3"> Read More<i
                                class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="service-one-inner-four">
                        <div class="big-thumbnail-area">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('assets/images/service/15.jpg') }}" alt="Business-service">
                            </a>
                            <div class="content">
                                <h5 class="title">Home Insurance</h5>
                                <p class="disc">Commodo gravida quamta sodales pulvinar habitant tristique auctore
                                    sapien pretiumto turpis dignissim mus feugiat
                                </p>
                            </div>
                            <a href="{{ route('serviceDetailsPage') }}" class="over_link"></a>
                        </div>
                        <a href="{{ route('serviceDetailsPage') }}" class="rts-btn btn-primary-3"> Read More<i
                                class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="service-one-inner-four">
                        <div class="big-thumbnail-area">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('assets/images/service/16.jpg') }}" alt="Business-service">
                            </a>
                            <div class="content">
                                <h5 class="title">Financial Insurance</h5>
                                <p class="disc">Commodo gravida quamta sodales pulvinar habitant tristique auctore
                                    sapien pretiumto turpis dignissim mus feugiat
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
    <!-- rts-service area end -->

    <!-- start call to action area -->
    <div class="rts-callto-acation-area rts-callto-acation-area4 bg-call-to-action-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-two-wrapper">
                        <div class="title-area">
                            <h3 class="title">Let’s discuss about how we can help <br>
                                make your insurance better</h3>
                        </div>
                        <a class="rts-btn btn-secondary-3" href="{{ route('contactPage') }}">Lets Work Together</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end call to action area -->

    <!-- business goal area -->
    <div class="rts-business-goal rts-business-goal2 mt--0 rts-section-gapBottom " id="about-us">
        <div class="container">
            <div class="row">
                <!-- business goal left -->
                <div class="col-lg-6">
                    <div class="business-goal-one">
                        <img src="{{ asset('assets/images/business-goal/02.jpg') }}" alt="Business_Goal">
                    </div>
                </div>
                <!-- business goal right -->

                <!-- right area business -->
                <div class="col-lg-6 mt--35 mt_md--70 mt_sm--70">
                    <div class="business-goal-right">
                        <div class="rts-title-area business text-start pl--30">
                            <p class="pre-title">
                                MAKE YOUR BEST INSURANCE WITH US
                            </p>
                            <h2 class="title">We know how to manage
                                insurance perfectly</h2>
                        </div>
                        <div class="rts-business-goal pl--30">
                            <div class="single-goal">
                                <img src="{{ asset('assets/images/business-goal/icon/03.svg') }}" alt="business_Icone" class="thumb">
                                <div class="goal-wrapper">
                                    <h6 class="title">Financing Insurance</h6>
                                    <p class="disc">Fusce condimentum mattis placerat odio donec lacus porta torquent,
                                        mauris gravida rutrum</p>
                                </div>
                            </div>
                            <div class="single-goal">
                                <img src="{{ asset('assets/images/business-goal/icon/04.svg') }}" alt="business_Icone" class="thumb">
                                <div class="goal-wrapper">
                                    <h6 class="title">Yearly Calculation</h6>
                                    <p class="disc">Fusce condimentum mattis placerat odio donec lacus porta torquent,
                                        mauris gravida rutrum</p>
                                </div>
                            </div>
                            <div class="goal-button-wrapper mt--70">
                                <a href="{{ route('contactPage') }}" class="rts-btn btn-primary color-h-black">Contact Us</a>
                                <div class="vedio-icone">
                                    <a id="play-video" class="video-play-button" href="#">
                                        <span></span>
                                        <span class="outer-text">Watch Video</span>
                                    </a>
                                    <div id="video-overlay" class="video-overlay">
                                        <a class="video-overlay-close">×</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- right area business ENd -->
            </div>
        </div>
    </div>
    <!-- business goal area End -->

    <!-- our working Process -->
    <div class="working-process-area working-process-area2 rts-section-gap working-process-bg">
        <div class="container">
            <div class="row mt--40">
                <div class="title-area text-center working-process">
                    <span>Working Steps</span>
                    <h2 class="title">Our Basic Work Process</h2>
                </div>
            </div>
            <div class="row g-5 mt--20 align-items-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 text-center">
                        <div class="inner">
                            <div class="icon">
                                <img src="{{ asset('assets/images/working-step/icon/05.svg') }}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Make a Plan</h6>
                            <p class="disc">
                                Nostra proin fusce hendrerit <br> viverra nisl torquent.
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 process-lg text-center">
                        <div class="inner two">
                            <div class="icon">
                                <img src="{{ asset('assets/images/working-step/icon/06.svg') }}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Cost Calculating</h6>
                            <p class="disc">
                                Nostra proin fusce hendrerit <br> viverra nisl torquent.
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 text-center">
                        <div class="inner three">
                            <div class="icon">
                                <img src="{{ asset('assets/images/working-step/icon/07.svg') }}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Insurance Growth</h6>
                            <p class="disc">
                                Nostra proin fusce hendrerit <br> viverra nisl torquent.
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                    <!-- single wirking process -->
                    <div class="rts-working-process-1 process-lg text-center">
                        <div class="inner four">
                            <div class="icon">
                                <img src="{{ asset('assets/images/working-step/icon/08.svg') }}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Success Mission</h6>
                            <p class="disc">
                                Nostra proin fusce hendrerit <br> viverra nisl torquent.
                            </p>
                        </div>
                    </div>
                    <!-- single wirking process End -->
                </div>
            </div>
        </div>
    </div>
    <!-- our working Process End -->

    <!-- start team section -->
    <div class="rts-team-area rts-team-area4 rts-section-gap bg-team" id="team">
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
            <div class="row g-5 mt--0">
                <div class="swiper mySwiperh1_team">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="{{ route('teamDetails') }}">
                                        <img src="{{ asset('assets/images/team/tm/01.jpg') }}" alt="Business_Team_single">
                                        <div class="team-social">
                                            <div class="main">
                                                <i class="fal fa-plus"></i>
                                            </div>
                                            <div class="team-social-one">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-details">
                                    <a href="{{ route('teamDetails') }}">
                                        <h5 class="title">Archer Graham</h5>
                                    </a>
                                    <p>Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="{{ route('teamDetails') }}">
                                        <img src="{{ asset('assets/images/team/tm/02.jpg') }}" alt="Business_Team_single">
                                        <div class="team-social">
                                            <div class="main">
                                                <i class="fal fa-plus"></i>
                                            </div>
                                            <div class="team-social-one">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-details">
                                    <a href="{{ route('teamDetails') }}">
                                        <h5 class="title">Amelia Clover</h5>
                                    </a>
                                    <p>Co-Founder</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="{{ route('teamDetails') }}">
                                        <img src="{{ asset('assets/images/team/tm/03.jpg') }}" alt="Business_Team_single">
                                        <div class="team-social">
                                            <div class="main">
                                                <i class="fal fa-plus"></i>
                                            </div>
                                            <div class="team-social-one">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-details">
                                    <a href="{{ route('teamDetails') }}">
                                        <h5 class="title">Beckett Hayden</h5>
                                    </a>
                                    <p>Deputy Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="team-single-one-start">
                                <div class="team-image-area">
                                    <a href="{{ route('teamDetails') }}">
                                        <img src="{{ asset('assets/images/team/tm/04.jpg') }}" alt="Business_Team_single">
                                        <div class="team-social">
                                            <div class="main">
                                                <i class="fal fa-plus"></i>
                                            </div>
                                            <div class="team-social-one">
                                                <i class="fab fa-youtube"></i>
                                                <i class="fab fa-twitter"></i>
                                                <i class="fab fa-instagram"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="single-details">
                                    <a href="{{ route('teamDetails') }}">
                                        <h5 class="title">Julian Wyat</h5>
                                    </a>
                                    <p>Finance Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end team section -->

    <!-- contact area start -->
    <div class="rts-contact-area contact-one contact-four" id="contact">
        <div class="container">
            <div class="row align-items-center g-0">
                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="contact-image-one">
                        <img src="{{ asset('assets/images/contact/02.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="contact-form-area-one">
                        <div class="rts-title-area contact text-start">
                            <p class="pre-title">
                                Make An Appointment
                            </p>
                            <h2 class="title">Request a free quote</h2>
                        </div>
                        <form action="#">
                            <div class="name-email">
                                <input type="text" placeholder="Your Name" required>
                                <input type="email" placeholder="Email Address" required>
                            </div>
                            <input type="text" placeholder="Business Topic">
                            <textarea placeholder="Type Your Message"></textarea>
                            <button type="submit" class="rts-btn btn-primary">Submit Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->

    <!-- rts-service area start -->
    <div class="rts-blog-area4 rts-section-gap pb--140" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center title-service-three">
                        <p class="pre-title">
                            WEEKLY POSTS
                        </p>
                        <h2 class="title">Our Latest Post</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-xl-4">
                    <div class="service-one-inner-four">
                        <div class="big-thumbnail-area">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('assets/images/blog/10.jpg') }}" alt="Business-service">
                            </a>
                            <div class="content">
                                <h5 class="title">The quick settle tips of the
                                    new ages exist</h5>
                            </div>
                            <div class="author-box">
                                <p class="date">15 Oct, 2022</i></p>
                                <p class="author">by Admin</i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="service-one-inner-four">
                        <div class="big-thumbnail-area">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('assets/images/blog/11.jpg') }}" alt="Business-service">
                            </a>
                            <div class="content">
                                <h5 class="title">Finance Helps Your Profit Secure & Proper</h5>
                            </div>
                            <div class="author-box">
                                <p class="date">15 Oct, 2022</i></p>
                                <p class="author">by Admin</i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="service-one-inner-four">
                        <div class="big-thumbnail-area">
                            <a href="#" class="thumbnail">
                                <img src="{{ asset('assets/images/blog/12.jpg') }}" alt="Business-service">
                            </a>
                            <div class="content">
                                <h5 class="title">The quick settle tips of the
                                    new ages exist</h5>
                            </div>
                            <div class="author-box">
                                <p class="date">15 Oct, 2022</i></p>
                                <p class="author">by Admin</i></p>
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
    <!-- rts footer three area start -->
    <div class="rts-footer-area footer-three footer-four rts-section-gapTop footer-bg-2">
        <div class="container pb--100 pb_sm--40">
            <div class="row g-5">
                <div class="col-xl-3 col-lg-6">
                    <div class="footer-three-single-wized left">
                        <a href="index" class="logo_footer">
                            <img src="{{ asset('assets/images/logo/logo-5.1.svg') }}" alt="Logo-image">
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
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="disc text-center ptb--25">
                            FINBIZ - Copyright 2022. All rights reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts footer three area end -->
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