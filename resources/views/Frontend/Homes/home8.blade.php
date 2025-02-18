@extends('Frontend.Layouts.app')

@section('title')
    Home Eight (Business Consultant)
@endsection

@section('content')
    <!-- start header area -->
    <header class="header-two header--sticky eight">
        <div class="main-header">
            <div class="content">
                <div class="header-left">
                    <a class="thumbnail" href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo/logo.webp') }}" alt="">
                    </a>

                    @include('Frontend.Includes.mainList')


                </div>
                <div class="header-right">
                    <div class="call-area">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                fill="none">
                                <path
                                    d="M14.2251 11.5362C13.7279 11.5914 13.3688 12.061 13.3965 12.5858C13.4517 13.083 13.8936 13.4697 14.4461 13.4144C14.9985 13.3592 15.5509 13.5249 15.9376 13.9116C16.352 14.3259 16.5177 14.8784 16.4624 15.4308C16.4072 15.9832 16.7939 16.4252 17.2911 16.4804C17.5949 16.508 17.8711 16.3975 18.0645 16.2042C18.2026 16.0661 18.3131 15.8451 18.3407 15.6518C18.4512 14.4917 18.0645 13.3868 17.2635 12.5858C16.4901 11.8124 15.3852 11.4257 14.2251 11.5362ZM13.866 7.80729C13.3136 7.86253 12.9545 8.3321 13.0098 8.82928C13.0374 9.35409 13.507 9.71317 14.0318 9.68554C15.7443 9.51982 17.3739 10.0999 18.5617 11.2876C19.7218 12.4477 20.3294 14.105 20.1637 15.8175C20.1085 16.3147 20.4675 16.7842 20.9923 16.8119C21.2962 16.8395 21.5448 16.7566 21.7381 16.5633C21.9038 16.3975 21.9867 16.2042 22.042 15.9832C22.2905 13.7459 21.5171 11.5362 19.9151 9.93414C18.3131 8.3321 16.131 7.58632 13.866 7.80729ZM13.507 4.07841C12.9821 4.10603 12.6231 4.57559 12.6507 5.1004C12.7059 5.59758 13.1479 5.98428 13.6727 5.95666C16.4901 5.68045 19.2522 6.61957 21.2409 8.60831C23.202 10.5694 24.1688 13.3592 23.8926 16.1766C23.865 16.7014 24.2517 17.1433 24.7488 17.1986C25.0527 17.2262 25.3289 17.1157 25.5222 16.9223C25.6603 16.7842 25.7432 16.5909 25.7708 16.3423C26.1299 13.0001 24.9698 9.68554 22.5668 7.28249C20.1361 4.85181 16.8768 3.74695 13.507 4.07841ZM10.3581 15.0165C10.662 14.7679 10.8001 14.2983 10.6343 13.9116L9.22564 10.6799C9.05991 10.238 8.56273 10.017 8.14841 10.0999L5.11006 10.818C4.69574 10.9009 4.3919 11.3152 4.3919 11.7571C4.3919 19.3254 10.5515 25.485 18.1197 25.485C18.5617 25.485 18.976 25.1811 19.0588 24.7668L19.777 21.7285C19.8599 21.3141 19.6389 20.817 19.197 20.6512L15.9653 19.2425C15.5786 19.0768 15.109 19.2149 14.8604 19.5187L13.5346 21.1208C11.4353 20.1264 9.75045 18.4415 8.75608 16.3423L10.3581 15.0165Z"
                                    fill="#0B4DF5" />
                            </svg>
                        </div>
                        <div class="number-area">
                            <span>Call us anytime</span>
                            <a href="tel:123-456-7890">
                                <h6 class="call">+256 21458.2146</h6>
                            </a>
                        </div>
                    </div>
                    <a class="rts-btn btn-primary-2 menu-block-none" href="#">Book a Meeting</a>
                    <button id="menu-btn" class="menu rts-btn btn-primary-alta ml--20">
                        <img class="menu-dark" src="{{ asset('assets/images/icon/menu.png') }}" alt="Menu-icon">
                        <img class="menu-light" src="{{ asset('assets/images/icon/menu-light.png') }}" alt="Menu-icon">
                    </button>
                </div>
            </div>
        </div>
    </header>



    <div id="anywhere-home"></div>

    <div id="side-bar" class="side-bar">
        <button class="close-icon-menu"><i class="far fa-times"></i></button>
        <!-- inner menu area desktop start -->
        <div class="rts-sidebar-menu-desktop">
            <a class="logo-1" href="{{ route('home') }}"><img class="logo"
                    src="{{ asset('assets/images/logo/logo-1.svg') }}" alt="finbiz_logo"></a>
            <a class="logo-2" href="{{ route('home') }}"><img class="logo"
                    src="{{ asset('assets/images/logo/logo-4.svg') }}" alt="finbiz_logo"></a>
            <a class="logo-3" href="{{ route('home') }}"><img class="logo"
                    src="{{ asset('assets/images/logo/logo-3.svg') }}" alt="finbiz_logo"></a>
            <a class="logo-4" href="{{ route('home') }}"><img class="logo"
                    src="{{ asset('assets/images/logo/logo-5.svg') }}" alt="finbiz_logo"></a>
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
    <!-- ENd Header Area -->

    <!-- rts banner area start -->
    <div class="rts-banner-area-two eight">
        <div class="swiper mySwiperh3_banner">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class=" bg_banner-three bg_image rts-section-gap eight">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-three-inner">
                                        <span class="subtitle-banner">Expert Guidence Model</span>
                                        <!-- type headline start-->
                                        <h1 class="title cd-headline clip is-full-width">
                                            Web Services
                                        </h1>
                                        <p class="disc">
                                            Urna justo odio ultrices aliquet vitae sollicitudin gravida congue in sapien
                                            eget sociosqu
                                            mollis lacus cursus per primis quis nascetur nisl risus porta issues business
                                            solution
                                            service
                                        </p>
                                        <div class="button-group">
                                            <a href="{{ route('pricePlans') }}" class="rts-btn btn-primary-2">Get
                                                Started</a>
                                            <a href="{{ route('aboutPage') }}"
                                                class="rts-btn btn-primary-2 transparent">About Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class=" bg_banner-three eight-2 bg_image rts-section-gap">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="banner-three-inner">
                                        <span class="subtitle-banner">Make Your Strategy Strong</span>
                                        <!-- type headline start-->
                                        <h1 class="title cd-headline clip is-full-width">
                                            Software Model
                                        </h1>
                                        <p class="disc">
                                            Urna justo odio ultrices aliquet vitae sollicitudin gravida congue in sapien
                                            eget sociosqu
                                            mollis lacus cursus per primis quis nascetur nisl risus porta issues business
                                            solution
                                            service
                                        </p>
                                        <div class="button-group">
                                            <a href="{{ route('pricePlans') }}" class="rts-btn btn-primary-2">Get
                                                Started</a>
                                            <a href="{{ route('aboutPage') }}"
                                                class="rts-btn btn-primary-2 transparent">About Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class=" bg_banner-three eight-3 bg_image rts-section-gap">
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
                                            Urna justo odio ultrices aliquet vitae sollicitudin gravida congue in sapien
                                            eget sociosqu
                                            mollis lacus cursus per primis quis nascetur nisl risus porta issues business
                                            solution
                                            service
                                        </p>
                                        <div class="button-group">
                                            <a href="{{ route('pricePlans') }}" class="rts-btn btn-primary-2">Get
                                                Started</a>
                                            <a href="{{ route('aboutPage') }}"
                                                class="rts-btn btn-primary-2 transparent">About Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-navigation">
            <span class="swiper-button-prev"></span>
            <span class="swiper-button-next"></span>
        </div>
    </div>
    <!-- rts banner area end -->

    <!-- start service area -->
    <div class="rts-service-areah2-im-3 eight rts-section-gap">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="image-area">
                        <img src="{{ asset('assets/images/service/h2/03.jpg') }}" alt="Service_Image">
                        <img class="two" src="{{ asset('assets/images/service/h2/02.jpg') }}" alt="Service_Image">
                        <img class="three" src="{{ asset('assets/images/service/h2/01.jpg') }}" alt="Service_Image">
                        <div class="ratio-area">
                            <h3 class="ratio">85%</h3>
                            <span>Successful Ratio</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-h2-content pl--30">
                        <div class="title-area  service-h2 service">
                            <span>Why Choose Us</span>
                            <h2 class="title">We focus to get excellent
                                performance </h2>
                        </div>
                        <div class="content-wrapper">
                            <p class="disc">
                                Aliquet porta est cras proin donec odio curabitur convallis, penatibus vulputate
                                facilisi montes blandit condimentum quisque platea, sociosqu ut nec nam cursus magnis
                                leo nullam
                            </p>
                            <div class="feature-one-wrapper mt--40">
                                <div class="single-feature-one eight">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="639pt"
                                        viewBox="-19 -19 639 639.99991" width="639pt">
                                        <path
                                            d="m540.5 330v-20c5.519531 0 10-4.476562 10-10v-60c0-5.523438-4.480469-10-10-10h-54l-1.9375-7.511719c-4.421875-17.179687-11.289062-33.636719-20.402344-48.859375l-4-6.691406 38.339844-38.40625c3.859375-3.867188 3.859375-10.132812 0-14l-42.46875-42.53125c-3.921875-3.738281-10.082031-3.738281-14.003906 0l-38.410156 38.410156-6.6875-4c-15.246094-9.117187-31.71875-15.984375-48.921876-20.410156l-7.507812-1.953125v-54.046875c0-5.523438-4.476562-10-10-10h-60c-5.523438 0-10 4.476562-10 10v54l-7.511719 1.941406c-17.179687 4.417969-33.636719 11.285156-48.867187 20.386719l-6.691406 4.003906-38.398438-38.332031c-3.925781-3.769531-10.125-3.769531-14.050781 0l-42.480469 42.46875c-1.867188 1.863281-2.917969 4.394531-2.917969 7.03125 0 2.640625 1.050781 5.167969 2.917969 7.03125l38.410156 38.40625-4 6.691406c-9.109375 15.222656-15.980468 31.679688-20.398437 48.859375l-1.960938 7.511719h-54.050781c-5.523438 0-10 4.476562-10 10v60c0 5.523438 4.476562 10 10 10v20c-16.566406 0-30-13.433594-30-30v-60c0-16.566406 13.433594-30 30-30h38.691406c4.125-13.828125 9.703125-27.179688 16.640625-39.828125l-27.5-27.5c-5.625-5.613281-8.785156-13.230469-8.785156-21.171875s3.160156-15.558594 8.785156-21.167969l42.5-42.5c11.839844-11.332031 30.507813-11.332031 42.347657 0l27.492187 27.488281c12.648437-6.933593 26.003906-12.5 39.828125-16.621093v-38.699219c0-16.566406 13.433594-30 30-30h60c16.566406 0 30 13.433594 30 30v38.699219c13.828125 4.121093 27.175781 9.699219 39.828125 16.632812l27.5-27.5c11.84375-11.332031 30.507813-11.332031 42.351563 0l42.492187 42.488281c5.621094 5.613282 8.777344 13.222657 8.777344 21.167969 0 7.945313-3.15625 15.5625-8.777344 21.171875l-27.5 27.5c6.933594 12.65625 12.507813 26.011719 16.636719 39.839844h38.691406c16.566406 0 30 13.433594 30 30v60c0 16.566406-13.433594 30-30 30zm0 0">
                                        </path>
                                        <path
                                            d="m440.5 270h-20c0-66.273438-53.726562-120-120-120s-120 53.726562-120 120h-20c0-77.320312 62.679688-140 140-140 77.316406 0 140 62.679688 140 140zm0 0">
                                        </path>
                                        <path
                                            d="m300.5 350c-33.136719 0-60-26.867188-60-60 0-33.136719 26.863281-60 60-60 33.140625 0 60 26.863281 60 60-.035156 33.125-26.875 59.964844-60 60zm0-100c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40 40-17.910156 40-40-17.910156-40-40-40zm0 0">
                                        </path>
                                        <path
                                            d="m470.5 390c-33.136719 0-60-26.867188-60-60 0-33.136719 26.863281-60 60-60s60 26.863281 60 60c-.035156 33.125-26.875 59.964844-60 60zm0-100c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40 40-17.910156 40-40-17.910156-40-40-40zm0 0">
                                        </path>
                                        <path
                                            d="m130.5 390c-33.136719 0-60-26.867188-60-60 0-33.136719 26.863281-60 60-60 33.140625 0 60 26.863281 60 60-.035156 33.125-26.875 59.964844-60 60zm0-100c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40 40-17.910156 40-40-17.910156-40-40-40zm0 0">
                                        </path>
                                        <path
                                            d="m561.15625 415.65625c-14.902344-10.242188-32.570312-15.707031-50.65625-15.65625h-80c-4.863281.042969-9.71875.484375-14.511719 1.316406-6.398437-10.007812-14.722656-18.640625-24.488281-25.410156-1.464844-1.105469-3.003906-2.109375-4.609375-2.996094-13.988281-8.472656-30.039063-12.933594-46.390625-12.910156h-80c-30.582031-.109375-59.078125 15.496094-75.460938 41.316406-4.804687-.832031-9.667968-1.273437-14.539062-1.316406h-80c-18.070312-.050781-35.734375 5.40625-50.628906 15.636719-24.617188 16.75-39.355469 44.589843-39.371094 74.363281v40c.035156 27.304688 15.921875 52.101562 40.722656 63.539062 9.15625 4.3125 19.160156 6.519532 29.277344 6.460938h100v-20h-90v-110h-20v108.996094c-3.765625-.753906-7.421875-1.972656-10.890625-3.617188-17.714844-8.167968-29.070313-25.875-29.109375-45.378906v-40c.023438-23.171875 11.503906-44.832031 30.660156-57.863281 11.574219-7.945313 25.296875-12.175781 39.339844-12.136719h80c1.761719 0 3.460938.1875 5.179688.304688-3.382813 9.539062-5.136719 19.578124-5.179688 29.695312v100c.035156 27.601562 22.402344 49.964844 50 50h30v-160h-20v140h-10c-16.566406 0-30-13.433594-30-30v-100c0-38.664062 31.34375-70 70-70h80c12.867188.007812 25.476562 3.570312 36.449219 10.289062 1.015625.554688 1.992187 1.179688 2.917969 1.867188 9.371093 6.417969 17.0625 14.992188 22.421874 25 5.386719 10.109375 8.210938 21.386719 8.210938 32.84375v100c0 16.566406-13.433594 30-30 30h-10v-140h-20v160h30c27.601562-.035156 49.964844-22.398438 50-50v-100c-.046875-10.117188-1.792969-20.152344-5.171875-29.695312 1.722656-.117188 3.421875-.304688 5.171875-.304688h80c14.050781-.039062 27.785156 4.203125 39.367188 12.15625 19.140624 13.039062 30.605468 34.683594 30.632812 57.84375v40c-.035156 19.574219-11.476562 37.332031-29.277344 45.457031-3.417968 1.617188-7.019531 2.804688-10.722656 3.539063v-108.996094h-20v110h-90v20h100c10.058594.0625 20.003906-2.117188 29.109375-6.382812 24.882813-11.402344 40.851563-36.246094 40.890625-63.617188v-40c-.015625-29.761719-14.742188-57.589844-39.34375-74.34375zm0 0">
                                        </path>
                                        <path d="m260.5 580h80v20h-80zm0 0"></path>
                                    </svg>
                                    <p>Committed Teams</p>
                                </div>
                                <div class="single-feature-one eight">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Global_Message" height="512"
                                        viewBox="0 0 512 512" width="512">
                                        <g>
                                            <path
                                                d="m232.421 424.651c-1.737-1.962-4.169-3.141-6.76-3.279-8.707-.462-13.615 10.017-7.778 16.606l4.642 5.239c-54.563-9.31-103.233-38.3-138.428-82.825-32.122-40.625-49.812-91.762-49.812-143.99 0-5.523-4.477-10-10-10s-10 4.477-10 10c0 56.71 19.221 112.252 54.122 156.393 48.696 61.588 111.449 84.16 155.1 90.82l-7.282 6.67c-6.48 5.935-2.67 16.878 6.037 17.34 2.592.138 5.131-.778 7.059-2.545l23.979-21.976c4.015-3.68 4.338-9.974.721-14.059z">
                                            </path>
                                            <path
                                                d="m494.36 378.78-33.005-72.009c-3.427-7.478-9.109-13.416-16.241-17.1 8.937-23.207 13.655-48.081 13.658-73.246 0-.008.001-.016.001-.024s-.001-.017-.001-.025c-.006-45.588-15.458-90.231-43.508-125.707-37.214-47.091-92.393-74.452-151.734-75.359-1.853-.549-3.836-.549-5.698-.004-59.406.82-114.683 28.187-151.957 75.361-28.054 35.481-43.506 80.129-43.51 125.721 0 .004-.001.009-.001.013s.001.008.001.012c.002 45.594 15.454 90.245 43.509 125.727 37.29 47.174 92.763 74.644 152.211 75.37.696.015 1.407.016 2.119.016h.13l27.101 59.132c8.728 19.041 26.871 21.144 32.706 21.144 5.213 0 10.407-1.16 15.266-3.465l141.555-67.157c17.608-8.354 25.857-29.942 17.398-48.4zm-188.741 89.544-33.004-72.011c-.769-1.677-1.225-3.419-1.419-5.163l65.384 15.411-28.936 65.067c-.786-1.007-1.475-2.105-2.025-3.304zm137.555-153.22 33.005 72.009c.607 1.326 1.009 2.693 1.254 4.068l-67.482-19.242 30.493-61.002c1.096 1.223 2.02 2.619 2.73 4.167zm-90.405 74.726c-.004-.001-.009-.002-.013-.003l-70.174-16.54 136.772-64.888-32.606 65.228c0 .001 0 .001-.001.002l-9.749 19.503c-.635 1.271-1.988 1.943-3.301 1.632zm-236.87-67.661c-20.054-28.197-31.433-60.964-33.261-95.767h82.808c.815 22.33 4.363 44.306 10.587 65.567-21.252 7.381-41.407 17.504-60.134 30.2zm.003-211.533c18.725 12.694 38.878 22.816 60.131 30.198-6.224 21.253-9.771 43.228-10.587 65.568h-82.808c1.829-34.803 13.209-67.569 33.264-95.766zm289.335-.001c20.055 28.196 31.435 60.963 33.264 95.767h-84.021c-.709-22.232-4.119-44.119-10.185-65.289 21.541-7.4 41.968-17.617 60.942-30.478zm-210.072 175.511c-5.653-19.374-8.909-39.395-9.711-59.744h65.117v51.55c-18.777.718-37.338 3.464-55.406 8.194zm55.405-131.294v51.55h-65.117c.802-20.358 4.059-40.378 9.712-59.744 18.067 4.729 36.629 7.474 55.405 8.194zm74.572-7.982c5.509 19.305 8.632 39.259 9.33 59.531h-63.902v-51.551c18.477-.708 36.758-3.382 54.572-7.98zm-53.312 209.38c-.427.203-.844.42-1.26.638v-58.916c16.051.666 31.922 2.937 47.399 6.78-5.205 13.431-11.581 26.362-19.026 38.636zm65.389-45.843c5.841 1.988 11.59 4.206 17.245 6.639l-25.117 11.916c2.856-6.075 5.481-12.266 7.872-18.555zm-12.767-24.653c-17.576-4.49-35.626-7.103-53.881-7.802v-51.551h63.806c-.89 20.203-4.219 40.091-9.925 59.353zm100.843.036c-4.075.391-8.096 1.493-11.91 3.303l-35.54 16.861c-11.04-5.648-22.465-10.492-34.225-14.493 6.258-21.112 9.864-42.916 10.766-65.059h84.115c-1.087 20.693-5.55 40.666-13.206 59.388zm-154.725-150.959v-85.943c20.91 22.967 37.343 49.801 48.287 78.939-15.775 3.978-31.944 6.325-48.287 7.004zm-20 .001c-16.6-.689-33.009-3.096-49-7.182 11.174-29.165 27.849-55.973 49-78.86zm0 163.139v86.037c-21.151-22.882-37.834-49.699-49.003-78.854 15.994-4.087 32.403-6.494 49.003-7.183zm87.498-175.863c-11.542-31.229-28.908-60.049-51.061-84.845 40.657 6.145 77.897 26.341 105.743 57.675-17.07 11.414-35.395 20.518-54.682 27.17zm-104.066-84.83c-22.308 24.655-39.874 53.393-51.628 84.589-19.042-6.635-37.131-15.659-53.985-26.93 27.823-31.315 65.014-51.5 105.613-57.659zm-51.631 273.659c11.75 31.189 29.321 59.941 51.621 84.584-40.58-6.167-77.803-26.389-105.603-57.656 16.855-11.271 34.944-20.295 53.982-26.928zm174.021 100.294 12.712 2.996c1.767.418 3.539.619 5.288.619 8.536 0 16.518-4.802 20.498-12.778l5.962-11.927 67.156 19.149-140.368 66.594z">
                                            </path>
                                        </g>
                                    </svg>
                                    <p>24/7 Quality Services</p>
                                </div>
                                <div class="button-group">
                                    <a href="{{ route('pricePlans') }}" class="rts-btn btn-primary-2">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start service area End -->

    <!-- cta section start -->
    <div class="rts-cta-section-start rts-section-gap cta-bg-h2">
        <div class="container">
            <div class="row">
                <div class="cta-h2-wrapper text-center">
                    <div class="icon">
                        <a href="#"><i class="fas fa-phone-alt"></i></a>
                    </div>
                    <div class="body">
                        <p class="info">Contact Our Agent For Any kind off Business Help <span>(24/7 Available)</span>
                        </p>
                        <a href="tel:123-456-7890p123" class="number">+215 2153.2159</a>
                        <a href="#" class="rts-btn btn-primary-2">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta section end -->

    <!-- Working Process section start -->
    <div class="rts-working-process-section eight rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-area">
                        <span>Our Values</span>
                        <h2 class="title">Why Choose Us?</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="decs">We believe in the power of teamwork. We are driven by a sense of community inculcated
                        in us through our clients, colleagues, and associates. We provide worldwide our services.</p>
                </div>
            </div>
            <div class="rts-working-process-inner">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="wrapper">
                            <a href="#" class="icon">
                                <img src="{{ asset('assets/images/working-step/icon/target.svg') }}" alt="Icon">
                            </a>
                            <div class="content">
                                <h5 class="title">Customer Centric</h5>
                                <p class="disc">Customer centricity are that the is the focal point of all decisions
                                    related to products, services and experiences.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="wrapper">
                            <a href="#" class="icon">
                                <img src="{{ asset('assets/images/working-step/icon/user.svg') }}" alt="Icon">
                            </a>
                            <div class="content">
                                <h5 class="title">Human Centric</h5>
                                <p class="disc">Customer centricity are that the is the focal point of all decisions
                                    related to products, services and experiences.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="wrapper">
                            <a href="#" class="icon">
                                <img src="{{ asset('assets/images/working-step/icon/save.svg') }}" alt="Icon">
                            </a>
                            <div class="content">
                                <h5 class="title">Sustainable</h5>
                                <p class="disc">Customer centricity are that the is the focal point of all decisions
                                    related to products, services and experiences.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="wrapper">
                            <a href="#" class="icon">
                                <img src="{{ asset('assets/images/working-step/icon/goal.svg') }}" alt="Icon">
                            </a>
                            <div class="content">
                                <h5 class="title">Goal-Driven</h5>
                                <p class="disc">Customer centricity are that the is the focal point of all decisions
                                    related to products, services and experiences.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Working Process section end -->

    <!-- rts service post area  Start-->
    <div class="rts-service-area eight rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="rts-title-area service text-center">
                        <p class="pre-title">
                            Our Services
                        </p>
                        <h2 class="title">IT & Staffing Section</h2>
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
                            <img src="{{ asset('assets/images/service/icon/service-logo11.svg') }}" alt="finbiz_service">
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
                            <img src="{{ asset('assets/images/service/icon/service-logo4.svg') }}" alt="finbiz_service">
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
                            <img src="{{ asset('assets/images/service/icon/service-logo5.svg') }}" alt="finbiz_service">
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
                            <img src="{{ asset('assets/images/service/icon/service-logo6.svg') }}" alt="finbiz_service">
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
                            <img src="{{ asset('assets/images/service/icon/service-logo22.svg') }}" alt="finbiz_service">
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
                            <img src="{{ asset('assets/images/service/icon/service-logo33.svg') }}" alt="finbiz_service">
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
        </div>
    </div>
    <!-- rts service post area ENd -->

    <!-- start about our company -->
    <div class="rts-about-our-company-h2 eight rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12 mt_sm--30">
                    <div class="title-area about-company">
                        <span>Our Services Area</span>
                        <h2 class="title">Industries Hiring & Services area <br>
                            with different companies</h2>
                    </div>
                    <div class="about-company-wrapper">
                        <p class="disc">
                            We are licensed and insured with over 14 years of experience in providing <br> United States
                            with
                            top-rated USA business services
                        </p>
                        <div class="rts-tab-style-one">
                            <div class="d-flex align-items-start contoler-company">
                                <div class="nav flex-column nav-pills me-3 button-area" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" type="button" role="tab"
                                        aria-controls="v-pills-home" aria-selected="true">01. Information
                                        Technology</button>
                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false">02. Hospitality</button>
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-messages" type="button" role="tab"
                                        aria-controls="v-pills-messages" aria-selected="false">03. Logistics &
                                        Services</button>
                                    <button class="nav-link" id="v-pills-manufacture-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-manufacture" type="button" role="tab"
                                        aria-controls="v-pills-manufacture" aria-selected="false">04.
                                        Manufacturing</button>
                                    <button class="nav-link" id="v-pills-education-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-education" type="button" role="tab"
                                        aria-controls="v-pills-education" aria-selected="false">05. Education</button>
                                    <button class="nav-link" id="v-pills-customer-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-customer" type="button" role="tab"
                                        aria-controls="v-pills-customer" aria-selected="false">06. Customer
                                        Self-Service</button>
                                </div>
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p><img src="{{ asset('assets/images/faq/info.webp') }}" alt="image"></p>
                                            <p class="disc">
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
                                                </p>
                                            </div>
                                            <a class="rts-btn btn-primary-2 color-h-black" href="#">Contact Us</a>
                                        </div>
                                        <!-- start tab content End -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">
                                        <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p><img src="{{ asset('assets/images/faq/hospitality-1.webp') }}"
                                                    alt="image"></p>
                                            <p class="disc">
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
                                                </p>
                                            </div>
                                            <a class="rts-btn btn-primary-2 color-h-black" href="#">Contact Us</a>
                                        </div>
                                        <!-- start tab content End -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                        aria-labelledby="v-pills-messages-tab">
                                        <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p><img src="{{ asset('assets/images/faq/logistics.webp') }}" alt="image">
                                            </p>
                                            <p class="disc">
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
                                                </p>
                                            </div>
                                            <a class="rts-btn btn-primary-2 color-h-black" href="#">Contact Us</a>
                                        </div>
                                        <!-- start tab content End -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-manufacture" role="tabpanel"
                                        aria-labelledby="v-pills-manufacture-tab">
                                        <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p><img src="{{ asset('assets/images/faq/steel-factory.webp') }}"
                                                    alt="image"></p>
                                            <p class="disc">
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
                                                </p>
                                            </div>
                                            <a class="rts-btn btn-primary-2 color-h-black" href="#">Contact Us</a>
                                        </div>
                                        <!-- start tab content End -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-education" role="tabpanel"
                                        aria-labelledby="v-pills-education-tab">
                                        <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p><img src="{{ asset('assets/images/faq/education.webp') }}" alt="image">
                                            </p>
                                            <p class="disc">
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
                                                </p>
                                            </div>
                                            <a class="rts-btn btn-primary-2 color-h-black" href="#">Contact Us</a>
                                        </div>
                                        <!-- start tab content End -->
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-customer" role="tabpanel"
                                        aria-labelledby="v-pills-customer-tab">
                                        <!-- start tab content -->
                                        <div class="rts-tab-content-one">
                                            <p><img src="{{ asset('assets/images/faq/customer.webp') }}" alt="image">
                                            </p>
                                            <p class="disc">
                                                Massa laoreet lacinia placerat eleifend cs curae imperdiet mattis
                                                taciti, scelerisque elementum velit ullamcorper praesent enim temp
                                            </p>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Ultricies tellus cubilia at rutrum lobortis dui quis aliquam
                                                </p>
                                            </div>
                                            <div class="check-area">
                                                <i class="fas fa-check-circle"></i>
                                                <p class="disc">
                                                    Eu nisi quam senectus odio commodo quam pellente
                                                </p>
                                            </div>
                                            <a class="rts-btn btn-primary-2 color-h-black" href="#">Contact Us</a>
                                        </div>
                                        <!-- start tab content End -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start about our company End -->

    <!-- our working Process -->
    <div class="working-process-area rts-section-gap working-process-bg">
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
                                <img src="{{ asset('assets/images/working-step/icon/01.svg') }}" alt="Working_process">
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
                                <img src="{{ asset('assets/images/working-step/icon/02.svg') }}" alt="Working_process">
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
                                <img src="{{ asset('assets/images/working-step/icon/03.svg') }}" alt="Working_process">
                            </div>
                        </div>
                        <div class="content">
                            <h6 class="title">Business Growth</h6>
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
                                <img src="{{ asset('assets/images/working-step/icon/04.svg') }}" alt="Working_process">
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

    <!-- business case start -->
    <div class="rts-business-case rts-section-gap business-case-bg-2">
        <div class="container">
            <div class="row">
                <div class="title-area text-center business-case">
                    <span>Case Studies</span>
                    <h2 class="title">Specialist Business Cases</h2>
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

    <!-- start client review area start -->
    <div class="rts-client-review-two rts-section-gapTop bg-client-r-h2">
        <div class="container">
            <div class="row mt--30">
                <div class="title-area left-right testimonial-h2">
                    <div class="title-left">
                        <span>Our Testimonial</span>
                        <h2 class="title mt--15">
                            Our Client Reviews
                        </h2>
                    </div>
                    <div class="button-area">
                        <a href="#" class="rts-btn btn-primary-2">See All Reviews</a>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--20">
                <div class="col-12">
                    <div class="swiper mySwiperh2_clients">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- single client reviews -->
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/02.png') }}"
                                                alt="testimonials_area">
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
                                            <a href="#"><img
                                                    src="{{ asset('assets/images/testimonials/icon/logo-01.png') }}"
                                                    alt="Client_logo"></a>
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
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/03.png') }}"
                                                alt="testimonials_area">
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
                                            <a href="#"><img
                                                    src="{{ asset('assets/images/testimonials/icon/logo-02.png') }}"
                                                    alt="Client_logo"></a>
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
                                <div class="rts-client-reviews-h2">
                                    <div class="review-header">
                                        <a href="#" class="thumbnail">
                                            <img src="{{ asset('assets/images/testimonials/04.png') }}"
                                                alt="testimonials_area">
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
                                            <a href="#"><img
                                                    src="{{ asset('assets/images/testimonials/icon/logo-03.png') }}"
                                                    alt="Client_logo"></a>
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
    </div>
    <!-- start client review area end -->

    <!-- rts-pricing plane arae -->
    <div class="rts-pricing-plane rts-section-gap bg-pricing-bg-h2 margin-dec-padding-con">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="pricing-tab-button-area title-area pricing-h2">
                        <span>Price Plans</span>
                        <h2 class="title">Pricing & Plans</h2>
                        <p class="offer"><span>Save Over 25%</span> When You Select Annual Billing</p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                    aria-selected="true">Monthly PLan</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">Yearly
                                    Plan</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt--80">
                <div class="col-12">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
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
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
    <!-- rts-pricing plane arae End -->

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

    <!-- start project with us section -->
    <div class="rts-project-area eight bg-project-three margin-controlerproject mt_sm--0">
        <div class="container controler">
            <div class="row g-0 justify-content-center">
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
                    </div>
                    <!-- project area left wrapper end -->
                </div>
                <div class="col-lg-5">
                    <div class="bg-input-project">
                        <div class="product-form">
                            <div id="form-messages"></div>
                            <form id="contact-form" action="mailer.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Your Name" name="name" required>
                                    </div>
                                    <div class="col-lg-6 mt_md--20 mt_sm--20">
                                        <input type="email" placeholder="Your Email" name="email" required>
                                    </div>
                                    <div class="col-12 mt--20">
                                        <input type="text" placeholder="Your Website" name="subject">
                                    </div>
                                    <div class="col-12 mt--20">
                                        <textarea placeholder="Your Comment" name="message"></textarea>
                                    </div>
                                    <div class="col-12 mt--35">
                                        <button class="rts-btn btn-primary-3 color-h-black" type="submit">Get in
                                            Touch</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- start project with us section End -->

    <!-- start blog area -->
    <div class="rts-blog-area eight rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="title-area text-center blog">
                    <span>Blog & Article</span>
                    <h2 class="title">Recent blog post</h2>
                </div>
            </div>
            <div class="mySwiperh2_blog mt--20">
                <div class="swiper-wrapper">
                    <!-- single Post Start -->
                    <div class="swiper-slide">
                        <!-- single Post blog large -->
                        <div class="rts-blog-h-2-wrapper">
                            <a href="{{ route('blogDetailsPage') }}" class="thumbnail">
                                <img src="{{ asset('assets/images/blog/09.jpg') }}" alt="Business_blog">
                            </a>
                            <div class="body text-start">
                                <span>Business Solution / by David Dolean</span>
                                <a href="{{ route('blogDetailsPage') }}">
                                    <h4 class="title">Profitable business makes your profit and business scale in system
                                    </h4>
                                </a>
                            </div>
                        </div>
                        <!-- single Post blog large End -->
                    </div>
                    <!-- single Post End -->
                    <!-- single Post Start -->
                    <div class="swiper-slide">
                        <!-- single Post blog large -->
                        <div class="rts-blog-h-2-wrapper">
                            <a href="{{ route('blogDetailsPage') }}" class="thumbnail">
                                <img src="{{ asset('assets/images/blog/08.jpg') }}" alt="Business_blog">
                            </a>
                            <div class="body text-start">
                                <span>Business Solution / by David Dolean</span>
                                <a href="{{ route('blogDetailsPage') }}">
                                    <h4 class="title">Report current news in your business and corporate industry</h4>
                                </a>
                            </div>
                        </div>
                        <!-- single Post blog large End -->
                    </div>
                    <!-- single Post End -->
                    <!-- single Post Start -->
                    <div class="swiper-slide">
                        <!-- single Post blog large -->
                        <div class="rts-blog-h-2-wrapper">
                            <a href="{{ route('blogDetailsPage') }}" class="thumbnail">
                                <img src="{{ asset('assets/images/blog/08.jpg') }}" alt="Business_blog">
                            </a>
                            <div class="body text-start">
                                <span>Business Solution / by David Dolean</span>
                                <a href="{{ route('blogDetailsPage') }}">
                                    <h4 class="title">Do a weekly roundup of relevant news and profit for your software
                                        business</h4>
                                </a>
                            </div>
                        </div>
                        <!-- single Post blog large End -->
                    </div>
                    <!-- single Post End -->
                </div>
            </div>
        </div>
    </div>
    <!-- start blog area End -->

    <!-- start header area -->
    <!-- footer area start -->
    <div class="rts-footer-area rts-section-gap footer-two footer-bg-two mt--120 mt_md--80 mt_sm--60">
        <div class="container">
            <div class="row">
                <!-- single wized -->
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="footer-two-single-wized left">
                        <h3 class="title">
                            <span>Ready To</span> <br>
                            Work With Us?
                        </h3>
                        <p class="disc">
                            Felis consequat magnis est fames sagittis ultrices placerat sodales porttitor quisque.
                        </p>
                        <a class="rts-btn btn-primary-2 color-h-black" href="#">Get a Quote</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--50">
                    <div class="footer-two-single-wized two">
                        <div class="wized-title-area">
                            <h5 class="wized-title">Our Services</h5>
                            <img src="{{ asset('assets/images/footer/under-title-2.png') }}" alt="finbiz_footer">
                        </div>
                        <div class="wized-2-body">
                            <ul>
                                <li><a href="{{ route('serviceDetailsPage') }}"><i
                                            class="fal fa-chevron-double-right"></i>Business planning</a></li>
                                <li><a href="{{ route('serviceDetailsPage') }}"><i
                                            class="fal fa-chevron-double-right"></i>Tax strategy</a></li>
                                <li><a href="{{ route('serviceDetailsPage') }}"><i
                                            class="fal fa-chevron-double-right"></i>Financial advices</a></li>
                                <li><a href="{{ route('serviceDetailsPage') }}"><i
                                            class="fal fa-chevron-double-right"></i>Insurance strategy</a></li>
                                <li><a href="{{ route('serviceDetailsPage') }}"><i
                                            class="fal fa-chevron-double-right"></i>Manage investment</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
                <div class="col-xl-2 col-lg-6 col-md-6 col-sm-12 col-12 mt_sm--30 mt_md--30">
                    <div class="footer-two-single-wized">
                        <div class="wized-title-area">
                            <h5 class="wized-title">Contact Us</h5>
                            <img src="{{ asset('assets/images/footer/under-title-2.png') }}" alt="finbiz_footer">
                        </div>
                        <div class="wized-2-body">
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="disc">
                                    <span>Call Us 24/7</span>
                                    <a href="#">(+256) 2145.2156</a>
                                </div>
                            </div>
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="disc">
                                    <span>Work with us</span>
                                    <a href="#">info@finbiz.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
                <!-- single wized -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="footer-two-single-wized right">
                        <div class="wized-2-body">
                            <div class="contact-info-1">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="disc">
                                    <span>Our Location</span>
                                    <a href="#">XYZ Hilton Street, 125 Town <br>
                                        United State</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single wized -->
            </div>
        </div>
    </div>
    <!-- footer area end -->

    <!-- copyright-area start -->
    <div class="rts-copy-right ptb--30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-h-2-wrapper">
                        <p class="disc">
                            FINBIZ - Copyright 2022. All rights reserved.
                        </p>
                        <div class="right">
                            <ul>
                                <li><a href="{{ route('blogPage') }}">Company News</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="{{ route('contactPage') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright-area end -->
    <!-- ENd Header Area -->
@endsection
