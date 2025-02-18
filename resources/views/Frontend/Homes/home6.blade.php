@extends('Frontend.Layouts.app')

@section('title')
    Home Six (Business Consultant)
@endsection

@section('content')
   <!-- start header area -->
   <header class="header--sticky header-one header-four header-five header-six seven">
    <div class="header-top header-top-one header-top-four header-top-five header-top-six seven">
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
    <div class="header-main-one bg-white header-main-five six">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6">
                    <div class="thumbnail">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo/logo-3.svg') }}" alt="finbiz-logo">
                        </a>
                    </div>
                </div>
                <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-6">
                    <div class="main-header main-header-four main-header-five main-header-six seven">

                        @include('Frontend.Includes.mainLlist')


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
                            <a href="#" class="rts-btn btn-primary btn-primary-4 six ml--20 ml_sm--5 header-one-btn quote-btn">Book a Meeting</a>
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

            @include('Frontend.Includes.mobileMenu')


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


<!-- rts banner darea start -->
<div class="rts-banner-area banner-bg-h7">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <!-- bannerq inner six -->
                <div class="rts-banner-wrapper-seven">
                    <p class="pre-title"><span>Welcome!</span> Start Growing Your Business Today</p>
                    <h1 class="banner-title">
                        We Help to Grow <br>
                        Your <span>Financial Business </span>
                    </h1>
                    <p class="disc">
                        Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit Dui feugiat
                        fusce conubia ridiculus tristique parturient
                    </p>
                    <div class="button-area">
                        <a href="#" class="rts-btn btn-primary six mr--30">Our Services</a>
                        <a href="#" class="rts-btn btn-primary deactive">Free Consultant</a>
                    </div>
                </div>
                <!-- bannerq inner six ENd -->
            </div>
            <div class="col-xl-5">
                <div class="rts-contact-form-area six">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="rts-contact-fluid">
                                    <div class="rts-title-area contact-fluid text-center">
                                        <h2 class="title">Let’s Get in Touch</h2>
                                    </div>
                                    <div class="form-wrapper">
                                        <div id="form-messages"></div>
                                        <form id="contact-form" action="mailer.php" method="post">
                                            <div class="name-email">
                                                <input type="text" name="name" placeholder="First Name" required>
                                                <input type="text" name="name" placeholder="Last Name" required>
                                            </div>
                                            <input type="email" name="email" placeholder="Your Email" required>
                                            <input type="number" name="number" placeholder="Numbers" required>
                                            <select name="country" id="country">
                                                <option value="country">Country</option>
                                                <option value="">USA</option>
                                                <option value="">UK</option>
                                                <option value="">BRAZIL</option>
                                            </select>
                                            <textarea placeholder="Type Your Message" name="message"></textarea>
                                            <button type="submit" class="rts-btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-banner-6">
        <img src="{{ asset('assets/images/banner/shape/shape-h6.png') }}" alt="shape-images" data-sal-delay="150" data-sal="slide-right" data-sal-duration="800">
    </div>
</div>
<!-- rts banner darea end -->

<!-- rts-service area start -->
<div class="rts-service-area rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <p class="pre-title">
                        Our Services
                    </p>
                    <h2 class="title">Effective Services</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--10">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- single service for home six -->
                <div class="single-service-home-six">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service/icon/19.svg') }}" alt="">
                    </div>
                    <div class="inner">
                        <h5 class="title">
                            Financial planing
                        </h5>
                        <p class="disc">
                            Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa
                        </p>
                        <a href="#" class="rts-btn btn-primary">
                            Read More
                        </a>
                    </div>
                </div>
                <!-- single service for home six End -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- single service for home six -->
                <div class="single-service-home-six">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service/icon/20.svg') }}" alt="">
                    </div>
                    <div class="inner">
                        <h5 class="title">
                            Managment planing
                        </h5>
                        <p class="disc">
                            Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa
                        </p>
                        <a href="#" class="rts-btn btn-primary">
                            Read More
                        </a>
                    </div>
                </div>
                <!-- single service for home six End -->
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <!-- single service for home six -->
                <div class="single-service-home-six">
                    <div class="icon">
                        <img src="{{ asset('assets/images/service/icon/21.svg') }}" alt="">
                    </div>
                    <div class="inner">
                        <h5 class="title">
                            Social planing
                        </h5>
                        <p class="disc">
                            Purus dui eget sollicitudin curae leo proin platea cras, morbi torquent massa
                        </p>
                        <a href="#" class="rts-btn btn-primary">
                            Read More
                        </a>
                    </div>
                </div>
                <!-- single service for home six End -->
            </div>
        </div>
    </div>
</div>
<!-- rts-service area end -->

<!-- rts cta area start -->
<div class="rts-callto-acation-area rts-callto-acation-area4 bg-call-to-action-two">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-two-wrapper">
                    <div class="title-area">
                        <h3 class="title animated fadeIn">Let’s discuss about how we can help <br>
                            make your insurance better</h3>
                    </div>
                    <a class="rts-btn btn-primary-5 six" href="{{ route('contactPage') }}">Lets Work Together</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts cta area start end -->

<!-- rts about area start -->
<div class="rts-about-area rts-section-gap about-home-seven">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="thumbnail">
                    <img src="{{ asset('assets/images/about/main/06.jpg') }}" alt="about_image">
                    <img src="{{ asset('assets/images/about/main/about-02-sm.jpg') }}" alt="small" class="small">
                    <div class="experience-area six">
                        <h2 class="title">
                            25
                        </h2>
                        <span>
                            Years Of Experience
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-start home-seven-about">
                    <p class="pre-title">
                        More About Finbiz
                    </p>
                    <h3 class="title">Our Consulting For All Kind Of Finance Services</h3>
                </div>
                <div class="inner-about-home-7">
                    <p class="disc">
                        Molestie velit imperdiet porttitor at taciti, aptent semper primis nisl ut. Inceptos velit
                        penatibus tortor in sed curae urna lobortis ultricies aptent integer bibendum parturient
                        molestie risus
                    </p>
                    <!-- ingle about start -->
                    <div class="about-single-home-7">
                        <div class="icon">
                            <img src="{{ asset('assets/images/about/main/icon/01.svg') }}" alt="">
                        </div>
                        <div class="discription">
                            <h6 class="title">
                                Global Insights
                            </h6>
                            <p class="disc">
                                Aliquet bibendum duis diam ultricies rutrum vulputate, platea lacinia tortor mollis
                                nam dis.
                            </p>
                        </div>
                    </div>
                    <!-- ingle about end -->
                    <!-- ingle about start -->
                    <div class="about-single-home-7">
                        <div class="icon">
                            <img src="{{ asset('assets/images/about/main/icon/02.svg') }}" alt="">
                        </div>
                        <div class="discription">
                            <h6 class="title">
                                Business Investment
                            </h6>
                            <p class="disc">
                                Aliquet bibendum duis diam ultricies rutrum vulputate, platea lacinia tortor mollis
                                nam dis.
                            </p>
                        </div>
                    </div>
                    <!-- ingle about end -->
                    <!-- ingle about start -->
                    <div class="about-single-home-7">
                        <div class="icon">
                            <img src="{{ asset('assets/images/about/main/icon/03.svg') }}" alt="">
                        </div>
                        <div class="discription">
                            <h6 class="title">
                                Yearly Calculation
                            </h6>
                            <p class="disc">
                                Aliquet bibendum duis diam ultricies rutrum vulputate, platea lacinia tortor mollis
                                nam dis.
                            </p>
                        </div>
                    </div>
                    <!-- ingle about end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts about area end -->


<!-- rts progress areaa -->
<div class="progress-area-h7 rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="single-progress-bar-wrapper">

                    <div class="single-progress-inner">
                        <div class="progress red">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value"></div>
                        </div>
                        <div class="content-inner">
                            <h3 class="title">
                                90%
                            </h3>
                            <span>Trusted Clients</span>
                        </div>
                    </div>

                    <div class="single-progress-inner">
                        <div class="progress red blue">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value"></div>
                        </div>
                        <div class="content-inner">
                            <h3 class="title">
                                86%
                            </h3>
                            <span>Project Completed</span>
                        </div>
                    </div>

                    <div class="single-progress-inner before-none">
                        <div class="progress red pink">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value"></div>
                        </div>
                        <div class="content-inner">
                            <h3 class="title">
                                85%
                            </h3>
                            <span>Business Awards</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts progress areaa ENd -->


<!-- rts team area start -->
<div class="rts-team-area rts-section-gap rts-team-bg-home-7">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center home-six-team">
                    <p class="pre-title">
                        Team Members
                    </p>
                    <h2 class="title">Meet Our Dedicated Team</h2>
                </div>
            </div>
        </div>
        <div class="row g-5 mt--10">
            <!-- single teaam area start -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="rts-single-team-h7 six">
                    <div class="social-area">
                        <ul class="social-wrapper">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/team/tm/14.jpg') }}" alt="">
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5 class="title">
                                Andreas Menor
                            </h5>
                        </a>
                        <span class="desig">
                            Sr. Manager
                        </span>
                    </div>
                </div>
            </div>
            <!-- single teaam area end -->
            <!-- single teaam area start -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="rts-single-team-h7 six">
                    <div class="social-area">
                        <ul class="social-wrapper">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/team/tm/15.jpg') }}" alt="">
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5 class="title">
                                Andreas Menor
                            </h5>
                        </a>
                        <span class="desig">
                            Sr. Manager
                        </span>
                    </div>
                </div>
            </div>
            <!-- single teaam area end -->
            <!-- single teaam area start -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="rts-single-team-h7 six">
                    <div class="social-area">
                        <ul class="social-wrapper">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/team/tm/16.jpg') }}" alt="">
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5 class="title">
                                Andreas Menor
                            </h5>
                        </a>
                        <span class="desig">
                            Sr. Manager
                        </span>
                    </div>
                </div>
            </div>
            <!-- single teaam area end -->
            <!-- single teaam area start -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="rts-single-team-h7 six">
                    <div class="social-area">
                        <ul class="social-wrapper">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="thumbnail">
                        <img src="{{ asset('assets/images/team/tm/17.jpg') }}" alt="">
                    </div>
                    <div class="content">
                        <a href="#">
                            <h5 class="title">
                                Andreas Menor
                            </h5>
                        </a>
                        <span class="desig">
                            Sr. Manager
                        </span>
                    </div>
                </div>
            </div>
            <!-- single teaam area end -->
        </div>
    </div>
</div>
<!-- rts team area end -->


<!-- rts business growth area -->
<div class="rts-business-groth-home-6 rts-section-gap">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="thumbnaail">
                    <img src="{{ asset('assets/images/business-goal/04.jpg') }}" alt="business_goal">
                </div>
            </div>
            <div class="col-lg-6 pl--40">
                <div class="business-goal-inner">
                    <div class="title-area text-start working-process">
                        <p class="pre-title">Business Growth</p>
                        <h2 class="title">Contributing To Important Global Initiatives</h2>
                    </div>
                    <div class="content-inner">
                        <p class="disc mb--30">
                            Molestie velit imperdiet porttitor at taciti, aptent semper primis nislut velit
                            penatibus tortor in sed curae urna lobortis ultricies aptent integer risus commodo
                            viverra dis ridiculus elementum ligula lobortis
                        </p>
                        <p class="disc">
                            cursus luctus tristique facilisi magna euismod sem nibh hendrerit vivamus volutpat
                            ultricies egestas pharetra etiam eros in dignissim
                        </p>
                        <div class="button-area-business-groth">
                            <a href="#" class="rts-btn btn-primary six">Read More</a>
                            <div class="vedio-icone">
                                <a id="play-video" class="video-play-button hr" href="#">
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
        </div>
    </div>
</div>
<!-- rts business growth area End -->



<!-- our working Process -->
<div class="working-process-area working-process-area2 home-6 rts-section-gap working-process-bg">
    <div class="container">
        <div class="row">
            <div class="title-area text-center working-process">
                <span class="pre-title">Working Steps</span>
                <h2 class="title">Our Basic Work Process</h2>
            </div>
        </div>
        <div class="row g-5 mt--20 align-items-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <!-- single wirking process -->
                <div class="rts-working-process-1 text-center">
                    <div class="inner">
                        <div class="icon">
                            <img src="{{ asset('assets/images/working-step/icon/09.svg') }}" alt="Working_process">
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
                            <img src="{{ asset('assets/images/working-step/icon/10.svg') }}" alt="Working_process">
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
                            <img src="{{ asset('assets/images/working-step/icon/11.svg') }}" alt="Working_process">
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
                            <img src="{{ asset('assets/images/working-step/icon/12.svg') }}" alt="Working_process">
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


<!-- start gallery section -->
<div class="rts-gallery-area rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="rts-title-area gallery text-start six pl_sm--20">
                <p class="pre-title">
                    Popular Projects
                </p>
                <h2 class="title">Our Completed Projects</h2>
            </div>
        </div>
        <div class="row mt--45">
            <div class="col-12">
                <div class="swiper mygallery mySwipers">
                    <div class="swiper-wrapper gallery">
                        <div class="swiper-slide">
                            <div class="row g-5 w-g-100">
                                <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="thumbnail-gallery">
                                        <img src="{{ asset('assets/images/gallery/gallery-01.jpg') }}" alt="business-images">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                    <div class="bg-right-gallery">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/gallery/icon/01.svg') }}" alt="Business-gallery">
                                        </div>
                                        <a href="#">
                                            <h4 class="title">Pro Business Solution</h4>
                                        </a>
                                        <span>Case Study, Growth</span>
                                        <p class="disc">Ornare etiam laoreet dictumst nisl quisque scelerisque cras
                                            ut porta interdum purus mattis iaculis litora turpis torquent posuere.
                                        </p>
                                        <a class="rts-btn btn-primary six" href="{{ route('portfolioDetails') }}">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row g-5 w-g-100">
                                <div class="col-lg-7">
                                    <div class="thumbnail-gallery">
                                        <img src="{{ asset('assets/images/gallery/gallery-02.jpg') }}" alt="business-images">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="bg-right-gallery">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/gallery/icon/01.svg') }}" alt="Business-gallery">
                                        </div>
                                        <a href="#">
                                            <h4 class="title">Finbiz Pro Business</h4>
                                        </a>
                                        <span>Case Study, Growth</span>
                                        <p class="disc">In the literal sense, the term “Business” means the state of
                                            being busy. But it is a very wide connotation of business.</p>
                                        <a class="rts-btn btn-primary six" href="{{ route('portfolioDetails') }}">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row g-5 w-g-100">
                                <div class="col-lg-7">
                                    <div class="thumbnail-gallery">
                                        <img src="{{ asset('assets/images/gallery/gallery-03.jpg') }}" alt="business-images">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="bg-right-gallery">
                                        <div class="icon">
                                            <img src="{{ asset('assets/images/gallery/icon/01.svg') }}" alt="Business-gallery">
                                        </div>
                                        <a href="#">
                                            <h4 class="title">Pro Solution Business</h4>
                                        </a>
                                        <span>Case Study, Growth</span>
                                        <p class="disc">But a very wide of business because it
                                            covers every human activity. Business is really concerned with the
                                            production.
                                        </p>
                                        <a class="rts-btn btn-primary six" href="{{ route('portfolioDetails') }}">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next six"></div>
                    <div class="swiper-button-prev six"></div>
                    <div class="swiper-pagination six"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start gallery section -->


<!-- trusted Cliet -->
<div class="rts-trusted-client rts-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area-client six text-center">
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
<!-- trusted client -->


<!-- rts customer feedback area start -->
<div class="rts-customer-feedback-area-six rts-section-gap bg-feedback-seven">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area text-center">
                    <p class="pre-title">
                        Our Testimonials
                    </p>
                    <h2 class="title">
                        Our Customer Feedbacks
                    </h2>
                </div>
            </div>
        </div>
        <div class="row mt--40">
            <div class="swiper mySwiperh2_clients">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- single client reviews -->
                        <div class="rts-client-reviews-h2 six">
                            <div class="review-header">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('assets/images/testimonials/02.png') }}" alt="testimonials_area">
                                </a>
                                <div class="discription">
                                    <a href="#">
                                        <h6 class="title">David Smith</h6>
                                    </a>
                                    <span>Finance</span>
                                </div>
                            </div>
                            <div class="review-body">
                                <p class="disc">
                                    “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums
                                    augue
                                    volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                </p>
                                <div class="body-end">
                                    <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-01.png') }}" alt="Client_logo"></a>
                                    <div class="star-icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single client reviews End -->
                    </div>
                    <div class="swiper-slide">
                        <!-- single client reviews -->
                        <div class="rts-client-reviews-h2 six">
                            <div class="review-header">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('assets/images/testimonials/03.png') }}" alt="testimonials_area">
                                </a>
                                <div class="discription">
                                    <a href="#">
                                        <h6 class="title">Mark Jone</h6>
                                    </a>
                                    <span>Finance</span>
                                </div>
                            </div>
                            <div class="review-body">
                                <p class="disc">
                                    “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums
                                    augue
                                    volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                </p>
                                <div class="body-end">
                                    <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-02.png') }}" alt="Client_logo"></a>
                                    <div class="star-icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single client reviews End -->
                    </div>
                    <div class="swiper-slide">
                        <!-- single client reviews -->
                        <div class="rts-client-reviews-h2 six">
                            <div class="review-header">
                                <a href="#" class="thumbnail">
                                    <img src="{{ asset('assets/images/testimonials/04.png') }}" alt="testimonials_area">
                                </a>
                                <div class="discription">
                                    <a href="#">
                                        <h6 class="title">Lord Korn</h6>
                                    </a>
                                    <span>Finance</span>
                                </div>
                            </div>
                            <div class="review-body">
                                <p class="disc">
                                    “Dabus nisl aliquet congue tellus nascetur lectus sagpien mattis arcu dictums
                                    augue
                                    volutpat felis etiam suspendisse rhoncus mauris dignissim ante”
                                </p>
                                <div class="body-end">
                                    <a href="#"><img src="{{ asset('assets/images/testimonials/icon/logo-03.png') }}" alt="Client_logo"></a>
                                    <div class="star-icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single client reviews End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts customer feedback area end -->


<!-- blog area start -->
<div class="rts-blog-area rts-section-gap style-seven">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area text-center">
                    <p class="pre-title">Blog Posts</p>
                    <h2 class="title">News & Updates</h2>
                </div>
            </div>
        </div>
        <div class="g-5 mt--40">
            <div class="swiper mySwiperh1_blog">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="single-blog-one-wrapper">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/blog/01.jpg') }}" alt="business_Blog">
                                <div class="blog-badge">
                                    <span>25.05.2023</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <p><span>Business Solution </span>/ by David Dolean</p>
                                <a href="{{ route('blogDetailsPage') }}">
                                    <h5 class="title">The quick settle tips of the new
                                        ages exist </h5>
                                </a>
                                <a class="rts-read-more btn-primary six" href="{{ route('blogDetailsPage') }}"><i
                                        class="far fa-arrow-right"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-blog-one-wrapper">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/blog/02.jpg') }}" alt="business_Blog">
                                <div class="blog-badge">
                                    <span>25.05.2023</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <p><span>Business Solution </span>/ by David Dolean</p>
                                <a href="{{ route('blogDetailsPage') }}">
                                    <h5 class="title">Old generation settle tips of the new
                                        ages upps ! </h5>
                                </a>
                                <a class="rts-read-more btn-primary six" href="{{ route('blogDetailsPage') }}"><i
                                        class="far fa-arrow-right"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-blog-one-wrapper">
                            <div class="thumbnail">
                                <img src="{{ asset('assets/images/blog/03.jpg') }}" alt="business_Blog">
                                <div class="blog-badge">
                                    <span>25.05.2023</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <p><span>Business Solution </span>/ by David Dolean</p>
                                <a href="{{ route('blogDetailsPage') }}">
                                    <h5 class="title">Monkey Form settle tips of the new
                                        ages end </h5>
                                </a>
                                <a class="rts-read-more btn-primary six" href="{{ route('blogDetailsPage') }}"><i
                                        class="far fa-arrow-right"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog area end -->

<!-- rts footer area start -->
<div class="rts-footer-area footer-one rts-section-gapTop bg-footer-one">
    <div class="container bg-shape-f1">
        <!-- footer call to action area -->
        <div class="row">
            <div class="col-12">
                <div class="rts-cta-wrapper">
                    <div class="background-cta six">
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
                                    <button type="submit" class="rts-btn btn-primary six">Subscribe Now</button>
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
                <div class="footer-one-single-wized six">
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
                        <a href="#" class="rts-btn btn-primary contact-us six">Contact Us</a>
                    </div>
                </div>
            </div>
            <!-- footer mid area end -->

            <!-- footer end area post -->
            <div class="col-xl-4 col-md-6 col-sm-12 col-12">
                <div class="footer-one-single-wized six margin-left-65">
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

@endsection
