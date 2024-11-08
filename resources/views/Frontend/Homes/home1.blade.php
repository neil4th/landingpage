@extends('Frontend.Layouts.app')

@section('title')
Home
@endsection

@section('content')
<header class="header--sticky header-one ">
    <div class="header-top header-top-one bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-xl-block d-none">
                    <div class="left">
                        <div class="mail">
                            <a href="mailto:bacaca_printshop@yahoo.com"><i class="fal fa-envelope"></i>bacaca_printshop@yahoo.com</a>
                        </div>
                        <div class="working-time">
                            <p><i class="fal fa-clock"></i> Working: 8.00am - 5.00pm</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-xl-block d-none">
                    <div class="right">
                        <ul class="top-nav">
                            <li><a href="{{ route('aboutPage') }}">Yearbook</a></li>
                            <li><a href="{{ route('blogPage') }}">EMS</a></li>
                            <li><a href="{{ route('contactPage') }}">HRMS</a></li>
                        </ul>
                        <ul class="social-wrapper-one">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a class="mr--0" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-main-one bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-4">
                    <div class="thumbnail">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo/bacaca-logo-org2.png') }}" alt="bacaca_logo">
                        </a>
                    </div>
                </div>
                <div class=" col-xl-9 col-lg-8 col-md-8 col-sm-8 col-8">
                    <div class="main-header">
                        <nav class="nav-main mainmenu-nav d-none d-xl-block">
                            <ul class="mainmenu">
                                <li class="has-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>

                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Products and Services</a>
                                    <ul class="submenu menu-link">
                                        <li class="menu-item">
                                            <a class="tag" href="#">Offset Printing</a>
                                            <ul>
                                            <ul>
                                                    <li><a href ="{{ route('appoitment') }}">Appoinment</a></li>

                                                    <li><a href="{{ route('aboutPage') }}">About Us</a></li>
                                                    <li><a href="{{ route('pricePlans') }}">Price Plans</a></li>
                                                    <li><a href ="{{ route('ourservicePage') }}">Our Services</a></li>
                                                    <li><a href="{{ route('testimonialStyle') }}">Testimonial</a></li>
                                                    <li><a href="{{ route('errorPage') }}">404 Page</a></li>
                                                </ul>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="tag" href="#">Portfolio</a>
                                            <ul>
                                                <li><a href="{{ route('portfolioStyle1') }}">Portfolio Style 1</a></li>
                                                <li><a href="{{ route('portfolioStyle2') }}">Portfolio Style 2</a></li>
                                                <li><a href="{{ route('portfolioStyle3') }}">Portfolio Style 3</a></li>
                                                <li><a href="{{ route('portfolioStyle4') }}">Portfolio Style 4</a></li>
                                                <li><a href="{{ route('portfolioStyle5') }}">Portfolio Style 5</a></li>
                                                <li><a href="{{ route('portfolioDetails') }}">Portfolio Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="tag" href="#">Our Teams</a>
                                            <ul>
                                                <li><a href="{{ route('teamStyle1') }}">Team Style 1</a></li>
                                                <li><a href="{{ route('teamStyle2') }}">Team Style 2</a></li>
                                                <li><a href="{{ route('teamStyle3') }}">Team Style 3</a></li>
                                                <li><a href="{{ route('teamStyle4') }}">Team Style 4</a></li>
                                                <li><a href="{{ route('teamStyle5') }}">Team Style 5</a></li>
                                                <li><a href="{{ route('teamDetails') }}">Team Details</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('blogPage') }}">Blog List</a></li>
                                        <li><a href="{{ route('blogGridPage') }}">Blog Grid</a></li>
                                        <li><a href="{{ route('blogDetailsPage') }}">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Elements</a>
                                    <ul class="submenu menu-link2">
                                        <li class="menu-item">
                                            <ul>
                                                <li><a href="{{ route('accordianPage') }}">Accordion</a></li>
                                                <li><a href="{{ route('addressBox') }}">Address Box</a></li>
                                                <li><a href="{{ route('buttonPage') }}">Button</a></li>
                                                <li><a href="{{ route('blogGridPage') }}">Blog Grid</a></li>
                                                <li><a href="{{ route('blogSlider') }}">Blog Slider</a></li>
                                                <li><a href="{{ route('blogQuote') }}">Blog Quote</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <ul>
                                                <li><a href="{{ route('headingPage') }}">Heading</a></li>
                                                <li><a href="{{ route('callToA') }}">Call To Action</a></li>
                                                <li><a href="{{ route('contactForm') }}">Contact Form</a></li>
                                                <li><a href="{{ route('counterUp') }}">Counter Up</a></li>
                                                <li><a href="{{ route('brandPage') }}">Brand Logo</a></li>
                                                <li><a href="{{ route('videoAddon') }}">Video Addon</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <ul>
                                                <li><a href="{{ route('PricingPage') }}">Pricing Table</a></li>
                                                <li><a href="{{ route('typoGraphy') }}">Typography</a></li>
                                                <li><a href="{{ route('tabAddon') }}">Tab Addon</a></li>
                                                <li><a href="{{ route('progressBar') }}">Progress Bar</a></li>
                                                <li><a href="{{ route('testimonialPage') }}">Testimonial</a></li>
                                                <li><a href="{{ route('workingProgress') }}">Working Process</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="nav-item" href="{{ route('contactPage') }}">Contact</a></li>
                            </ul>
                        </nav>

                        <div class="button-area">
                            <button id="search" class="rts-btn btn-primary-alta"><i class="far fa-search"></i></button>
                            <a href="#" class="rts-btn btn-primary ml--20 ml_sm--5 header-one-btn quote-btn">Get Quote</a>
                            <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20 ml_sm--5">
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
        <a class="logo-1" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/bacaca-logo-org2.png') }}" alt="bacaca_logo"></a>
        <a class="logo-2" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo-4.svg') }}" alt="finbiz_logo"></a>
        <a class="logo-3" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo-3.svg') }}" alt="finbiz_logo"></a>
        <a class="logo-4" href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo/logo-5.svg') }}" alt="finbiz_logo"></a>
        <div class="body d-none d-xl-block">
            <p class="disc">
            Affordable, Quality Prints and Fast Turnaround Time.
            </p>
            <div class="get-in-touch">
                <!-- title -->
                <div class="h6 title">Get In Touch</div>
                <!-- title End -->
                <div class="wrapper">
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="#">(082) 392 6331</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="#">0936 186 0705</a>
                    </div>
                    <!-- single ENd -->
                     <!-- single -->
                    <div class="single">
                        <i class="fas fa-phone-alt"></i>
                        <a href="#">0946 632 4999</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:bacaca_printshop@yahoo.com">bacaca_printshop@yahoo.com</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-globe"></i>
                        <a href="#">www.bacaca-printshop.com</a>
                    </div>
                    <!-- single ENd -->
                    <!-- single -->
                    <div class="single">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#">Km.8 Diversion Road Buhangin fronting COA, Davao City, Philippines</a>
                    </div>
                    <!-- single ENd -->
                </div>
                <div class="social-wrapper-two menu">
                    <a href="https://www.facebook.com/bacacaprintshop" target="_blank"><i class="fab fa-facebook-f"></i></a>
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
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Home</a>
                    </li>
                    <li class="menu-item"><a class="menu-link" href="{{ route('aboutPage') }}">About Us</a></li>
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Services</a>
                        <ul class="submenu">
                            <li class="has-droupdown sub-droupdown">
                                <a href="#">Our Service</a>
                                <ul class="submenu third-lvl mobile-menu">
                                    <li><a href="{{ route('ourservicePage') }}">Service 1</a></li>
                                    <li><a href="{{ route('service2Page') }}">Service 2</a></li>
                                    <li><a href="{{ route('service3Page') }}">Service 3</a></li>
                                </ul>
                            </li>
                            <li class="mobile-menu-link"><a href="{{ route('serviceDetailsPage') }}">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Pages</a>
                        <ul class="submenu">
                            <li class="mobile-menu-link"><a href="{{ route('portfolioStyle1') }}">Project</a></li>
                            <li class="mobile-menu-link"><a href="{{ route('portfolioDetails') }}">Project Details</a></li>
                            <li class="mobile-menu-link"><a href="{{ route('teamStyle1') }}">Team</a></li>
                            <li class="mobile-menu-link"><a href="{{ route('teamDetails') }}">Team Details</a></li>
                            <li class="mobile-menu-link"><a href="{{ route('appoitment') }}">appoinment</a></li>
                            <li class="mobile-menu-link"><a href="{{ route('pricePlans') }}">Price Plan</a></li>
                            <li class="mobile-menu-link"><a href="{{ route('errorPage') }}">404 Page</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown menu-item">
                        <a class="menu-link" href="#">Blog</a>
                        <ul class="submenu">
                            <li class="mobile-menu-link"><a href="{{ route('blogPage') }}">Blog List</a></li>
                            <li class="mobile-menu-link"><a href="{{ route('blogGridPage') }}">Blog Grid</a></li>
                            <li class="mobile-menu-link"><a href="{{ route('blogDetailsPage') }}">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item"><a class="menu-link" href="{{ route('contactPage') }}">Contact</a></li>
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

<div class="search-input-area">
    <div class="container">
        <div class="search-input-inner">
            <div class="input-div">
                <input id="searchInput1" class="search-input" type="text" placeholder="Search by keyword or #">
                <button><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>
    <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
</div>

<div id="anywhere-home">
</div>
<!-- ENd Header Area -->
<div class="rts-banner-area rts-banner-one">
    <div class="swiper mySwiper banner-one">
        <div class="video-container">
            <video autoplay loop muted>
                <source src="assets/videos/ads.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="swiper-pagination"></div>

        <!-- Overlay Information -->
        <div class="swiper-container">
            <div class="info swiper-slide slides active">
                <div class="info-banner  banner-one-inner text-start">
                    <p class="pre-title text-white"  style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                        <span>Welcome!</span > Start Growing Your Business Today
                    </p>
                    <h1 class="title text-white text-shadow">Launch <span>Ultra Modern</span> <br> Effective Business</h1>
                    <p class="disc banner-para text-white" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                        Porttitor ornare fermentum aliquam pharetra facilisis gravida risus suscipit <br> Dui
                        feugiat fusce conubia ridiculus tristique parturient
                    </p>
                </div>

            </div>
            <div class="info swiper-slide slides">
                <div class="info-banner banner-one-inner text-start">

                    <p class="pre-title text-white"  style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                        <span>Welcome!</span> Start Growing Your Business Today
                    </p>
                    <h1 class="title text-white text-shadow">Make <span>Business Growth</span> <br> With Next Level</h1>
                    <p class="disc banner-para text-white"  style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
                    Lorem ipsum dolor sit amet. Et expedita accusantium ut quos voluptas qui similique <br>
                    nihil At
                    doloribus illo et autem ipsam. Aut obcaecati quis et alias <br>
                    ipsa sed voluptatem libero nam repellat sunt a ratione architecto.
                    </p>
                </div>

            </div>
        </div>
        <div class="overlay"></div>
        <!-- Overlay Information End -->
    </div>
</div>
<style>
   .text-shadow {
    text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.8); /* Customize this value as needed */
}
    .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(141deg, rgba(255,255,255,0) 41%, rgba(90,206,246,0.6) 100%); /* Diagonal fade */
    z-index: 1; /* Ensure the overlay is above the video but below the text */
}
    @keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px); /* Start slightly below */
    }
    to {
        opacity: 1;
        transform: translateY(0); /* End at original position */
    }
}
.slides.pre-title {
        animation: fadeIn 0.5s ease forwards;
        animation-delay: 0.5s; /* Delay for pre-title */
    }

    .slides.disc {
        animation: fadeIn 0.5s ease forwards;
        animation-delay: 0.6s; /* Delay for description */
    }
    .rts-banner-area {
        position: relative;
    }

    .info {
        z-index: 10;
        /* Ensure it appears above the video */
    }

    .info-banner {
        padding: 20px;
        /* Adjust padding as needed */
        border-radius: 10px;
        /* Optional: rounded corners */
        animation: fadeIn 0.5s ease forwards; /* Apply animation */
    }


    .slides {
        position: absolute;
        top: 25%;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: top 0.5s ease, opacity 0.5s ease;
        display: none;
        /* Hide all slides by default */
    }

    .slides.active {
        top: 25%;
        opacity: 1;
        display: block;
        /* Show only the active slide */
    }

</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const slides = document.querySelectorAll('.slides');
        let currentSlide = 0;

        // Show the initial slide
        function showSlide () {
            slides[currentSlide].classList.add('active');
        }

        // Hide the current slide and show the next one
        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide();
        }

        // Initialize the slideshow
        showSlide();

        // Set up the slideshow interval
        setInterval(nextSlide, 5000);
    });
</script>

<div class="animation-img">
    <img class="shape-img two" src="assets/images/banner/shape/02.png" alt="banner_business">
    <img class="shape-img three" src="assets/images/banner/shape/03.png" alt="banner_business">
</div>
</div>
<!-- banner blank space area end -->

<!-- rts about us section start -->
<div class="rts-about-area rts-section-gap bg-about-sm-shape">
    <div class="container">
        <div class="row g-5 align-items-center">
            <!-- about left -->
            <div
                class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-md-2 order-sm-2 order-2 mt_md--50 mt_sm--50">
                <div class="rts-title-area">
                    <p class="pre-title">
                        More About Us
                    </p>
                    <h2 class="title">We Provide Best Business
                        Solution in Town</h2>
                </div>
                <div class="about-inner">
                    <p class="disc">
                        Porttitor ornare fermentum aliquam pharetra ut facilisis gravida risus suscipit. dui feugiat
                        fusce conubia ridiculus tristique parturient natoque vulputate risu
                        business solution ceter 24/7 great support
                    </p>
                    <!-- start about success area -->
                    <div class="row about-success-wrapper">
                        <!-- left wrapper start -->
                        <div class="col-lg-6 col-md-6">
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">24/7 Call Services Avilable</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Great Skilled Consultant</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Expert Team Members</p>
                            </div>
                        </div>
                        <!-- left wrapper end -->
                        <div class="col-lg-6 col-md-6">
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">How to improve business
                                </p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Business is the best plan</p>
                            </div>
                            <div class="single">
                                <i class="far fa-check"></i>
                                <p class="details">Services we provide</p>
                            </div>
                        </div>
                    </div>
                    <!-- start about success area -->

                    <!-- about founder & get in touch start -->
                    <div class="row about-founder-wrapper align-items-center mt--40">
                        <!-- left area start -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="author-inner">
                                <a class="thumbnail" href="#"><img src="assets/images/about/sm-01.png"
                                        alt="finbiz_founder"></a>
                                <div class="founder-details">
                                    <a href="{{ route('teamDetails') }}">
                                        <h6 class="title">Adrew David</h6>
                                    </a>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>
                        </div>
                        <!-- left area end -->
                        <!-- right founder area -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt_sm--20">
                            <div class="author-call-option">
                                <img class="authore-call" src="assets/images/about/call.svg" alt="call_founder">
                                <div class="call-details">
                                    <span>Call us anytime</span>
                                    <a href="tel:+18475555555">
                                        <h6 class="title">+256 21458.2146</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- left founder area -->
                    </div>
                    <!-- about founder & get in touch end -->
                </div>
            </div>
            <!-- about right -->

            <!-- about-right Start-->
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-2 order-md-1 order-sm-1 order-1">
                <div class="about-one-thumbnail">
                    <img src=" assets/images/about/main/about-01.png" alt="about-finbiz">
                    <img class="small-img" src="assets/images/about/main/about-02.png" alt="finbiz-small">
                    <div class="experience">
                        <div class="left single">
                            <h2 class="title">25+</h2>
                            <p class="time">Years</p>
                        </div>
                        <div class="right single">
                            <p class="disc">
                                Of experience
                                in consulting
                                service
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about-right end -->
        </div>
    </div>
</div>
<!-- rts about us section end -->

<!-- rts service post area  Start-->
<div class="rts-service-area rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="rts-title-area service text-center">
                    <p class="pre-title">
                        Our Services
                    </p>
                    <h2 class="title">High Quality Services</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid service-main plr--120-service mt--50 plr_md--0 pl_sm--0 pr_sm--0">
        <div class="background-service row">
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner one">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/01.svg" alt="finbiz_service">
                    </div>
                    <div class="service-details">
                        <a href="{{ route('serviceDetailsPage') }}">
                            <h5 class="title">Business Planning</h5>
                        </a>
                        <p class="disc">
                            Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                        </p>
                        <a class="rts-read-more btn-primary" href="{{ route('serviceDetailsPage') }}"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner two">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/02.svg" alt="finbiz_service">
                    </div>
                    <div class="service-details">
                        <a href="{{ route('serviceDetailsPage') }}">
                            <h5 class="title">Develop Process</h5>
                        </a>
                        <p class="disc">
                            Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                        </p>
                        <a class="rts-read-more btn-primary" href="{{ route('serviceDetailsPage') }}"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner three">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/03.svg" alt="finbiz_service">
                    </div>
                    <div class="service-details">
                        <a href="{{ route('serviceDetailsPage') }}">
                            <h5 class="title">Strategy & Planning</h5>
                        </a>
                        <p class="disc">
                            Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                        </p>
                        <a class="rts-read-more btn-primary" href="{{ route('serviceDetailsPage') }}"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner four">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/04.svg" alt="finbiz_service">
                    </div>
                    <div class="service-details">
                        <a href="{{ route('serviceDetailsPage') }}">
                            <h5 class="title">Business Support</h5>
                        </a>
                        <p class="disc">
                            Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                        </p>
                        <a class="rts-read-more btn-primary" href="{{ route('serviceDetailsPage') }}"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner five">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/05.svg" alt="finbiz_service">
                    </div>
                    <div class="service-details">
                        <a href="{{ route('serviceDetailsPage') }}">
                            <h5 class="title">Audit & Evaluation</h5>
                        </a>
                        <p class="disc">
                            Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                        </p>
                        <a class="rts-read-more btn-primary" href="{{ route('serviceDetailsPage') }}"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
            <!-- start single Service -->
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="service-one-inner six">
                    <div class="thumbnail">
                        <img src="assets/images/service/icon/06.svg" alt="finbiz_service">
                    </div>
                    <div class="service-details">
                        <a href="{{ route('serviceDetailsPage') }}">
                            <h5 class="title">Consultancy & Advice</h5>
                        </a>
                        <p class="disc">
                            Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero
                        </p>
                        <a class="rts-read-more btn-primary" href="{{ route('serviceDetailsPage') }}"><i
                                class="far fa-arrow-right"></i>Read
                            More</a>
                    </div>
                </div>
            </div>
            <!-- end single Services -->
        </div>
        <div class="row">
            <div class="cta-one-bg col-12">
                <div class="cta-one-inner">
                    <div class="cta-left">
                        <h3 class="title">Let’s discuss about how we can help
                            make your business better</h3>
                    </div>
                    <div class="cta-right">
                        <a class="rts-btn btn-white" href="{{ route('appoitment') }}">Lets Work Together</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts service post area ENd -->

<!-- business goal area -->
<div class="rts-business-goal mt--0 rts-section-gapBottom">
    <div class="container">
        <div class="row">
            <!-- business goal left -->
            <div class="col-lg-6">
                <div class="business-goal-one">
                    <img src="assets/images/business-goal/01.jpg" alt="Business_Goal">
                    <img class="small" src="assets/images/business-goal/sm-01.jpg" alt="Business_Goal">
                </div>
            </div>
            <!-- business goal right -->

            <!-- right area business -->
            <div class="col-lg-6 mt--35 mt_md--70 mt_sm--70">
                <div class="business-goal-right">
                    <div class="rts-title-area business text-start pl--30">
                        <p class="pre-title">
                            JUST A CONSULTANCY
                        </p>
                        <h2 class="title">We know how to manage
                            business globally</h2>
                    </div>
                    <div class="rts-business-goal pl--30">
                        <div class="single-goal">
                            <img src="assets/images/business-goal/icon/01.svg" alt="business_Icone" class="thumb">
                            <div class="goal-wrapper">
                                <h6 class="title">Best Business Consulting</h6>
                                <p class="disc">Fusce condimentum mattis placerat odio donec lacus porta torquent,
                                    mauris gravida rutrum</p>
                            </div>
                        </div>
                        <div class="single-goal">
                            <img src="assets/images/business-goal/icon/02.svg" alt="business_Icone" class="thumb">
                            <div class="goal-wrapper">
                                <h6 class="title">24/7 Customer Support</h6>
                                <p class="disc">Fusce condimentum mattis placerat odio donec lacus porta torquent,
                                    mauris gravida rutrum</p>
                            </div>
                        </div>
                        <div class="goal-button-wrapper mt--70">
                            <a href="{{ route('contactPage') }}" class="rts-btn btn-primary color-h-black">Contact
                                Us</a>
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

<!-- rts-counter up area start -->
<div class="rts-counter-up-area rts-section-gap counter-bg">
    <div class="container">
        <div class="row">
            <!-- counter up area -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="single-counter">
                    <img src="assets/images/counterup/icon/01.svg" alt="Business_counter">
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
                    <img src="assets/images/counterup/icon/02.svg" alt="Business_counter">
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
                    <img src="assets/images/counterup/icon/03.svg" alt="Business_counter">
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
                    <img src="assets/images/counterup/icon/04.svg" alt="Business_counter">
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

<!-- start gallery section -->
<div class="rts-gallery-area rts-section-gap gallery-bg bg_image">
    <div class="container">
        <div class="row">
            <div class="rts-title-area gallery text-start pl_sm--20">
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
                                        <img src="assets/images/gallery/gallery-01.jpg" alt="business-images">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                                    <div class="bg-right-gallery">
                                        <div class="icon">
                                            <img src="assets/images/gallery/icon/01.svg" alt="Business-gallery">
                                        </div>
                                        <a href="#">
                                            <h4 class="title">Pro Business Solution</h4>
                                        </a>
                                        <span>Case Study, Growth</span>
                                        <p class="disc">Ornare etiam laoreet dictumst nisl quisque scelerisque cras
                                            ut porta interdum purus mattis iaculis litora turpis torquent posuere.
                                        </p>
                                        <a class="rts-btn btn-primary" href="{{ route('portfolioDetails') }}">View
                                            Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row g-5 w-g-100">
                                <div class="col-lg-7">
                                    <div class="thumbnail-gallery">
                                        <img src="assets/images/gallery/gallery-02.jpg" alt="business-images">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="bg-right-gallery">
                                        <div class="icon">
                                            <img src="assets/images/gallery/icon/01.svg" alt="Business-gallery">
                                        </div>
                                        <a href="#">
                                            <h4 class="title">Finbiz Pro Business</h4>
                                        </a>
                                        <span>Case Study, Growth</span>
                                        <p class="disc">In the literal sense, the term “Business” means the state of
                                            being busy. But it is a very wide connotation of business.</p>
                                        <a class="rts-btn btn-primary" href="{{ route('portfolioDetails') }}">View
                                            Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row g-5 w-g-100">
                                <div class="col-lg-7">
                                    <div class="thumbnail-gallery">
                                        <img src="assets/images/gallery/gallery-03.jpg" alt="business-images">
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="bg-right-gallery">
                                        <div class="icon">
                                            <img src="assets/images/gallery/icon/01.svg" alt="Business-gallery">
                                        </div>
                                        <a href="#">
                                            <h4 class="title">Pro Solution Business</h4>
                                        </a>
                                        <span>Case Study, Growth</span>
                                        <p class="disc">But a very wide of business because it
                                            covers every human activity. Business is really concerned with the
                                            production.
                                        </p>
                                        <a class="rts-btn btn-primary" href="{{ route('portfolioDetails') }}">View
                                            Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- start gallery section -->

<!-- start trusted client section -->
<div class="rts-trusted-client rts-section-gapBottom">
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
                <a href="#"><img src="assets/images/client/01.png" alt="business_finbiz"></a>
                <a href="#"><img src="assets/images/client/02.png" alt="business_finbiz"></a>
                <a href="#"><img src="assets/images/client/03.png" alt="business_finbiz"></a>
                <a href="#"><img src="assets/images/client/04.png" alt="business_finbiz"></a>
                <a href="#"><img src="assets/images/client/05.png" alt="business_finbiz"></a>
                <a href="#"><img src="assets/images/client/06.png" alt="business_finbiz"></a>
            </div>
        </div>
    </div>
</div>
<!-- end trusted client section -->

<!-- start team section -->
<div class="rts-team-area rts-section-gap bg-team">
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
                                    <img src="assets/images/team/tm/01.jpg" alt="Business_Team_single">
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
                                    <img src="assets/images/team/tm/02.jpg" alt="Business_Team_single">
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
                                    <img src="assets/images/team/tm/03.jpg" alt="Business_Team_single">
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
                                    <img src="assets/images/team/tm/04.jpg" alt="Business_Team_single">
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

<!-- rts features area start -->
<div class="rts-feature-area rts-section-gap">
    <div class="container-fluid padding-controler plr--120">
        <div class="row bg-white-feature  pt--120 pb--120">
            <div class="col-xl-6 col-lg-12">
                <div class="feature-left-area">
                    <img src="assets/images/feature/01.png" alt="">
                </div>
            </div>
            <div class="col-xl-6 col-lg-12">
                <div class="rts-title-area feature text-start pl--30 pl_sm--0">
                    <p class="pre-title">
                        Boost Your Business Today
                    </p>
                    <h2 class="title feature-title">Most Reliable Efficient <br>
                        Consulting Agency</h2>
                    <p>Porttitor ornare fermentum aliquam pharetra ut facilisis gravida risus suscipit feugiat fusce
                        conubia ridiculus tristique solving parturient natoque vulputate risu hasellus quam
                        tincidunt posuere aliquam accumsan</p>

                </div>

                <div class="feature-one-wrapper pl--30 mt--40 pl_sm--0">
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Fast Growing Sells</p>
                    </div>
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>24/7 Quality Services</p>
                    </div>
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Expert Members</p>
                    </div>
                    <div class="single-feature-one">
                        <i class="fal fa-check"></i>
                        <p>Best Quality Services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts features area end -->

<!-- start client feed back section -->
<div class="rts-client-feedback">
    <div class="container">
        <div class="row">
            <!-- start testimonials area -->
            <div class="col-lg-7">
                <div class="rts-title-area reviews text-start pl--30 pt--70">
                    <p class="pre-title">
                        Our Testimonials
                    </p>
                    <h2 class="title">Client’s Feedbacks</h2>

                    <!-- swiper area start -->
                    <div class="swiper mySwipertestimonial">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-inner">
                                    <p class="disc text-start">
                                        “Consectetur adipiscing elit velit porta sapien purus erat nec, a ornare
                                        laoreet sem gravida accumsan in commodo aliquet nascetur maecenas. Sem
                                        tempus hendrerit diam mauris leo magna sociosqu viverra, accumsan massa
                                        tristique egestas cum sodales hac lacinia feugiat scelerisque porttitor”
                                    </p>
                                    <div class="testimonial-bottom-one">
                                        <div class="thumbnail">
                                            <img src="assets/images/testimonials/02.png" alt="business-testimonials">
                                        </div>
                                        <div class="details">
                                            <a href="#">
                                                <h5 class="title">David Smith</h5>
                                            </a>
                                            <span>JHKL Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-inner">
                                    <p class="disc text-start">
                                        “Consectetur adipiscing elit velit porta sapien purus erat nec, a ornare
                                        laoreet sem gravida accumsan in commodo aliquet nascetur maecenas. Sem
                                        tempus hendrerit diam mauris leo magna sociosqu viverra, accumsan massa
                                        tristique egestas cum sodales hac lacinia feugiat scelerisque porttitor”
                                    </p>
                                    <div class="testimonial-bottom-one">
                                        <div class="thumbnail">
                                            <img src="assets/images/testimonials/02.png" alt="business-testimonials">
                                        </div>
                                        <div class="details">
                                            <a href="#">
                                                <h5 class="title">David Smith</h5>
                                            </a>
                                            <span>JHKL Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-inner">
                                    <p class="disc text-start">
                                        “Consectetur adipiscing elit velit porta sapien purus erat nec, a ornare
                                        laoreet sem gravida accumsan in commodo aliquet nascetur maecenas. Sem
                                        tempus hendrerit diam mauris leo magna sociosqu viverra, accumsan massa
                                        tristique egestas cum sodales hac lacinia feugiat scelerisque porttitor”
                                    </p>
                                    <div class="testimonial-bottom-one">
                                        <div class="thumbnail">
                                            <img src="assets/images/testimonials/02.png" alt="business-testimonials">
                                        </div>
                                        <div class="details">
                                            <a href="#">
                                                <h5 class="title">David Smith</h5>
                                            </a>
                                            <span>JHKL Owner</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- swiper area end -->
                </div>
            </div>
            <!-- end testimonials are -->
            <!-- images area -->
            <div class="col-lg-5">
                <div class="rts-test-one-image-inner">
                    <img src="assets/images/testimonials/01.png" alt="business_testimobials">
                </div>
            </div>
            <!-- image area end -->
        </div>
    </div>
</div>
<!-- start client feed back section End -->

<!-- blog area start -->
<div class="rts-blog-area rts-section-gap bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-area text-center">
                    <span>Blog Posts</span>
                    <h2 class="title">News & Updates</h2>
                </div>
            </div>
        </div>
        <div class="g-5 mt--20">
            <div class="swiper mySwiperh1_blog">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="single-blog-one-wrapper">
                            <div class="thumbnail">
                                <img src="assets/images/blog/01.jpg" alt="business_Blog">
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
                                <a class="rts-read-more btn-primary" href="{{ route('blogDetailsPage') }}"><i
                                        class="far fa-arrow-right"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-blog-one-wrapper">
                            <div class="thumbnail">
                                <img src="assets/images/blog/02.jpg" alt="business_Blog">
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
                                <a class="rts-read-more btn-primary" href="{{ route('blogDetailsPage') }}"><i
                                        class="far fa-arrow-right"></i>Read
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="single-blog-one-wrapper">
                            <div class="thumbnail">
                                <img src="assets/images/blog/03.jpg" alt="business_Blog">
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
                                <a class="rts-read-more btn-primary" href="{{ route('blogDetailsPage') }}"><i
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

<!-- contact area start -->
<div class="rts-contact-area contact-one">
    <div class="container">
        <div class="row align-items-center g-0">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="contact-image-one">
                    <img src="assets/images/contact/01.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="contact-form-area-one">
                    <div class="rts-title-area contact text-start">
                        <p class="pre-title">
                            Make An Appointment
                        </p>
                        <h2 class="title">Request a free quote</h2>
                    </div>
                    <div id="form-messages"></div>
                    <form id="contact-form" action="mailer.php" method="post">
                        <div class="name-email">
                            <input type="text" placeholder="Your Name" name="name" required>
                            <input type="email" placeholder="Email Address" name="email" required>
                        </div>
                        <input type="text" placeholder="Business Topic" name="subject">
                        <textarea placeholder="Type Your Message" name="message"></textarea>
                        <button type="submit" class="rts-btn btn-primary">Submit Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->

<!-- map area start -->
<div class="rts-map-area bg-light-white">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- map area left -->
                <div class="mapdetails-inner-one">
                    <div class="left-area single-wized">
                        <h5 class="title">Get in touch</h5>
                        <div class="details">
                            <p>Work and general inquiries</p>
                            <a class="number" href="#">+3509.120-8605</a>

                            <p class="time-header">
                                Assistance hours:
                            </p>
                            <p class="time">
                                Monday – Friday <br> 6 am to 8 pm EST
                            </p>
                        </div>
                    </div>
                    <div class="right-area single-wized">
                        <h5 class="title">Post Address</h5>
                        <div class="details">
                            <p>Service Office</p>
                            <a href="#">786 Dortans Ave, Otam Sites, <br>
                                CA 36108, United States</a>

                            <p class="headoffice">
                                Head Office
                            </p>
                            <p class="office">142 Drive Lane. USA</p>
                        </div>
                    </div>
                </div>
                <!-- map area right -->
            </div>
            <div class="col-lg-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14602.288851207937!2d90.47855065!3d23.798243149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1663151706353!5m2!1sen!2sbd"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
</div>
<!-- map area end -->
<!-- rts footer area start -->
<div class="rts-footer-area footer-one rts-section-gapTop bg-footer-one">
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
                        <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
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
                        <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
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
                        <img src="assets/images/footer/under-title.png" alt="finbiz_footer">
                    </div>
                    <div class="post-wrapper">
                        <!-- single post -->
                        <div class="single-footer-post mb--30">
                            <div class="left-thumbnail">
                                <img src="assets/images/footer/post/01.png" alt="finbiz_business-post">
                            </div>
                            <div class="post-right">
                                <p> <i class="fal fa-clock"></i> 15th April, 2022</p>
                                <a href="{{ route('blogDetailsPage') }}">
                                    <h6 class="title">Best Business Ideas For
                                        Getting Solution</h6>
                                </a>
                                <a class="red-more" href="{{ route('blogDetailsPage') }}">Read More<i
                                        class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- single post End -->
                        <!-- single post -->
                        <div class="single-footer-post">
                            <div class="left-thumbnail">
                                <img src="assets/images/footer/post/02.png" alt="finbiz_business-post">
                            </div>
                            <div class="post-right">
                                <p> <i class="fal fa-clock"></i> 15th April, 2022</p>
                                <a href="{{ route('blogDetailsPage') }}">
                                    <h6 class="title">Best Business Ideas For
                                        Getting Solution</h6>
                                </a>
                                <a class="red-more" href="{{ route('blogDetailsPage') }}">Read More<i
                                        class="far fa-arrow-right"></i></a>
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
</div>
<!-- rts footer area end -->
@endsection
