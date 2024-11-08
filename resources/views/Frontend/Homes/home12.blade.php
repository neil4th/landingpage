@extends('Frontend.Layouts.app')

@section('title')
    Home Eleven (Business Consultant)
@endsection

@section('content')

 <!-- header area start -->
 <div class="header-twelve header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-wrapper-12">
                        <a href="{{ route('home') }}" class="logo-area">
                            <img src="{{ asset('assets/images/logo/logo-9.svg') }}" alt="logo">
                        </a>
                        <nav class="nav-main mainmenu-nav d-none d-xl-block">
                            <ul class="mainmenu">
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Home</a>
                                    <ul class="submenu menu-link1">
                                        <li class="menu-item">
                                            <a class="tag" href="#">Multipages</a>
                                            <ul>
                                            <li><a href="{{ route('home') }}">Main Home</a></li>
                                            <li><a href="{{ route('consulting') }}">Consulting Home</a></li>
                                            <li><a href="{{ route('corporate') }}">Corporate Home</a></li>
                                            <li><a href="{{ route('insurance') }}">Insurance Home</a></li>
                                            <li><a href="{{ route('marketing') }}">Marketing Home</a></li>
                                            <li><a href="{{ route('finance') }}">Home finance</a></li>
                                            <li><a href="{{ route('humanResource') }}">Human Resources</a></li>
                                            <li><a href="{{ route('itsolution') }}">IT Solutions</a></li>
                                            <li><a href="{{ route('modernagency') }}">Modern Agency</a></li>
                                            <li><a href="{{ route('stratupAgency') }}">Startup Agency</a></li>
                                            <li><a href="{{ route('brandingagency') }}">Branding Agency</a></li>
                                            <li><a href="{{ route('businessagency') }}">Business Agency</a></li>
                                            <li><a href="{{ route('businessmanagement') }}">Business Management</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="tag" href="#">Onepages</a>
                                            <ul>
                                            <li><a href="{{ route('main') }}">Main Home</a></li>
                                            <li><a href="{{ route('OnePageConsulting') }}">Consulting Home</a></li>
                                            <li><a href="{{ route('OnePageCorporate') }}">Corporate Home</a></li>
                                            <li><a href="{{ route('OnePageInsurance') }}">Insurance Home</a></li>
                                            <li><a href="{{ route('OnePageMarketing') }}">Marketing Home</a></li>
                                            <li><a href="{{ route('OnePageFinance') }}">Finance Home</a></li>
                                            <li><a href="{{ route('OnePageHumanResource') }}">Human resource</a></li>
                                            <li><a href="{{ route('OnePageItsolution') }}">IT Solutions</a></li>
                                            <li><a href="{{ route('OnePageModernAgency') }}">Modern Agency</a></li>
                                            <li><a href="{{ route('OnePageStratupAgency') }}">Startup Agency</a></li>
                                            <li><a href="{{ route('OnePageBrandingAgency') }}">Branding Agency</a></li>
                                            <li><a href="{{ route('OnePageBusinessAgency') }}">Business Agency</a></li>
                                            <li><a href="{{ route('OnePageBusinessManagement') }}">Business Management</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Services</a>
                                    <ul class="submenu menu-link3">
                                        <li class="sub-droupdown">
                                            <a class="sub-menu-link" href="#">Our Service</a>
                                            <ul class="submenu third-lvl">
                                            <li><a href ="{{ route('ourservicePage') }}">Service 1</a></li>
                                            <li><a href ="{{ route('service2Page') }}">Service 2</a></li>
                                            <li><a href ="{{ route('service3Page') }}">Service 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('serviceDetailsPage') }}">Service Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-droupdown">
                                    <a class="nav-link" href="#">Pages</a>
                                    <ul class="submenu menu-link">
                                        <li class="menu-item">
                                            <a class="tag" href="#">Pages</a>
                                            <ul>
                                            <li><a href ="{{ route('appoitment') }}">Appoinment</a></li>
                                            <li><a href ="{{ route('aboutPage') }}">About Us</a></li>
                                            <li><a href ="{{ route('pricePlans') }}">Price Plans</a></li>
                                            <li><a href ="{{ route('ourservicePage') }}">Our Services</a></li>
                                            <li><a href ="{{ route('testimonialStyle') }}">Testimonial</a></li>
                                            <li><a href ="{{ route('errorPage') }}">404 Page</a></li>
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
                                    <li><a href ="{{ route('blogPage') }}">Blog List</a></li>
                                    <li><a href ="{{ route('blogGridPage') }}">Blog Grid</a></li>
                                    <li><a href ="{{ route('blogDetailsPage') }}">Blog Details</a></li>
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
                                            <li><a href ="{{ route('blogGridPage') }}">Blog Grid</a></li>
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
                        <div class="header-right">
                            <button id="search" class="rts-btn"><i class="far fa-search"></i></button>
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
    <!-- header area end -->


    <div class="swiper-banner-main-wrapper-13">
        <div class="swiper mySwiper-13">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area rts-section-gap banner-bg-11 bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <!-- rts banner content area start -->
                                    <div class="rts-banner-twelve-area">
                                        <div class="pre-title-area">
                                            <img src="{{ asset('assets/images/banner/shape/09.png') }}" alt="banner_image">
                                            <span>Business Success Starts Here</span>
                                        </div>
                                        <h1 class="title-main">
                                            Strategic Partner <br>
                                            Business Growth
                                        </h1>
                                        <p class="disc">
                                            Maecenas quis integer aenean nisl, viverra morbi magna amet, viverra. Sollicitudin posuere scelerisque urna, urna. At vestibulum fringilla.
                                        </p>
                                        <a href="#" class="rts-btn btn-primary btn-primary-4 six header-one-btn quote-btn">Book a Meeting</a>
                                    </div>
                                    <!-- rts banner content area end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area rts-section-gap banner-bg-12 bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <!-- rts banner content area start -->
                                    <div class="rts-banner-twelve-area">
                                        <div class="pre-title-area">
                                            <img src="{{ asset('assets/images/banner/shape/09.png') }}" alt="banner_image">
                                            <span>Business Success Starts Here</span>
                                        </div>
                                        <h1 class="title-main">
                                            Strategic Partner <br>
                                            Business Growth
                                        </h1>
                                        <p class="disc">
                                            Maecenas quis integer aenean nisl, viverra morbi magna amet, viverra. Sollicitudin posuere scelerisque urna, urna. At vestibulum fringilla.
                                        </p>
                                        <a href="#" class="rts-btn btn-primary btn-primary-4 six header-one-btn quote-btn">Book a Meeting</a>
                                    </div>
                                    <!-- rts banner content area end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
                <div class="swiper-slide">
                    <!-- rts banner area start -->
                    <div class="rts-banner-area rts-section-gap banner-bg-13 bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <!-- rts banner content area start -->
                                    <div class="rts-banner-twelve-area">
                                        <div class="pre-title-area">
                                            <img src="{{ asset('assets/images/banner/shape/09.png') }}" alt="banner_image">
                                            <span>Business Success Starts Here</span>
                                        </div>
                                        <h1 class="title-main">
                                            Strategic Partner <br>
                                            Business Growth
                                        </h1>
                                        <p class="disc">
                                            Maecenas quis integer aenean nisl, viverra morbi magna amet, viverra. Sollicitudin posuere scelerisque urna, urna. At vestibulum fringilla.
                                        </p>
                                        <a href="#" class="rts-btn btn-primary btn-primary-4 six header-one-btn quote-btn">Book a Meeting</a>
                                    </div>
                                    <!-- rts banner content area end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- rts banner area end -->
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="left-side-information">
            <div class="email-area">
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <a href="#">info@finbiz.com</a>
            </div>
            <div class="language-area">
                <ul>
                    <li><a href="#">en.</a></li>
                    <li><a href="#">fr.</a></li>
                    <li><a href="#">ge.</a></li>
                </ul>
            </div>
        </div>
    </div>


    <!-- rts about area start -->
    <div class="rts-about-area-start rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-left-content-area-12">
                        <div class="title-wrapper-twelve center">
                            <span class="pre-title">About Business</span>
                            <h2 class="title">
                                Smart and effective
                                business agency.
                            </h2>
                        </div>
                        <p class="disc">
                            we believe in the power of collaboration and personalized solutions. By understanding our clients' unique needs and goals, we tailor our approach to deliver strategic insights, creative solutions.
                        </p>
                        <div class="business-progress-area">
                            <div class="single-progress-circle">
                                <svg class="radial-progress" data-countervalue="85" viewBox="0 0 80 80">
                                    <circle class="bar-static" cx="40" cy="40" r="35"></circle>
                                    <circle class="bar--animated" cx="40" cy="40" r="35" style="stroke-dashoffset: 217.8;"></circle>
                                    <text class="countervalue start" x="50%" y="50%" transform="matrix(0, 1, -1, 0, 80, 0)">85</text>
                                </svg>
                            </div>
                            <div class="right-title">
                                <h6 class="title">Business Progress</h6>
                                <p class="disc">
                                    Finbiz Planning for business growth in 2024 involves considering various
                                </p>
                            </div>
                        </div>
                        <div class="button-area-about-12">
                            <a href="#" class="rts-btn btn-primary btn-primary-4 six header-one-btn quote-btn">About Us</a>
                            <div class="call-to-action">
                                <span>Call Us Anytime!</span>
                                <a href="#">+(125) 2153-2158</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="image-area-about-12">
                        <div class="thumbnail-large">
                            <img src="{{ asset('assets/images/about/01.jpg') }}" alt="">
                        </div>
                        <div class="thumbnail-small">
                            <img src="{{ asset('assets/images/about/02.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about area end -->


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


    <!-- service area start -->
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
    <!-- service area end -->

    <!-- easy steps area start -->
    <div class="easy-steps-area rts-section-gap bg-yello-light">
        <div class="container">
            <div class="row">
                <div class="text-center title-area-nine">
                    <p class="pre-title">
                        How We Works
                    </p>
                    <h2 class="title">Easy 4 Steps To Work</h2>
                </div>
            </div>
            <div class="row mt--50 g-5">
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single steps area start -->
                    <div class="single-steps-area-nine">
                        <div class="icon-area">
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                                <path d="M18.0536 12.2099C17.9042 12.6697 18.0512 13.1625 18.428 13.4654L21.7831 16.1621L20.6538 20.3159C20.5271 20.7823 20.6978 21.2673 21.0891 21.5519C21.4805 21.8359 21.9943 21.8484 22.3988 21.5837L26.0003 19.2262L29.6018 21.5838C29.796 21.7109 30.0152 21.774 30.2341 21.774C30.4713 21.774 30.7081 21.6998 30.9113 21.5519C31.3028 21.2677 31.4736 20.7823 31.3466 20.3159L30.2173 16.1622L33.5722 13.4656C33.9493 13.1628 34.0963 12.6699 33.9468 12.2099C33.7974 11.7498 33.3888 11.4375 32.9058 11.4142L28.6065 11.2046L27.0786 7.18045C26.9071 6.7284 26.4837 6.43621 26.0002 6.43621C25.5166 6.43621 25.0932 6.7283 24.9218 7.18035L23.3938 11.2047L19.0948 11.4142C18.6116 11.4375 18.203 11.7498 18.0536 12.2099ZM23.7812 12.8126C24.2394 12.7902 24.6407 12.4987 24.8033 12.0699L26 8.91788L27.1968 12.0702C27.3597 12.4989 27.7611 12.7902 28.2189 12.8126L31.5864 12.9768L28.9584 15.089C28.6008 15.3765 28.4477 15.8483 28.568 16.2907L29.4525 19.5441L26.6315 17.6974C26.4397 17.5719 26.2198 17.5091 25.9999 17.5091C25.7801 17.5091 25.56 17.572 25.368 17.6975L22.5473 19.5441L23.4318 16.2909C23.5522 15.8482 23.399 15.3763 23.0413 15.089L20.4134 12.9769L23.7812 12.8126ZM25.1876 3.79416V0.812498C25.1876 0.363796 25.5514 0 26 0C26.4487 0 26.8125 0.363796 26.8125 0.812498V3.79416C26.8125 4.24287 26.4487 4.60666 26 4.60666C25.5514 4.60666 25.1876 4.24287 25.1876 3.79416ZM30.1355 8.60801C29.8353 8.27459 29.8622 7.76078 30.1956 7.46056L33.5181 4.46874C33.8517 4.16842 34.3654 4.19534 34.6657 4.52887C34.9659 4.8623 34.939 5.3761 34.6055 5.67632L31.2829 8.66814C31.1276 8.80799 30.9332 8.87685 30.7395 8.87685C30.5173 8.87685 30.2959 8.78626 30.1355 8.60801ZM17.3344 4.52887C17.6346 4.19534 18.1483 4.16842 18.482 4.46874L21.8046 7.46056C22.138 7.76078 22.1649 8.27459 21.8647 8.60801C21.7043 8.78615 21.4829 8.87685 21.2606 8.87685C21.067 8.87685 20.8726 8.80799 20.7172 8.66814L17.3946 5.67632C17.061 5.3761 17.0342 4.8623 17.3344 4.52887ZM36.4236 13.4654L39.7786 16.1621L38.6494 20.3159C38.5226 20.7823 38.6933 21.2673 39.0847 21.5519C39.4758 21.8359 39.9897 21.8483 40.3944 21.5837L43.9958 19.2262L47.5973 21.5838C47.7915 21.7109 48.0108 21.774 48.2296 21.774C48.4669 21.774 48.7036 21.6998 48.9069 21.5519C49.2982 21.2679 49.469 20.7827 49.3421 20.3159L48.2129 16.1622L51.5677 13.4656C51.9447 13.1629 52.0918 12.67 51.9423 12.2099C51.7929 11.7498 51.3842 11.4375 50.9014 11.4142L46.602 11.2046L45.0743 7.18045C44.9027 6.7284 44.4793 6.43621 43.9958 6.43621C43.5122 6.43621 43.0888 6.7283 42.9172 7.18035L41.3895 11.2046L37.0904 11.4141C36.6072 11.4374 36.1985 11.7498 36.0491 12.2099C35.8996 12.6699 36.0467 13.1628 36.4236 13.4654ZM41.7766 12.8126C42.235 12.7902 42.6363 12.4987 42.799 12.0698L43.9957 8.91778L45.1923 12.0697C45.3551 12.4987 45.7565 12.7902 46.2146 12.8125L49.582 12.9767L46.9544 15.0887C46.5966 15.3761 46.4432 15.848 46.5637 16.2906L47.4481 19.544L44.6272 17.6973C44.4353 17.5718 44.2154 17.509 43.9955 17.509C43.7755 17.509 43.5555 17.5719 43.3637 17.6974L40.543 19.544L41.4274 16.2908C41.5478 15.8483 41.3946 15.3765 41.0369 15.0889L38.4091 12.9767L41.7766 12.8126ZM0.43227 13.4654L3.78731 16.1621L2.65806 20.3159C2.53132 20.7823 2.70204 21.2673 3.09335 21.5519C3.48476 21.8359 3.99856 21.8484 4.40307 21.5837L8.0045 19.2262L11.606 21.5838C11.8002 21.7109 12.0195 21.774 12.2383 21.774C12.4756 21.774 12.7123 21.6998 12.9155 21.5519C13.3069 21.2679 13.4777 20.7827 13.3508 20.3159L12.2216 16.1622L15.5764 13.4656C15.9532 13.1631 16.1004 12.6703 15.951 12.2094C15.8013 11.7496 15.3926 11.4374 14.9101 11.4141L10.6107 11.2045L9.08297 7.18045C8.91143 6.7284 8.48803 6.43621 8.0045 6.43621C7.52087 6.43621 7.09746 6.7283 6.92593 7.18035L5.39816 11.2046L1.09911 11.4141C0.615993 11.4374 0.207315 11.7498 0.0580212 12.2094C-0.0917801 12.6696 0.0551775 13.1627 0.43227 13.4654ZM5.78531 12.8126C6.24365 12.7902 6.64501 12.4987 6.80771 12.0698L8.0044 8.91778L9.20098 12.0697C9.36378 12.4987 9.76515 12.7902 10.2233 12.8125L13.5907 12.9767L10.963 15.0887C10.6053 15.3761 10.4519 15.848 10.5723 16.2906L11.4568 19.544L8.6359 17.6973C8.44395 17.5718 8.22407 17.509 8.00419 17.509C7.78421 17.509 7.56423 17.5719 7.37239 17.6974L4.55165 19.544L5.43614 16.2908C5.55649 15.8483 5.40334 15.3765 5.04564 15.0889L2.41777 12.9767L5.78531 12.8126ZM51.8716 43.1572C51.2999 41.311 50.129 39.6533 48.5744 38.4892C47.8302 37.9319 47.0198 37.4978 46.1648 37.1905C47.3501 36.2602 48.1139 34.816 48.1139 33.1957C48.1139 30.3961 45.8362 28.1184 43.0367 28.1184C40.2371 28.1184 37.9594 30.3961 37.9594 33.1957C37.9594 34.814 38.7213 36.2568 39.9043 37.1872C38.3188 37.7531 36.9142 38.7474 35.8386 40.0872C35.3359 39.3839 34.756 38.7307 34.104 38.1411C32.7905 36.9531 31.2489 36.0807 29.5887 35.5651C31.3492 34.3979 32.5131 32.3995 32.5131 30.1335C32.5131 26.5423 29.5913 23.6206 26.0002 23.6206C22.409 23.6206 19.4872 26.5423 19.4872 30.1335C19.4872 32.3995 20.651 34.3979 22.4115 35.5651C20.7512 36.0806 19.2096 36.9531 17.8961 38.1411C17.2441 38.7307 16.6642 39.3839 16.1616 40.0872C15.0861 38.7472 13.6815 37.7529 12.096 37.1869C13.2788 36.2565 14.0408 34.8137 14.0408 33.1954C14.0408 30.3958 11.7631 28.1181 8.96363 28.1181C6.16402 28.1181 3.88633 30.3958 3.88633 33.1954C3.88633 34.8156 4.65007 36.2599 5.83527 37.1902C4.98034 37.4975 4.16989 37.9316 3.42555 38.4889C1.87097 39.6529 0.700085 41.3107 0.128402 43.1568C-0.135756 44.0095 0.0105925 44.8749 0.540432 45.5938C1.07017 46.3124 1.85361 46.7081 2.74632 46.7081H13.9782V48.1745C13.9782 50.2839 15.6942 52 17.8036 52H34.1965C36.3058 52 38.0219 50.2839 38.022 48.1745V46.7085H49.2538C50.1466 46.7085 50.93 46.3127 51.4597 45.5942C51.9894 44.8753 52.1358 44.0098 51.8716 43.1572ZM43.0367 29.7434C44.9402 29.7434 46.4889 31.2922 46.4889 33.1957C46.4889 35.0994 44.9402 36.6481 43.0367 36.6481C41.133 36.6481 39.5843 35.0994 39.5843 33.1957C39.5843 31.2922 41.133 29.7434 43.0367 29.7434ZM21.1122 30.1335C21.1122 27.4383 23.3049 25.2455 26.0002 25.2455C28.6954 25.2455 30.8881 27.4383 30.8881 30.1335C30.8881 32.828 28.6968 35.0201 26.0028 35.0215C26.0019 35.0215 26.0009 35.0215 26 35.0215C25.9992 35.0215 25.9983 35.0215 25.9974 35.0215C23.3034 35.02 21.1122 32.8279 21.1122 30.1335ZM8.96363 29.743C10.8672 29.743 12.4159 31.2918 12.4159 33.1953C12.4159 35.099 10.8672 36.6477 8.96363 36.6477C7.05999 36.6477 5.5113 35.099 5.5113 33.1953C5.5113 31.2918 7.05999 29.743 8.96363 29.743ZM14.0837 45.083H2.74642C2.37248 45.083 2.07044 44.9305 1.84853 44.6294C1.62652 44.3284 1.57015 43.9947 1.68075 43.6375C2.67441 40.4286 5.60128 38.2727 8.96363 38.2727C11.507 38.2727 13.8239 39.5016 15.2489 41.5819C14.6855 42.6764 14.291 43.856 14.0837 45.083ZM36.3971 48.1744C36.397 49.3877 35.4098 50.3749 34.1965 50.3749H17.8036C16.5903 50.3749 15.6031 49.3877 15.6031 48.1744V45.9397C16.1914 40.6393 20.6523 36.6478 25.9974 36.6465C25.9983 36.6465 25.9992 36.6466 26.0002 36.6466C26.0011 36.6466 26.002 36.6465 26.0028 36.6465C31.3478 36.6479 35.8086 40.6393 36.3971 45.9397V48.1744ZM50.1517 44.6299C49.9298 44.9309 49.6278 45.0834 49.2538 45.0834H37.9166C37.7092 43.8563 37.3147 42.6767 36.7514 41.5821C38.1765 39.5019 40.4933 38.2731 43.0366 38.2731C46.3989 38.2731 49.3258 40.4291 50.3195 43.638C50.43 43.995 50.3736 44.3287 50.1517 44.6299Z" fill="#E57D61"></path>
                            </svg>
                        </div>
                        <div class="body">
                            <span>01</span>
                            <h4 class="title">Client Discovery</h4>
                            <p class="disc">
                                The agency begins by understanding the client's needs, goals, and
                            </p>
                        </div>
                    </div>
                    <!-- single steps area end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single steps area start -->
                    <div class="single-steps-area-nine">
                        <div class="icon-area">
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="56" viewBox="0 0 52 56" fill="none">
                                <path d="M0.912279 19.8709C0.670328 19.8709 0.438286 19.9661 0.2672 20.1355C0.0961148 20.3049 0 20.5346 0 20.7742V24.3871C0 24.6266 0.0961148 24.8564 0.2672 25.0257C0.438286 25.1951 0.670328 25.2903 0.912279 25.2903H2.90139C3.18748 26.5178 3.6619 27.6946 4.30813 28.7798L2.09174 30.9742C2.00702 31.058 1.93982 31.1576 1.89397 31.2672C1.84812 31.3768 1.82453 31.4942 1.82453 31.6129C1.82453 31.7315 1.84812 31.8489 1.89397 31.9585C1.93982 32.0681 2.00702 32.1677 2.09174 32.2516L4.82858 34.9612C4.9133 35.0451 5.01387 35.1116 5.12455 35.157C5.23524 35.2024 5.35387 35.2258 5.47368 35.2258C5.59348 35.2258 5.71212 35.2024 5.8228 35.157C5.93349 35.1116 6.03406 35.0451 6.11877 34.9612L8.33516 32.7668C9.43121 33.4067 10.6198 33.8764 11.8596 34.1596V37.0322C11.8596 37.2718 11.9557 37.5015 12.1268 37.6709C12.2979 37.8403 12.53 37.9354 12.7719 37.9354H15.9706C16.5549 40.1793 17.6759 42.2511 19.2389 43.9758C20.8019 45.7006 22.7611 47.0277 24.9511 47.8452C27.1411 48.6628 29.4976 48.9466 31.8216 48.6729C34.1457 48.3992 36.3692 47.5759 38.3043 46.2725L47.3278 55.2063C47.582 55.458 47.8837 55.6576 48.2157 55.7937C48.5478 55.9299 48.9037 56 49.2631 56C49.6225 56 49.9784 55.9299 50.3105 55.7937C50.6425 55.6576 50.9442 55.458 51.1984 55.2063C51.4525 54.9547 51.6541 54.656 51.7917 54.3272C51.9292 53.9985 52 53.6461 52 53.2903C52 52.9344 51.9292 52.582 51.7917 52.2533C51.6541 51.9245 51.4525 51.6258 51.1984 51.3742L42.1749 42.4403C44.1754 39.5313 45.0329 35.9987 44.586 32.5073C44.1392 29.016 42.4187 25.8068 39.7486 23.4838H41.0526C41.2945 23.4838 41.5266 23.3887 41.6977 23.2193C41.8687 23.0499 41.9649 22.8202 41.9649 22.5806V19.1326C42.1447 18.6606 44.7017 11.9366 44.7017 11.7419C44.7017 9.75573 44.136 8.18863 43.0204 7.08399C41.9048 5.97935 40.3218 5.41935 38.3157 5.41935C36.3096 5.41935 34.7268 5.97946 33.6111 7.08399C32.4954 8.18852 31.9298 9.75573 31.9298 11.7419C31.9298 11.8502 34.6666 19.1314 34.6666 19.1314V20.5943C33.1948 20.1141 31.6549 19.8699 30.1052 19.8709H26.2916C26.0055 18.6434 25.531 17.4666 24.8848 16.3814L27.1012 14.1871C27.1859 14.1032 27.2531 14.0036 27.299 13.894C27.3448 13.7844 27.3684 13.667 27.3684 13.5484C27.3684 13.4298 27.3448 13.3123 27.299 13.2027C27.2531 13.0931 27.1859 12.9936 27.1012 12.9097L24.3644 10.2C24.2796 10.1161 24.1791 10.0496 24.0684 10.0042C23.9577 9.9588 23.8391 9.93544 23.7193 9.93544C23.5995 9.93544 23.4808 9.9588 23.3701 10.0042C23.2595 10.0496 23.1589 10.1161 23.0742 10.2L20.8578 12.3944C19.7617 11.7546 18.5731 11.2849 17.3333 11.0016V8.12902C17.3333 7.88947 17.2372 7.65973 17.0661 7.49035C16.895 7.32096 16.663 7.2258 16.421 7.2258H12.7719C12.53 7.2258 12.2979 7.32096 12.1268 7.49035C11.9557 7.65973 11.8596 7.88947 11.8596 8.12902V11.0016C10.6198 11.2849 9.43121 11.7546 8.33516 12.3944L6.11877 10.2C6.03406 10.1161 5.93349 10.0496 5.8228 10.0042C5.71212 9.9588 5.59348 9.93544 5.47368 9.93544C5.35387 9.93544 5.23524 9.9588 5.12455 10.0042C5.01387 10.0496 4.9133 10.1161 4.82858 10.2L2.09174 12.9097C2.00702 12.9936 1.93982 13.0931 1.89397 13.2027C1.84812 13.3123 1.82453 13.4298 1.82453 13.5484C1.82453 13.667 1.84812 13.7844 1.89397 13.894C1.93982 14.0036 2.00702 14.1032 2.09174 14.1871L4.30813 16.3814C3.6619 17.4666 3.18748 18.6434 2.90139 19.8709H0.912279ZM49.9082 52.6517C49.9949 52.7351 50.0641 52.8348 50.1115 52.9449C50.159 53.055 50.184 53.1733 50.1848 53.293C50.1857 53.4128 50.1625 53.5315 50.1167 53.6422C50.0708 53.753 50.0031 53.8536 49.9176 53.9383C49.8321 54.0229 49.7305 54.0899 49.6186 54.1353C49.5067 54.1807 49.3868 54.2037 49.2659 54.2028C49.1449 54.2019 49.0254 54.1772 48.9142 54.1302C48.803 54.0832 48.7024 54.0147 48.6181 53.9288L39.7558 45.1547C40.212 44.7557 40.6429 44.3292 41.0458 43.8774L49.9082 52.6517ZM33.7558 11.5821C33.8099 8.69117 35.3434 7.2258 38.3157 7.2258C41.292 7.2258 42.8254 8.69467 42.8758 11.5926C42.6193 12.29 41.3726 15.5697 40.4218 18.0645H36.211L33.7558 11.5821ZM36.4912 19.8709H40.1403V21.6774H37.1649C36.9438 21.5559 36.7192 21.4399 36.4912 21.3293V19.8709ZM42.8771 34.3225C42.8771 36.8231 42.1283 39.2676 40.7253 41.3469C39.3223 43.4262 37.3281 45.047 34.9948 46.0043C32.6616 46.9616 30.094 47.2126 27.6168 46.7253C25.1395 46.2381 22.8638 45.0347 21.0772 43.2671C19.2907 41.4995 18.0736 39.2472 17.5798 36.7948C17.086 34.3425 17.3377 31.8002 18.303 29.4895C19.2683 27.1787 20.904 25.2032 23.0031 23.8127C25.1023 22.4222 27.5708 21.6791 30.0964 21.6774H30.1052C33.4914 21.6812 36.7377 23.0147 39.1321 25.3853C41.5265 27.7559 42.8733 30.97 42.8771 34.3225ZM14.5965 27.0967C13.6943 27.0967 12.8124 26.8319 12.0623 26.3356C11.3122 25.8394 10.7275 25.1341 10.3823 24.3089C10.037 23.4837 9.94672 22.5756 10.1227 21.6996C10.2987 20.8235 10.7332 20.0188 11.3711 19.3872C12.009 18.7556 12.8218 18.3255 13.7066 18.1513C14.5914 17.977 15.5086 18.0664 16.342 18.4083C17.1755 18.7501 17.8879 19.3289 18.3891 20.0716C18.8903 20.8143 19.1579 21.6874 19.1579 22.5806C19.1565 23.778 18.6755 24.9259 17.8204 25.7725C16.9652 26.6192 15.8058 27.0954 14.5965 27.0967ZM4.54897 20.9229C4.79965 19.4376 5.37007 18.0231 6.22152 16.7754C6.34429 16.6014 6.40129 16.3903 6.38252 16.1789C6.36376 15.9675 6.27042 15.7694 6.11889 15.6194L4.02692 13.5484L5.47368 12.116L7.56542 14.1871C7.71698 14.3371 7.91706 14.4295 8.13056 14.4481C8.34406 14.4667 8.55735 14.4102 8.73302 14.2887C9.99329 13.4457 11.422 12.8809 12.9221 12.6327C13.135 12.5975 13.3285 12.4887 13.468 12.3256C13.6076 12.1625 13.6842 11.9557 13.6842 11.7419V9.03225H15.5088V11.7419C15.5087 11.9557 15.5853 12.1625 15.7249 12.3257C15.8644 12.4888 16.0579 12.5976 16.2708 12.6328C17.771 12.881 19.1996 13.4458 20.4599 14.2888C20.6356 14.4103 20.8489 14.4668 21.0624 14.4482C21.2759 14.4296 21.476 14.3372 21.6275 14.1872L23.7193 12.116L25.166 13.5484L23.0742 15.6194C22.9226 15.7694 22.8293 15.9675 22.8105 16.1789C22.7918 16.3903 22.8488 16.6014 22.9715 16.7754C23.8226 18.0226 24.3929 19.4364 24.6437 20.9209C23.3168 21.4535 22.0762 22.1763 20.9617 23.0661C20.9741 22.9054 20.9824 22.7438 20.9824 22.5801C20.983 21.2369 20.5517 19.9285 19.7511 18.8442C18.9504 17.76 17.822 16.9562 16.5291 16.5493C15.2363 16.1424 13.8462 16.1535 12.5602 16.5811C11.2741 17.0086 10.1589 17.8303 9.3761 18.9272C8.59326 20.0242 8.18342 21.3393 8.20592 22.6823C8.22843 24.0252 8.68212 25.3262 9.50128 26.3968C10.3205 27.4674 11.4626 28.2521 12.7622 28.6371C14.0619 29.0222 15.4516 28.9876 16.7301 28.5385C15.9226 30.3619 15.5067 32.3316 15.5088 34.3225C15.5089 34.9264 15.5469 35.5298 15.6228 36.129H13.6842V33.4193C13.6842 33.2055 13.6076 32.9987 13.4681 32.8356C13.3285 32.6724 13.1351 32.5636 12.9221 32.5284C11.422 32.2802 9.99329 31.7154 8.73302 30.8724C8.55735 30.7509 8.34406 30.6945 8.13056 30.713C7.91706 30.7316 7.71698 30.824 7.56542 30.9741L5.47368 33.0453L4.02692 31.6129L6.11877 29.5419C6.27031 29.3918 6.36364 29.1937 6.38241 28.9824C6.40118 28.771 6.34417 28.5598 6.2214 28.3859C5.36995 27.1381 4.79954 25.7236 4.54885 24.2384C4.51331 24.0275 4.4034 23.836 4.23865 23.6979C4.07391 23.5597 3.86502 23.4839 3.64912 23.4838H1.82456V21.6774H3.64912C3.86504 21.6774 4.07396 21.6016 4.23872 21.4634C4.40349 21.3253 4.51342 21.1337 4.54897 20.9229Z" fill="#E87556"></path>
                                <path d="M28.377 5.01538C28.2688 5.22963 28.251 5.47766 28.3275 5.70491C28.404 5.93217 28.5685 6.12003 28.7849 6.22717L30.6095 7.13039C30.7167 7.18454 30.8338 7.21713 30.9538 7.22628C31.0739 7.23543 31.1946 7.22097 31.3089 7.18372C31.4233 7.14647 31.5291 7.08718 31.6202 7.00925C31.7113 6.93133 31.786 6.83632 31.8398 6.7297C31.8937 6.62308 31.9257 6.50697 31.934 6.38805C31.9423 6.26912 31.9267 6.14975 31.8882 6.03681C31.8497 5.92386 31.789 5.81959 31.7096 5.72999C31.6302 5.64039 31.5336 5.56723 31.4255 5.51475L29.601 4.61153C29.3846 4.5044 29.134 4.48676 28.9045 4.56249C28.675 4.63823 28.4852 4.80114 28.377 5.01538Z" fill="#E87556"></path>
                                <path d="M37.4035 0.903225V2.70967C37.4035 2.94922 37.4996 3.17896 37.6707 3.34835C37.8417 3.51774 38.0738 3.6129 38.3157 3.6129C38.5577 3.6129 38.7897 3.51774 38.9608 3.34835C39.1319 3.17896 39.228 2.94922 39.228 2.70967V0.903225C39.228 0.663675 39.1319 0.433936 38.9608 0.264548C38.7897 0.0951609 38.5577 0 38.3157 0C38.0738 0 37.8417 0.0951609 37.6707 0.264548C37.4996 0.433936 37.4035 0.663675 37.4035 0.903225Z" fill="#E87556"></path>
                                <path d="M32.434 0.998628C32.2177 1.10577 32.0531 1.29363 31.9766 1.52088C31.9001 1.74814 31.9179 1.99617 32.0261 2.21042L32.9384 4.01687C32.9914 4.1239 33.0653 4.21948 33.1558 4.2981C33.2463 4.37673 33.3516 4.43684 33.4657 4.47497C33.5798 4.5131 33.7004 4.52849 33.8205 4.52027C33.9406 4.51204 34.0579 4.48036 34.1656 4.42704C34.2732 4.37373 34.3692 4.29983 34.4479 4.20962C34.5266 4.11941 34.5865 4.01467 34.6241 3.90143C34.6617 3.78819 34.6764 3.6687 34.6671 3.54985C34.6579 3.431 34.625 3.31513 34.5703 3.20893L33.658 1.40248C33.5498 1.18824 33.36 1.02533 33.1305 0.949596C32.901 0.873859 32.6504 0.891497 32.434 0.998628Z" fill="#E87556"></path>
                                <path d="M42.9735 1.40248L42.0612 3.20893C42.0065 3.31513 41.9736 3.431 41.9644 3.54985C41.9551 3.6687 41.9697 3.78819 42.0074 3.90143C42.045 4.01467 42.1049 4.11941 42.1836 4.20962C42.2623 4.29983 42.3582 4.37373 42.4659 4.42704C42.5736 4.48036 42.6909 4.51204 42.811 4.52027C42.9311 4.52849 43.0517 4.5131 43.1658 4.47497C43.2798 4.43684 43.3852 4.37673 43.4757 4.2981C43.5662 4.21948 43.64 4.1239 43.6931 4.01687L44.6053 2.21042C44.66 2.10422 44.6929 1.98835 44.7022 1.8695C44.7114 1.75064 44.6968 1.63115 44.6592 1.51792C44.6216 1.40468 44.5617 1.29994 44.483 1.20973C44.4043 1.11951 44.3083 1.04562 44.2006 0.992304C44.0929 0.938988 43.9757 0.907304 43.8555 0.899078C43.7354 0.890853 43.6149 0.90625 43.5008 0.94438C43.3867 0.982511 43.2814 1.04262 43.1909 1.12124C43.1004 1.19987 43.0265 1.29545 42.9735 1.40248Z" fill="#E87556"></path>
                                <path d="M47.0305 4.61153L45.206 5.51475C45.0979 5.56723 45.0013 5.64039 44.9219 5.72999C44.8425 5.81959 44.7818 5.92386 44.7433 6.03681C44.7048 6.14975 44.6892 6.26912 44.6975 6.38805C44.7058 6.50697 44.7378 6.62308 44.7917 6.7297C44.8455 6.83632 44.9202 6.93133 45.0113 7.00925C45.1024 7.08718 45.2082 7.14647 45.3225 7.18372C45.4369 7.22097 45.5576 7.23543 45.6777 7.22628C45.7977 7.21713 45.9147 7.18454 46.022 7.13039L47.8465 6.22717C47.9547 6.17469 48.0512 6.10154 48.1306 6.01193C48.21 5.92233 48.2707 5.81806 48.3092 5.70511C48.3478 5.59217 48.3633 5.4728 48.355 5.35388C48.3467 5.23495 48.3147 5.11884 48.2608 5.01222C48.207 4.9056 48.1324 4.81059 48.0412 4.73267C47.9501 4.65475 47.8443 4.59545 47.73 4.5582C47.6156 4.52095 47.4949 4.50649 47.3749 4.51564C47.2548 4.52479 47.1378 4.55738 47.0305 4.61153Z" fill="#E87556"></path>
                                <path d="M19.1579 34.3225C19.1579 36.4662 19.7999 38.5618 21.0028 40.3442C22.2057 42.1266 23.9155 43.5158 25.9159 44.3362C27.9162 45.1565 30.1174 45.3712 32.2409 44.953C34.3645 44.5348 36.3152 43.5025 37.8462 41.9867C39.3772 40.4708 40.4198 38.5396 40.8422 36.4371C41.2646 34.3346 41.0478 32.1553 40.2193 30.1747C39.3907 28.1942 37.9875 26.5015 36.1872 25.3105C34.387 24.1195 32.2704 23.4838 30.1052 23.4838C27.2028 23.4871 24.4202 24.63 22.3679 26.662C20.3156 28.6939 19.1611 31.4489 19.1579 34.3225ZM39.228 34.3225C39.228 36.1089 38.693 37.8552 37.6906 39.3406C36.6881 40.8259 35.2633 41.9836 33.5964 42.6672C31.9294 43.3509 30.0951 43.5297 28.3255 43.1812C26.5558 42.8327 24.9303 41.9725 23.6544 40.7093C22.3786 39.4461 21.5097 37.8367 21.1577 36.0846C20.8057 34.3326 20.9864 32.5165 21.6769 30.866C22.3673 29.2156 23.5366 27.805 25.0369 26.8125C26.5371 25.82 28.3009 25.2903 30.1052 25.2903C32.5239 25.293 34.8427 26.2455 36.553 27.9388C38.2632 29.6321 39.2253 31.9279 39.228 34.3225Z" fill="#E87556"></path>
                                <path d="M24.6315 34.3225C24.6315 34.083 24.5354 33.8532 24.3643 33.6839C24.1933 33.5145 23.9612 33.4193 23.7193 33.4193C23.4773 33.4193 23.2453 33.5145 23.0742 33.6839C22.9031 33.8532 22.807 34.083 22.807 34.3225C22.8092 36.2383 23.5788 38.0749 24.947 39.4296C26.3152 40.7842 28.1703 41.5462 30.1052 41.5483C30.3472 41.5483 30.5792 41.4532 30.7503 41.2838C30.9214 41.1144 31.0175 40.8847 31.0175 40.6451C31.0175 40.4056 30.9214 40.1758 30.7503 40.0064C30.5792 39.837 30.3472 39.7419 30.1052 39.7419C28.654 39.7403 27.2627 39.1688 26.2365 38.1528C25.2104 37.1369 24.6331 35.7594 24.6315 34.3225Z" fill="#E87556"></path>
                            </svg>
                        </div>
                        <div class="body">
                            <span>02</span>
                            <h4 class="title">Strategy Development</h4>
                            <p class="disc">
                                The agency begins by understanding the client's needs, goals, and
                            </p>
                        </div>
                    </div>
                    <!-- single steps area end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single steps area start -->
                    <div class="single-steps-area-nine">
                        <div class="icon-area">
                            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="50" viewBox="0 0 52 50" fill="none">
                                <path d="M6.95259 4.36346C6.6972 4.36346 6.45227 4.46585 6.27168 4.6481C6.09108 4.83035 5.98963 5.07754 5.98963 5.33528C5.98963 5.59302 6.09108 5.8402 6.27168 6.02246C6.45227 6.20471 6.6972 6.30709 6.95259 6.30709C7.20799 6.30709 7.45292 6.20471 7.63351 6.02246C7.8141 5.8402 7.91556 5.59302 7.91556 5.33528C7.91556 5.07754 7.8141 4.83035 7.63351 4.6481C7.45292 4.46585 7.20799 4.36346 6.95259 4.36346Z" fill="#E57D61"></path>
                                <path d="M10.4867 4.36346C10.2962 4.36346 10.11 4.42045 9.95167 4.52724C9.79331 4.63402 9.66989 4.7858 9.597 4.96338C9.52412 5.14095 9.50505 5.33636 9.54221 5.52487C9.57936 5.71338 9.67108 5.88654 9.80575 6.02246C9.94042 6.15837 10.112 6.25092 10.2988 6.28842C10.4856 6.32592 10.6792 6.30667 10.8552 6.23312C11.0311 6.15956 11.1815 6.035 11.2873 5.87519C11.3932 5.71537 11.4496 5.52748 11.4496 5.33528C11.4496 5.07754 11.3482 4.83035 11.1676 4.6481C10.987 4.46585 10.7421 4.36346 10.4867 4.36346Z" fill="#E57D61"></path>
                                <path d="M14.0207 4.36346C13.8303 4.36346 13.6441 4.42045 13.4857 4.52724C13.3274 4.63402 13.204 4.7858 13.1311 4.96338C13.0582 5.14095 13.0391 5.33636 13.0763 5.52487C13.1134 5.71338 13.2052 5.88654 13.3398 6.02246C13.4745 6.15837 13.6461 6.25092 13.8329 6.28842C14.0197 6.32592 14.2133 6.30667 14.3893 6.23312C14.5652 6.15956 14.7156 6.035 14.8214 5.87519C14.9272 5.71537 14.9837 5.52748 14.9837 5.33528C14.9837 5.07754 14.8823 4.83035 14.7017 4.6481C14.5211 4.46585 14.2761 4.36346 14.0207 4.36346Z" fill="#E57D61"></path>
                                <path d="M38.7015 50H42.2933C42.857 49.9974 43.3968 49.7703 43.7954 49.3681C44.1939 48.9659 44.4189 48.4211 44.4215 47.8523V45.967H46.9156C48.2633 45.9644 49.555 45.423 50.508 44.4612C51.461 43.4995 51.9975 42.1959 52 40.8358V5.1312C52 3.77032 51.4643 2.46518 50.5108 1.50289C49.5573 0.540606 48.264 0 46.9156 0H5.08444C3.73597 0 2.44272 0.540606 1.4892 1.50289C0.535681 2.46518 0 3.77032 0 5.1312V40.8358C0.00254523 42.1959 0.539043 43.4995 1.49201 44.4612C2.44498 45.423 3.73675 45.9644 5.08444 45.967H7.57852V47.8523C7.58105 48.4211 7.80608 48.9659 8.20464 49.3681C8.6032 49.7703 9.14303 49.9974 9.70667 50H13.2985C13.5801 49.9999 13.8589 49.9431 14.1184 49.8329C14.378 49.7228 14.6133 49.5615 14.8104 49.3586C15.0035 49.1597 15.1557 48.9242 15.2582 48.6657C15.3606 48.4072 15.4114 48.1307 15.4074 47.8523V45.967H17.2274V47.8523C17.2299 48.4194 17.4536 48.9628 17.8501 49.3647C18.2466 49.7667 18.784 49.9949 19.3459 50H22.9474C23.511 49.9974 24.0509 49.7703 24.4494 49.3681C24.848 48.9659 25.073 48.4211 25.0756 47.8523V45.967H26.8859V47.8523C26.8885 48.4211 27.1135 48.9659 27.512 49.3681C27.9106 49.7703 28.4504 49.9974 29.0141 50H32.6156C32.897 49.9988 33.1754 49.9415 33.4349 49.8314C33.6943 49.7214 33.9296 49.5607 34.1274 49.3586C34.3236 49.1615 34.4784 48.9266 34.5827 48.6678C34.6869 48.409 34.7384 48.1316 34.7341 47.8523V45.967H36.5926V47.8523C36.5951 48.4178 36.8174 48.9597 37.2119 49.3613C37.6063 49.763 38.1412 49.9924 38.7015 50ZM42.4956 47.8523C42.4956 47.9064 42.4743 47.9583 42.4363 47.9966C42.3984 48.0349 42.347 48.0564 42.2933 48.0564H38.7015C38.6479 48.0564 38.5964 48.0349 38.5585 47.9966C38.5206 47.9583 38.4993 47.9064 38.4993 47.8523V24.8591C38.4993 24.805 38.5206 24.753 38.5585 24.7148C38.5964 24.6765 38.6479 24.655 38.7015 24.655H42.2933C42.347 24.655 42.3984 24.6765 42.4363 24.7148C42.4743 24.753 42.4956 24.805 42.4956 24.8591V47.8523ZM13.4815 47.8523C13.483 47.8779 13.4786 47.9036 13.4685 47.9272C13.4585 47.9508 13.4432 47.9718 13.4237 47.9883C13.4055 48.009 13.3832 48.0256 13.3584 48.0373C13.3336 48.049 13.3066 48.0555 13.2793 48.0564H9.70667C9.65303 48.0564 9.6016 48.0349 9.56367 47.9966C9.52575 47.9583 9.50444 47.9064 9.50444 47.8523V40.5442C9.50444 40.4901 9.52575 40.4382 9.56367 40.3999C9.6016 40.3616 9.65303 40.3401 9.70667 40.3401H13.2985C13.3487 40.345 13.3954 40.3686 13.4292 40.4064C13.4631 40.4441 13.4817 40.4933 13.4815 40.5442V47.8523ZM23.1111 47.8523C23.1111 47.9064 23.0898 47.9583 23.0519 47.9966C23.014 48.0349 22.9625 48.0564 22.9089 48.0564H19.3652C19.3132 48.0539 19.2642 48.0313 19.2284 47.9933C19.1925 47.9553 19.1725 47.9048 19.1726 47.8523V32.2157C19.1713 32.1889 19.1753 32.1621 19.1842 32.1369C19.1932 32.1116 19.2071 32.0884 19.2249 32.0685C19.2428 32.0487 19.2644 32.0326 19.2885 32.0211C19.3126 32.0097 19.3386 32.0032 19.3652 32.0019H22.9667C23.0212 32.0044 23.0726 32.0281 23.1103 32.0679C23.148 32.1077 23.1689 32.1607 23.1689 32.2157L23.1111 47.8523ZM32.7407 47.8523C32.7417 47.902 32.7245 47.9504 32.6926 47.9883C32.6743 48.009 32.6521 48.0256 32.6273 48.0373C32.6025 48.049 32.5755 48.0555 32.5481 48.0564H29.0333C28.9797 48.0564 28.9283 48.0349 28.8903 47.9966C28.8524 47.9583 28.8311 47.9064 28.8311 47.8523V37.036C28.8311 36.9818 28.8524 36.9299 28.8903 36.8917C28.9283 36.8534 28.9797 36.8319 29.0333 36.8319H32.6348C32.6609 36.8318 32.6868 36.8372 32.7108 36.8475C32.7348 36.8579 32.7565 36.8731 32.7745 36.8922C32.7925 36.9113 32.8065 36.9339 32.8156 36.9586C32.8247 36.9833 32.8287 37.0096 32.8274 37.036L32.7407 47.8523ZM34.6667 44.0233V37.036C34.6667 36.468 34.4438 35.9232 34.0468 35.5207C33.6497 35.1182 33.1109 34.8908 32.5481 34.8882H29.0333C28.4697 34.8908 27.9299 35.1179 27.5313 35.5201C27.1327 35.9223 26.9077 36.4671 26.9052 37.036V44.0233H25.0948V32.2157C25.0961 31.9329 25.042 31.6526 24.9356 31.3909C24.8292 31.1292 24.6727 30.8913 24.4749 30.6908C24.2772 30.4903 24.0421 30.3313 23.7833 30.2227C23.5245 30.1142 23.247 30.0583 22.9667 30.0583H19.3652C19.0857 30.0596 18.8092 30.1164 18.5515 30.2255C18.2938 30.3346 18.0599 30.4939 17.8632 30.6942C17.6664 30.8946 17.5108 31.132 17.405 31.3931C17.2992 31.6542 17.2454 31.9337 17.2467 32.2157V44.0233H15.4074V40.5442C15.4049 39.9763 15.1795 39.4325 14.7807 39.0318C14.3819 38.6312 13.842 38.4062 13.2793 38.4062H9.70667C9.14391 38.4062 8.60406 38.6312 8.20523 39.0318C7.8064 39.4325 7.58107 39.9763 7.57852 40.5442V44.0525H5.08444C4.66758 44.0512 4.25507 43.9669 3.87054 43.8045C3.48602 43.642 3.13704 43.4045 2.84362 43.1057C2.5502 42.8069 2.3181 42.4526 2.16062 42.063C2.00315 41.6735 1.92339 41.2565 1.92593 40.8358V5.1312C1.92593 4.2858 2.2587 3.47503 2.85103 2.87725C3.44337 2.27947 4.24675 1.94363 5.08444 1.94363H46.9156C47.7533 1.94363 48.5566 2.27947 49.149 2.87725C49.7413 3.47503 50.0741 4.2858 50.0741 5.1312V40.8358C50.0715 41.6804 49.7379 42.4896 49.1462 43.0869C48.5544 43.6841 47.7525 44.0208 46.9156 44.0233H44.4215V24.8591C44.4215 24.2895 44.1973 23.7432 43.7982 23.3404C43.3991 22.9376 42.8578 22.7114 42.2933 22.7114H38.7015C38.1404 22.7165 37.604 22.945 37.2091 23.3473C36.8141 23.7495 36.5926 24.2928 36.5926 24.8591V44.0233H34.6667Z" fill="#E57D61"></path>
                                <path d="M40.5022 18.8241C41.3843 18.819 42.2289 18.4631 42.8526 17.8336C43.4764 17.2041 43.829 16.3518 43.8341 15.4616C43.8315 14.5706 43.4797 13.7168 42.8554 13.0868C42.2311 12.4568 41.3851 12.1017 40.5022 12.0991C39.6186 12.0991 38.7711 12.4534 38.1462 13.084C37.5214 13.7146 37.1704 14.5698 37.1704 15.4616C37.187 16.1272 37.4055 16.7717 37.7963 17.3081L32.0185 24.5384C31.4151 24.3042 30.7583 24.2474 30.1243 24.3747C29.4902 24.502 28.9049 24.8081 28.4363 25.2575C28.4204 25.2888 28.4011 25.3182 28.3785 25.345L24.3533 23.3333C24.4034 23.1651 24.4388 22.9927 24.4593 22.8183C24.4593 21.9265 24.1082 21.0712 23.4834 20.4406C22.8585 19.81 22.0111 19.4558 21.1274 19.4558C20.2437 19.4558 19.3963 19.81 18.7714 20.4406C18.1466 21.0712 17.7956 21.9265 17.7956 22.8183C17.7975 23.2808 17.8959 23.7378 18.0844 24.1594L13.2215 28.3382C12.701 27.9799 12.0891 27.7808 11.4593 27.7648C10.5789 27.7674 9.73539 28.1214 9.1129 28.7497C8.49041 29.3779 8.13958 30.2292 8.13704 31.1176C8.12949 31.5596 8.21096 31.9985 8.37648 32.4078C8.54201 32.817 8.78815 33.1881 9.1 33.4985C9.56591 33.9662 10.1585 34.2844 10.8031 34.4131C11.4478 34.5418 12.1157 34.4752 12.723 34.2218C13.3302 33.9683 13.8497 33.5393 14.2159 32.9887C14.5822 32.4381 14.779 31.7905 14.7815 31.1273C14.7772 30.6692 14.6822 30.2165 14.5022 29.7959L19.3652 25.6171C19.8814 25.978 20.4901 26.1805 21.1178 26.2002C21.5724 26.1968 22.0214 26.0994 22.4372 25.9138C22.8529 25.7283 23.2265 25.4586 23.5348 25.1215L27.56 27.1234C27.5118 27.2954 27.4764 27.4709 27.4541 27.6482C27.4363 28.1824 27.545 28.7132 27.7711 29.1965C27.9972 29.6799 28.3343 30.1019 28.7543 30.4275C29.1743 30.7531 29.6652 30.973 30.1862 31.0689C30.7072 31.1648 31.2434 31.134 31.7503 30.979C32.2572 30.824 32.7201 30.5492 33.1008 30.1776C33.4814 29.8059 33.7688 29.348 33.9391 28.8419C34.1093 28.3358 34.1576 27.796 34.0798 27.2672C34.002 26.7385 33.8005 26.2361 33.4919 25.8018L39.2119 18.5909C39.6226 18.7533 40.0611 18.8326 40.5022 18.8241ZM12.9037 31.1176C12.8966 31.4817 12.7519 31.8293 12.4993 32.0894C12.2306 32.3478 11.8737 32.492 11.5026 32.492C11.1315 32.492 10.7746 32.3478 10.5059 32.0894C10.2499 31.8316 10.1046 31.4826 10.1015 31.1176C10.1002 30.9317 10.1354 30.7474 10.205 30.5754C10.2746 30.4033 10.3772 30.2468 10.507 30.1149C10.6368 29.983 10.7912 29.8783 10.9612 29.8069C11.1312 29.7355 11.3136 29.6987 11.4978 29.6987C11.8582 29.7079 12.202 29.8536 12.4607 30.1069C12.7134 30.367 12.858 30.7146 12.8652 31.0787L12.9037 31.1176ZM21.1852 24.2371C20.8228 24.2283 20.4778 24.0786 20.2222 23.8192C20.0933 23.6927 19.9903 23.5417 19.9193 23.375C19.8482 23.2082 19.8104 23.0289 19.8081 22.8474C19.8146 22.57 19.9016 22.3005 20.0583 22.0724C20.215 21.8443 20.4345 21.6676 20.6897 21.5642C20.9449 21.4607 21.2246 21.4351 21.4941 21.4905C21.7636 21.5458 22.0111 21.6797 22.2059 21.8756C22.4646 22.1324 22.6133 22.4813 22.62 22.8474C22.6175 23.0341 22.5783 23.2185 22.5046 23.3898C22.4309 23.5611 22.3242 23.7159 22.1907 23.8452C22.0572 23.9745 21.8995 24.0757 21.7269 24.143C21.5543 24.2103 21.3702 24.2423 21.1852 24.2371ZM40.5022 14.0428C40.863 14.05 41.2075 14.196 41.4652 14.4509C41.7205 14.71 41.8686 15.0575 41.8793 15.4227C41.8686 15.788 41.7205 16.1355 41.4652 16.3946C41.1966 16.653 40.8397 16.7972 40.4685 16.7972C40.0974 16.7972 39.7405 16.653 39.4719 16.3946C39.2778 16.1979 39.1451 15.9482 39.0902 15.6762C39.0354 15.4042 39.0607 15.122 39.1632 14.8644C39.2657 14.6069 39.4408 14.3853 39.6668 14.2272C39.8929 14.069 40.1599 13.9813 40.4348 13.9747L40.5022 14.0428ZM32.24 27.6482C32.2335 27.9257 32.1466 28.1951 31.9899 28.4232C31.8332 28.6513 31.6136 28.828 31.3584 28.9315C31.1032 29.0349 30.8235 29.0605 30.554 29.0052C30.2846 28.9498 30.0371 28.8159 29.8422 28.62C29.6774 28.4543 29.5558 28.2498 29.4886 28.025C29.4213 27.8001 29.4104 27.562 29.4568 27.3318C29.5032 27.1017 29.6055 26.8868 29.7545 26.7064C29.9035 26.526 30.0946 26.3857 30.3105 26.2982C30.5265 26.2107 30.7606 26.1786 30.9918 26.2049C31.2231 26.2312 31.4443 26.315 31.6355 26.4488C31.8268 26.5826 31.9821 26.7622 32.0876 26.9716C32.1931 27.1809 32.2455 27.4134 32.24 27.6482Z" fill="#E57D61"></path>
                                <path d="M19.6444 6.30709H43.8533C44.1087 6.30709 44.3537 6.20471 44.5343 6.02246C44.7148 5.8402 44.8163 5.59302 44.8163 5.33528C44.8163 5.07754 44.7148 4.83035 44.5343 4.6481C44.3537 4.46585 44.1087 4.36346 43.8533 4.36346H19.6444C19.3891 4.36346 19.1441 4.46585 18.9635 4.6481C18.7829 4.83035 18.6815 5.07754 18.6815 5.33528C18.6815 5.59302 18.7829 5.8402 18.9635 6.02246C19.1441 6.20471 19.3891 6.30709 19.6444 6.30709Z" fill="#E57D61"></path>
                            </svg>
                        </div>
                        <div class="body">
                            <span>03</span>
                            <h4 class="title">Task Implementation</h4>
                            <p class="disc">
                                The agency begins by understanding the client's needs, goals, and
                            </p>
                        </div>
                    </div>
                    <!-- single steps area end -->
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <!-- single steps area start -->
                    <div class="single-steps-area-nine">
                        <div class="icon-area">
                            <svg xmlns="http://www.w3.org/2000/svg" width="51" height="51" viewBox="0 0 51 51" fill="none">
                                <path d="M50.15 3.4H42.5C42.2746 3.4 42.0584 3.48955 41.899 3.64896C41.7396 3.80837 41.65 4.02457 41.65 4.25C41.65 4.47543 41.7396 4.69163 41.899 4.85104C42.0584 5.01045 42.2746 5.1 42.5 5.1H49.3V17H35.7C35.4746 17 35.2584 17.0896 35.099 17.249C34.9396 17.4084 34.85 17.6246 34.85 17.85C34.85 18.0754 34.9396 18.2916 35.099 18.451C35.2584 18.6104 35.4746 18.7 35.7 18.7H50.15C50.3754 18.7 50.5916 18.6104 50.751 18.451C50.9104 18.2916 51 18.0754 51 17.85V4.25C51 4.02457 50.9104 3.80837 50.751 3.64896C50.5916 3.48955 50.3754 3.4 50.15 3.4Z" fill="#E57D61"></path>
                                <path d="M15.3 37.4H8.5V25.5H37.4V33.15C37.4 33.3754 37.4896 33.5916 37.649 33.751C37.8084 33.9104 38.0246 34 38.25 34C38.4754 34 38.6916 33.9104 38.851 33.751C39.0104 33.5916 39.1 33.3754 39.1 33.15V24.65C39.1 24.4246 39.0104 24.2084 38.851 24.049C38.6916 23.8896 38.4754 23.8 38.25 23.8H7.65C7.42457 23.8 7.20837 23.8896 7.04896 24.049C6.88955 24.2084 6.8 24.4246 6.8 24.65V38.25C6.8 38.4754 6.88955 38.6916 7.04896 38.851C7.20837 39.0104 7.42457 39.1 7.65 39.1H15.3C15.5254 39.1 15.7416 39.0104 15.901 38.851C16.0604 38.6916 16.15 38.4754 16.15 38.25C16.15 38.0246 16.0604 37.8084 15.901 37.649C15.7416 37.4896 15.5254 37.4 15.3 37.4Z" fill="#E57D61"></path>
                                <path d="M49.3 35.7H18.7C18.4746 35.7 18.2584 35.7896 18.099 35.949C17.9396 36.1084 17.85 36.3246 17.85 36.55V50.15C17.85 50.3754 17.9396 50.5916 18.099 50.751C18.2584 50.9104 18.4746 51 18.7 51H27.2C27.4254 51 27.6416 50.9104 27.801 50.751C27.9604 50.5916 28.05 50.3754 28.05 50.15C28.05 49.9246 27.9604 49.7084 27.801 49.549C27.6416 49.3896 27.4254 49.3 27.2 49.3H19.55V37.4H48.45V49.3H30.6C30.3746 49.3 30.1584 49.3896 29.999 49.549C29.8396 49.7084 29.75 49.9246 29.75 50.15C29.75 50.3754 29.8396 50.5916 29.999 50.751C30.1584 50.9104 30.3746 51 30.6 51H49.3C49.5254 51 49.7416 50.9104 49.901 50.751C50.0604 50.5916 50.15 50.3754 50.15 50.15V36.55C50.15 36.3246 50.0604 36.1084 49.901 35.949C49.7416 35.7896 49.5254 35.7 49.3 35.7Z" fill="#E57D61"></path>
                                <path d="M4.26955 14.5835C4.06049 14.1868 3.88698 13.7723 3.75105 13.345C3.69678 13.1724 3.58889 13.0217 3.44305 12.9147C3.29721 12.8077 3.12104 12.75 2.94015 12.75H0.85C0.624566 12.75 0.408365 12.8396 0.248959 12.999C0.0895533 13.1584 0 13.3746 0 13.6C0 13.8254 0.0895533 14.0416 0.248959 14.201C0.408365 14.3604 0.624566 14.45 0.85 14.45H2.34005C2.38765 14.5682 2.43695 14.6855 2.4888 14.8036L1.43395 15.8584C1.2746 16.0178 1.18508 16.234 1.18508 16.4594C1.18508 16.6848 1.2746 16.901 1.43395 17.0604L5.03965 20.666C5.19905 20.8254 5.41521 20.9149 5.6406 20.9149C5.86599 20.9149 6.08215 20.8254 6.24155 20.666L7.2964 19.6112C7.41455 19.6631 7.53185 19.7124 7.65 19.76V21.25C7.65 21.4754 7.73955 21.6916 7.89896 21.851C8.05837 22.0104 8.27457 22.1 8.5 22.1H13.6C13.8254 22.1 14.0416 22.0104 14.201 21.851C14.3604 21.6916 14.45 21.4754 14.45 21.25V19.76C14.5682 19.7124 14.6855 19.6631 14.8036 19.6112L15.8584 20.666C16.0178 20.8254 16.234 20.9149 16.4594 20.9149C16.6848 20.9149 16.901 20.8254 17.0604 20.666L19.0264 18.7H32.3C32.5254 18.7 32.7416 18.6104 32.901 18.451C33.0604 18.2916 33.15 18.0754 33.15 17.85C33.15 17.6246 33.0604 17.4084 32.901 17.249C32.7416 17.0896 32.5254 17 32.3 17H20.706C20.8442 16.8396 20.9168 16.633 20.9094 16.4214C20.902 16.2098 20.8151 16.0088 20.666 15.8584L19.6112 14.8036C19.6631 14.6855 19.7124 14.5682 19.76 14.45H21.25C21.4754 14.45 21.6916 14.3604 21.851 14.201C22.0104 14.0416 22.1 13.8254 22.1 13.6V8.5C22.1 8.27457 22.0104 8.05837 21.851 7.89896C21.6916 7.73955 21.4754 7.65 21.25 7.65H19.76C19.7124 7.53185 19.6631 7.41455 19.6112 7.2964L20.666 6.24155C20.8151 6.09119 20.902 5.89017 20.9094 5.67859C20.9168 5.46701 20.8442 5.26041 20.706 5.1H39.1C39.3254 5.1 39.5416 5.01045 39.701 4.85104C39.8604 4.69163 39.95 4.47543 39.95 4.25C39.95 4.02457 39.8604 3.80837 39.701 3.64896C39.5416 3.48955 39.3254 3.4 39.1 3.4H19.0264L17.0604 1.43395C16.901 1.2746 16.6848 1.18508 16.4594 1.18508C16.234 1.18508 16.0178 1.2746 15.8584 1.43395L14.8036 2.4888C14.6855 2.43695 14.5682 2.38765 14.45 2.34005V0.85C14.45 0.624566 14.3604 0.408365 14.201 0.248959C14.0416 0.0895533 13.8254 0 13.6 0H8.5C8.27457 0 8.05837 0.0895533 7.89896 0.248959C7.73955 0.408365 7.65 0.624566 7.65 0.85V2.34005C7.53185 2.38765 7.41455 2.43695 7.2964 2.4888L6.24155 1.43395C6.08215 1.2746 5.86599 1.18508 5.6406 1.18508C5.41521 1.18508 5.19905 1.2746 5.03965 1.43395L1.43395 5.03965C1.2746 5.19905 1.18508 5.41521 1.18508 5.6406C1.18508 5.86599 1.2746 6.08215 1.43395 6.24155L2.4888 7.2964C2.43695 7.41455 2.38765 7.53185 2.34005 7.65H0.85C0.624566 7.65 0.408365 7.73955 0.248959 7.89896C0.0895533 8.05837 0 8.27457 0 8.5V10.2C0 10.4254 0.0895533 10.6416 0.248959 10.801C0.408365 10.9604 0.624566 11.05 0.85 11.05C1.07543 11.05 1.29163 10.9604 1.45104 10.801C1.61045 10.6416 1.7 10.4254 1.7 10.2V9.35H2.94015C3.12104 9.35001 3.29721 9.29232 3.44305 9.18531C3.58889 9.0783 3.69678 8.92756 3.75105 8.755C3.88698 8.32768 4.06049 7.91325 4.26955 7.51655C4.35355 7.35608 4.38409 7.17297 4.35672 6.99392C4.32935 6.81487 4.2455 6.64925 4.1174 6.5212L3.2368 5.6406L5.6406 3.2368L6.5212 4.1174C6.64925 4.2455 6.81487 4.32935 6.99392 4.35672C7.17297 4.38409 7.35608 4.35355 7.51655 4.26955C7.91325 4.06049 8.32768 3.88698 8.755 3.75105C8.92756 3.69678 9.0783 3.58889 9.18531 3.44305C9.29232 3.29721 9.35001 3.12104 9.35 2.94015V1.7H12.75V2.94015C12.75 3.12104 12.8077 3.29721 12.9147 3.44305C13.0217 3.58889 13.1724 3.69678 13.345 3.75105C13.7723 3.88698 14.1868 4.06049 14.5835 4.26955C14.7439 4.35355 14.927 4.38409 15.1061 4.35672C15.2851 4.32935 15.4507 4.2455 15.5788 4.1174L16.4594 3.2368L18.8632 5.6406L17.9826 6.5212C17.8545 6.64925 17.7706 6.81487 17.7433 6.99392C17.7159 7.17297 17.7465 7.35608 17.8305 7.51655C18.0395 7.91325 18.213 8.32768 18.349 8.755C18.4032 8.92756 18.5111 9.0783 18.657 9.18531C18.8028 9.29232 18.979 9.35001 19.1599 9.35H20.4V12.75H19.1599C18.979 12.75 18.8028 12.8077 18.657 12.9147C18.5111 13.0217 18.4032 13.1724 18.349 13.345C18.213 13.7723 18.0395 14.1868 17.8305 14.5835C17.7465 14.7439 17.7159 14.927 17.7433 15.1061C17.7706 15.2851 17.8545 15.4507 17.9826 15.5788L18.8632 16.4594L16.4594 18.8632L15.5788 17.9826C15.4507 17.8545 15.2851 17.7706 15.1061 17.7433C14.927 17.7159 14.7439 17.7465 14.5835 17.8305C14.1868 18.0395 13.7723 18.213 13.345 18.349C13.1724 18.4032 13.0217 18.5111 12.9147 18.657C12.8077 18.8028 12.75 18.979 12.75 19.1599V20.4H9.35V19.1599C9.35001 18.979 9.29232 18.8028 9.18531 18.657C9.0783 18.5111 8.92756 18.4032 8.755 18.349C8.32768 18.213 7.91325 18.0395 7.51655 17.8305C7.35608 17.7465 7.17297 17.7159 6.99392 17.7433C6.81487 17.7706 6.64925 17.8545 6.5212 17.9826L5.6406 18.8632L3.2368 16.4594L4.1174 15.5788C4.2455 15.4507 4.32935 15.2851 4.35672 15.1061C4.38409 14.927 4.35355 14.7439 4.26955 14.5835Z" fill="#E57D61"></path>
                                <path d="M14.6897 13.3875C14.7939 13.4287 14.9052 13.449 15.0172 13.4471C15.1292 13.4451 15.2397 13.4211 15.3424 13.3763C15.4451 13.3315 15.5379 13.2669 15.6156 13.1861C15.6932 13.1053 15.7541 13.01 15.7947 12.9056C16.228 11.8087 16.2701 10.596 15.9138 9.47176C15.5575 8.34751 14.8247 7.38039 13.8388 6.73328C12.8528 6.08616 11.674 5.79861 10.5008 5.91904C9.32761 6.03947 8.23177 6.56052 7.39785 7.39445C6.56392 8.22837 6.04287 9.32421 5.92244 10.4974C5.80201 11.6706 6.08957 12.8494 6.73668 13.8354C7.38379 14.8213 8.35091 15.5541 9.47516 15.9104C10.5994 16.2667 11.8121 16.2246 12.909 15.7913C13.015 15.7522 13.1121 15.6923 13.1947 15.6151C13.2773 15.538 13.3437 15.4451 13.39 15.342C13.4363 15.2389 13.4615 15.1276 13.4643 15.0147C13.467 14.9017 13.4472 14.7893 13.406 14.684C13.3648 14.5788 13.3031 14.4828 13.2243 14.4018C13.1456 14.3207 13.0515 14.2561 12.9475 14.2118C12.8435 14.1676 12.7317 14.1445 12.6187 14.1439C12.5057 14.1434 12.3937 14.1654 12.2893 14.2086C11.5562 14.4994 10.7453 14.5285 9.99322 14.291C9.24117 14.0535 8.594 13.564 8.16081 12.905C7.72763 12.2459 7.53492 11.4577 7.61519 10.6731C7.69545 9.88859 8.04378 9.1557 8.60144 8.59804C9.1591 8.04038 9.89199 7.69205 10.6765 7.61179C11.4611 7.53152 12.2493 7.72423 12.9084 8.15741C13.5674 8.5906 14.0569 9.23777 14.2944 9.98982C14.5319 10.7419 14.5028 11.5528 14.212 12.2859C14.1295 12.4953 14.1335 12.729 14.2231 12.9355C14.3126 13.142 14.4804 13.3046 14.6897 13.3875Z" fill="#E57D61"></path>
                                <path d="M25.5 13.6C25.2746 13.6 25.0584 13.6896 24.899 13.849C24.7396 14.0084 24.65 14.2246 24.65 14.45C24.65 14.6754 24.7396 14.8916 24.899 15.051C25.0584 15.2104 25.2746 15.3 25.5 15.3H28.9C29.1254 15.3 29.3416 15.2104 29.501 15.051C29.6604 14.8916 29.75 14.6754 29.75 14.45C29.75 14.2246 29.6604 14.0084 29.501 13.849C29.3416 13.6896 29.1254 13.6 28.9 13.6H28.05V7.65C28.05 7.48191 28.0001 7.31761 27.9067 7.17786C27.8133 7.03811 27.6806 6.92919 27.5253 6.86487C27.37 6.80055 27.1991 6.78372 27.0342 6.8165C26.8694 6.84929 26.7179 6.93021 26.5991 7.04905L24.899 8.74905C24.7442 8.90936 24.6585 9.12407 24.6605 9.34694C24.6624 9.56981 24.7518 9.783 24.9094 9.9406C25.067 10.0982 25.2802 10.1876 25.5031 10.1895C25.7259 10.1915 25.9406 10.1058 26.101 9.95095L26.35 9.7019V13.6H25.5Z" fill="#E57D61"></path>
                                <path d="M45.9 6.8H35.7C35.4746 6.8 35.2584 6.88955 35.099 7.04896C34.9396 7.20837 34.85 7.42457 34.85 7.65C34.85 7.87543 34.9396 8.09163 35.099 8.25104C35.2584 8.41045 35.4746 8.5 35.7 8.5H45.9C46.1254 8.5 46.3416 8.41045 46.501 8.25104C46.6604 8.09163 46.75 7.87543 46.75 7.65C46.75 7.42457 46.6604 7.20837 46.501 7.04896C46.3416 6.88955 46.1254 6.8 45.9 6.8Z" fill="#E57D61"></path>
                                <path d="M45.9 10.2H31.45C31.2246 10.2 31.0084 10.2896 30.849 10.449C30.6896 10.6084 30.6 10.8246 30.6 11.05C30.6 11.2754 30.6896 11.4916 30.849 11.651C31.0084 11.8104 31.2246 11.9 31.45 11.9H45.9C46.1254 11.9 46.3416 11.8104 46.501 11.651C46.6604 11.4916 46.75 11.2754 46.75 11.05C46.75 10.8246 46.6604 10.6084 46.501 10.449C46.3416 10.2896 46.1254 10.2 45.9 10.2Z" fill="#E57D61"></path>
                                <path d="M45.9 13.6H33.15C32.9246 13.6 32.7084 13.6896 32.549 13.849C32.3896 14.0084 32.3 14.2246 32.3 14.45C32.3 14.6754 32.3896 14.8916 32.549 15.051C32.7084 15.2104 32.9246 15.3 33.15 15.3H45.9C46.1254 15.3 46.3416 15.2104 46.501 15.051C46.6604 14.8916 46.75 14.6754 46.75 14.45C46.75 14.2246 46.6604 14.0084 46.501 13.849C46.3416 13.6896 46.1254 13.6 45.9 13.6Z" fill="#E57D61"></path>
                                <path d="M43.951 26.5991C43.7916 26.4397 43.5754 26.3502 43.35 26.3502C43.1246 26.3502 42.9084 26.4397 42.7491 26.5991L41.049 28.299C40.8897 28.4584 40.8002 28.6746 40.8002 28.9C40.8002 29.1254 40.8897 29.3416 41.049 29.501L42.7491 31.201C42.9094 31.3558 43.1241 31.4415 43.3469 31.4395C43.5698 31.4376 43.783 31.3482 43.9406 31.1906C44.0982 31.033 44.1876 30.8198 44.1895 30.5969C44.1915 30.3741 44.1058 30.1594 43.951 29.9991L43.7019 29.75H46.75C46.9754 29.75 47.1916 29.6604 47.351 29.501C47.5104 29.3416 47.6 29.1254 47.6 28.9V21.25C47.6 21.0246 47.5104 20.8084 47.351 20.649C47.1916 20.4896 46.9754 20.4 46.75 20.4C46.5246 20.4 46.3084 20.4896 46.149 20.649C45.9896 20.8084 45.9 21.0246 45.9 21.25V28.05H43.7019L43.951 27.801C44.1103 27.6416 44.1998 27.4254 44.1998 27.2C44.1998 26.9746 44.1103 26.7584 43.951 26.5991Z" fill="#E57D61"></path>
                                <path d="M9.95095 41.8991C9.79064 41.7442 9.57593 41.6585 9.35306 41.6605C9.13019 41.6624 8.917 41.7518 8.7594 41.9094C8.60181 42.067 8.51241 42.2802 8.51048 42.5031C8.50854 42.7259 8.59422 42.9406 8.74905 43.101L8.9981 43.35H1.7V31.45H4.25C4.47543 31.45 4.69163 31.3604 4.85104 31.201C5.01045 31.0416 5.1 30.8254 5.1 30.6C5.1 30.3746 5.01045 30.1584 4.85104 29.999C4.69163 29.8396 4.47543 29.75 4.25 29.75H0.85C0.624566 29.75 0.408365 29.8396 0.248959 29.999C0.0895533 30.1584 0 30.3746 0 30.6V44.2C0 44.4254 0.0895533 44.6416 0.248959 44.801C0.408365 44.9604 0.624566 45.05 0.85 45.05H8.9981L8.74905 45.299C8.66787 45.3775 8.60311 45.4713 8.55856 45.575C8.51402 45.6787 8.49057 45.7902 8.48959 45.9031C8.48861 46.0159 8.51011 46.1278 8.55285 46.2323C8.59559 46.3368 8.65871 46.4317 8.73851 46.5115C8.81832 46.5913 8.91323 46.6544 9.01769 46.6971C9.12215 46.7399 9.23408 46.7614 9.34694 46.7604C9.4598 46.7594 9.57134 46.736 9.67504 46.6914C9.77875 46.6469 9.87254 46.5821 9.95095 46.501L11.651 44.801C11.8103 44.6416 11.8998 44.4254 11.8998 44.2C11.8998 43.9746 11.8103 43.7584 11.651 43.5991L9.95095 41.8991Z" fill="#E57D61"></path>
                                <path d="M16.15 29.75C16.15 29.0737 15.8813 28.4251 15.4031 27.9469C14.9249 27.4687 14.2763 27.2 13.6 27.2C12.9237 27.2 12.2751 27.4687 11.7969 27.9469C11.3187 28.4251 11.05 29.0737 11.05 29.75C11.05 29.9754 11.1396 30.1916 11.299 30.351C11.4584 30.5104 11.6746 30.6 11.9 30.6C12.1254 30.6 12.3416 30.5104 12.501 30.351C12.6604 30.1916 12.75 29.9754 12.75 29.75C12.7502 29.5435 12.8255 29.3442 12.9618 29.1892C13.0982 29.0342 13.2864 28.9341 13.4911 28.9077C13.6959 28.8812 13.9033 28.9302 14.0746 29.0455C14.2459 29.1608 14.3693 29.3344 14.4219 29.5341L11.1919 34.3791C11.1067 34.5072 11.0579 34.6559 11.0505 34.8096C11.0432 34.9632 11.0778 35.116 11.1504 35.2516C11.2231 35.3871 11.3312 35.5005 11.4632 35.5794C11.5952 35.6584 11.7462 35.7001 11.9 35.7H15.3C15.5254 35.7 15.7416 35.6104 15.901 35.451C16.0604 35.2916 16.15 35.0754 16.15 34.85C16.15 34.6246 16.0604 34.4084 15.901 34.249C15.7416 34.0896 15.5254 34 15.3 34H13.4887L16.0072 30.2218C16.1001 30.0819 16.1497 29.9179 16.15 29.75Z" fill="#E57D61"></path>
                                <path d="M34 28.05H23.8C23.5746 28.05 23.3584 28.1396 23.199 28.299C23.0396 28.4584 22.95 28.6746 22.95 28.9C22.95 29.1254 23.0396 29.3416 23.199 29.501C23.3584 29.6604 23.5746 29.75 23.8 29.75H34C34.2254 29.75 34.4416 29.6604 34.601 29.501C34.7604 29.3416 34.85 29.1254 34.85 28.9C34.85 28.6746 34.7604 28.4584 34.601 28.299C34.4416 28.1396 34.2254 28.05 34 28.05Z" fill="#E57D61"></path>
                                <path d="M34 31.45H19.55C19.3246 31.45 19.1084 31.5396 18.949 31.699C18.7896 31.8584 18.7 32.0746 18.7 32.3C18.7 32.5254 18.7896 32.7416 18.949 32.901C19.1084 33.0604 19.3246 33.15 19.55 33.15H34C34.2254 33.15 34.4416 33.0604 34.601 32.901C34.7604 32.7416 34.85 32.5254 34.85 32.3C34.85 32.0746 34.7604 31.8584 34.601 31.699C34.4416 31.5396 34.2254 31.45 34 31.45Z" fill="#E57D61"></path>
                                <path d="M25.5 39.1C24.8237 39.1 24.1751 39.3687 23.6969 39.8469C23.2187 40.3251 22.95 40.9737 22.95 41.65C22.95 41.8754 23.0396 42.0916 23.199 42.251C23.3584 42.4104 23.5746 42.5 23.8 42.5C24.0254 42.5 24.2416 42.4104 24.401 42.251C24.5604 42.0916 24.65 41.8754 24.65 41.65C24.65 41.4819 24.6999 41.3176 24.7933 41.1778C24.8867 41.038 25.0194 40.929 25.1747 40.8647C25.33 40.8004 25.5009 40.7835 25.6658 40.8163C25.8307 40.8491 25.9822 40.9301 26.101 41.049C26.2199 41.1678 26.3009 41.3193 26.3337 41.4842C26.3665 41.6491 26.3496 41.82 26.2853 41.9753C26.221 42.1306 26.112 42.2634 25.9722 42.3568C25.8325 42.4501 25.6681 42.5 25.5 42.5C25.2746 42.5 25.0584 42.5896 24.899 42.749C24.7396 42.9084 24.65 43.1246 24.65 43.35C24.65 43.5754 24.7396 43.7916 24.899 43.951C25.0584 44.1104 25.2746 44.2 25.5 44.2C25.6681 44.2 25.8325 44.2499 25.9722 44.3433C26.112 44.4366 26.221 44.5694 26.2853 44.7247C26.3496 44.88 26.3665 45.0509 26.3337 45.2158C26.3009 45.3807 26.2199 45.5322 26.101 45.651C25.9822 45.7699 25.8307 45.8509 25.6658 45.8837C25.5009 45.9165 25.33 45.8996 25.1747 45.8353C25.0194 45.771 24.8867 45.662 24.7933 45.5222C24.6999 45.3825 24.65 45.2181 24.65 45.05C24.65 44.8246 24.5604 44.6084 24.401 44.449C24.2416 44.2896 24.0254 44.2 23.8 44.2C23.5746 44.2 23.3584 44.2896 23.199 44.449C23.0396 44.6084 22.95 44.8246 22.95 45.05C22.9497 45.4635 23.0499 45.871 23.2421 46.2371C23.4343 46.6033 23.7127 46.9172 24.0533 47.1518C24.3938 47.3865 24.7863 47.5347 25.1969 47.5839C25.6075 47.633 26.0239 47.5816 26.4102 47.434C26.7965 47.2864 27.1411 47.047 27.4143 46.7366C27.6875 46.4261 27.8811 46.0539 27.9784 45.652C28.0757 45.25 28.0738 44.8305 27.9728 44.4294C27.8719 44.0284 27.6749 43.658 27.3989 43.35C27.727 42.9832 27.9419 42.5293 28.0178 42.0431C28.0936 41.5569 28.0272 41.0591 27.8264 40.6098C27.6257 40.1605 27.2992 39.7789 26.8864 39.511C26.4736 39.2431 25.9921 39.1003 25.5 39.1Z" fill="#E57D61"></path>
                                <path d="M45.05 40.8C45.2754 40.8 45.4916 40.7104 45.651 40.551C45.8104 40.3916 45.9 40.1754 45.9 39.95C45.9 39.7246 45.8104 39.5084 45.651 39.349C45.4916 39.1896 45.2754 39.1 45.05 39.1H34.85C34.6246 39.1 34.4084 39.1896 34.249 39.349C34.0896 39.5084 34 39.7246 34 39.95C34 40.1754 34.0896 40.3916 34.249 40.551C34.4084 40.7104 34.6246 40.8 34.85 40.8H45.05Z" fill="#E57D61"></path>
                                <path d="M30.6 43.35C30.6 43.5754 30.6896 43.7916 30.849 43.951C31.0084 44.1104 31.2246 44.2 31.45 44.2H45.05C45.2754 44.2 45.4916 44.1104 45.651 43.951C45.8104 43.7916 45.9 43.5754 45.9 43.35C45.9 43.1246 45.8104 42.9084 45.651 42.749C45.4916 42.5896 45.2754 42.5 45.05 42.5H31.45C31.2246 42.5 31.0084 42.5896 30.849 42.749C30.6896 42.9084 30.6 43.1246 30.6 43.35Z" fill="#E57D61"></path>
                                <path d="M31.45 47.6H45.05C45.2754 47.6 45.4916 47.5104 45.651 47.351C45.8104 47.1916 45.9 46.9754 45.9 46.75C45.9 46.5246 45.8104 46.3084 45.651 46.149C45.4916 45.9896 45.2754 45.9 45.05 45.9H31.45C31.2246 45.9 31.0084 45.9896 30.849 46.149C30.6896 46.3084 30.6 46.5246 30.6 46.75C30.6 46.9754 30.6896 47.1916 30.849 47.351C31.0084 47.5104 31.2246 47.6 31.45 47.6Z" fill="#E57D61"></path>
                            </svg>
                        </div>
                        <div class="body">
                            <span>04</span>
                            <h4 class="title">Client Discovery</h4>
                            <p class="disc">
                                The agency begins by understanding the client's needs, goals, and
                            </p>
                        </div>
                    </div>
                    <!-- single steps area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- easy steps area end -->


    <!-- Our Business case style start -->
    <div class="rts-business-case-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area-business-case-3">
                        <div class="title-area">
                            <span class="sub">Project Portfolio</span>
                            <h2 class="title">Digital Case Studies</h2>
                        </div>
                        <a class="rts-btn btn-primary six color-h-black" href="{{ route('contactPage') }}">Lets Work Together</a>
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


    <div class="rts-testimonials-area-start-12 bg-dream rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center title-area-nine">
                        <p class="pre-title">
                            Client Testimonial
                        </p>
                        <h2 class="title">What They Say About <br> Our Company</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-lg-12">
                    <div class="testimonials-main-wrapper-nine">
                        <div class="left-image">
                            <img src="{{ asset('assets/images/testimonials/10.jpg') }}" alt="testimonials">
                        </div>
                        <div class="right-content">
                            <div class="brand-name">
                                <img src="{{ asset('assets/images/testimonials/10.png') }}" alt="alter">
                            </div>
                            <h5 class="title">
                                Building Amazing Modern Business
                            </h5>
                            <p class="dsic">
                                "Collaborating with Modern Agency felt like having an extension of our own team. Their seamless integration, prompt responses, and ability to adapt to our changing needs made them an invaluable partner in our business journey."
                            </p>
                            <div class="testimonials-area-author">
                                <img src="{{ asset('assets/images/testimonials/11.png') }}" alt="testimonaisl">
                                <div class="infor-mation">
                                    <h6 class="title">Archer Graham</h6>
                                    <span>Finance Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rts-trusted-client rts-section-gapTop">
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
    </div>


    <div class="rts-pricing-plane rts-section-gap pricing-twelve">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing-tab-button-area title-area pricing-h2">
                        <span>Price Plans</span>
                        <h2 class="title">Pricing &amp; Plans</h2>
                        <p class="offer"><span>Save Over 25%</span> When You Select Annual Billing</p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false">Monthly PLan</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Yearly
                                    Plan</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt--80">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Basic Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$250</h2>
                                                <span>/Month</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
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
                                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two active">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Standard Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$450</h2>
                                                <span>/Month</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
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
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
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
                                            <a class="rts-btn btn-primary active" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Premium Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$650</h2>
                                                <span>/Month</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
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
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
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
                                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row g-5">
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Basic Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$2500</h2>
                                                <span>/Year</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
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
                                            <a class="rts-btn btn-primary" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two active">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Standard Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$4500</h2>
                                                <span>/Year</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
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
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
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
                                            <a class="rts-btn btn-primary active" href="#">Buy This</a>
                                        </div>
                                        <!-- pricing body end -->
                                    </div>
                                </div>
                                <!-- single pricing plane -->
                                <!-- single pricing plane -->
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="pricing-wrapper-one home-two">
                                        <!-- pricing header -->
                                        <div class="pricing-header-start">
                                            <h5 class="title">
                                                Premium Plan
                                            </h5>
                                            <div class="pric-area">
                                                <h2 class="title">$6500</h2>
                                                <span>/Year</span>
                                            </div>
                                            <div class="discription">
                                                <p class="disc">
                                                    Curabitur nullam dis nibh nisi nascetur vestibulum proin mi morbi
                                                </p>
                                            </div>
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
                                            <div class="single-pricing available">
                                                <div class="icon">
                                                    <i class="far fa-check"></i>
                                                </div>
                                                <span class="price-details">Market Growth Solution</span>
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
                                            <a class="rts-btn btn-primary" href="#">Buy This</a>
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

    <div class="rts-contact-area rts-section-gap bg-dream contact-one">
        <div class="container">
            <div class="row align-items-center g-0">
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="contact-image-one">
                        <img src="{{ asset('assets/images/contact/03.jpg') }}" alt="">
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
                                <input type="text" placeholder="Your Name" name="name" required="">
                                <input type="email" placeholder="Email Address" name="email" required="">
                            </div>
                            <input type="text" placeholder="Business Topic" name="subject">
                            <textarea placeholder="Type Your Message" name="message"></textarea>
                            <button type="submit" class="rts-btn btn-primary six">Submit Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rts-blog-area rts-section-gap style-seven">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-area text-center">
                        <p class="pre-title">Blog Posts</p>
                        <h2 class="title">News &amp; Updates</h2>
                    </div>
                </div>
            </div>
            <div class="g-5 mt--40">
                <div class="swiper mySwiperh1_blog swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                    <div class="swiper-wrapper" id="swiper-wrapper-1d90ea44c42b5dd8" aria-live="off" style="transform: translate3d(-2200px, 0px, 0px); transition-duration: 0ms;">
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 410px; margin-right: 30px;">
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
                                    <a class="rts-read-more btn-primary six" href="{{ route('blogDetailsPage') }}"><i class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 410px; margin-right: 30px;">
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
                                    <a class="rts-read-more btn-primary six" href="{{ route('blogDetailsPage') }}"><i class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 410px; margin-right: 30px;">
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
                                    <a class="rts-read-more btn-primary six" href="{{ route('blogDetailsPage') }}"><i class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 410px; margin-right: 30px;">
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
                                    <a class="rts-read-more btn-primary six" href="{{ route('blogDetailsPage') }}"><i class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 410px; margin-right: 30px;">
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
                                    <a class="rts-read-more btn-primary six" href="{{ route('blogDetailsPage') }}"><i class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 410px; margin-right: 30px;">
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
                                    <a class="rts-read-more btn-primary six" href="{{ route('blogDetailsPage') }}"><i class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 410px; margin-right: 30px;">
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
                                    <a class="rts-read-more btn-primary six" href="{{ route('blogDetailsPage') }}"><i class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="1" role="group" aria-label="2 / 3" style="width: 410px; margin-right: 30px;">
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
                                    <a class="rts-read-more btn-primary six" href="{{ route('blogDetailsPage') }}"><i class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" role="group" aria-label="3 / 3" style="width: 410px; margin-right: 30px;">
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
                                    <a class="rts-read-more btn-primary six" href="{{ route('blogDetailsPage') }}"><i class="far fa-arrow-right"></i>Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </div>



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
                        <li class="has-droupdown menu-item">
                            <a class="menu-link" href="#">Home</a>
                            <ul class="submenu">
                                <li>
                                    <ul>
                                        <a href="#0" class="tag">Homepages</a>
                                        <li class="mobile-menu-link"><a href="{{ route('home') }}">Main Home</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('consulting') }}">Consulting Home</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('corporate') }}">Corporate Home</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('insurance') }}">Insurance Home</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('marketing') }}">Marketing Home</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('finance') }}">Finance Home</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('humanResource') }}">Human Resources</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <a href="#0" class="tag">Onepages</a>
                                        <li class="mobile-menu-link"><a href="{{ route('main') }}">Main Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('OnePageConsulting') }}">Consulting Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('OnePageCorporate') }}">Corporate Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('OnePageInsurance') }}">Insurance Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('OnePageMarketing') }}">Marketing Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('OnePageFinance') }}">Finance Home Onepage</a></li>
                                        <li class="mobile-menu-link"><a href="{{ route('OnePageHumanResource') }}">Human Resources Onepage</a></li>
                                    </ul>
                                </li>
                            </ul>
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
                                <li class="mobile-menu-link"><a href="{{ route('blogPage') }}"">Blog List</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('blogGridPage') }}"">Blog Grid</a></li>
                                <li class="mobile-menu-link"><a href="{{ route('blogDetailsPage') }}"">Blog Details</a></li>
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
    <div id="anywhere-home" class="">
    </div>

     <!-- footer area start -->
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
                                        <p class="disc">Sign up for our latest news &amp; articles. We won’t give you spam
                                            mails.</p>
                                        <form class="email-footer-area">
                                            <input type="email" placeholder="Enter Email Address" required="">
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
    <!-- footer area end -->
@endsection
