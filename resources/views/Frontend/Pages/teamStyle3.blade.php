@extends('Frontend.Layouts.app')

@section('title')
    Team Style 3 (Business Consultant)
@endsection
@section('content')
    <!-- start breadcrumb area -->
    <div class="rts-breadcrumb-area breadcrumb-bg bg_image">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 breadcrumb-1">
                    <h1 class="title">Team Style 3</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="bread-tag">
                        <a href="{{ route('home') }}">Home</a>
                        <span> / </span>
                        <a href="#" class="active">Team Style 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb area -->


    <!-- rts team two area -->
    <div class="rts-team-area style-3 rts-section-gap">
        <div class="container">
            <div class="row g-5 mt--20 mt_md--30 mt_sm--0">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-inner-two inner">
                        <div class="thumbnail">
                            <a href="{{ route('teamDetails') }}"><img src="{{ asset('assets/images/team/tm/06.jpg') }}"
                                    alt=""></a>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                        <div class="inner-content">
                            <div class="header">
                                <h5 class="title">Beckett Hayden</h5>
                                <span>UX DESIGNER</span>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-inner-two inner">
                        <div class="thumbnail">
                            <a href="{{ route('teamDetails') }}"><img src="{{ asset('assets/images/team/tm/07.jpg') }}"
                                    alt=""></a>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                        <div class="inner-content">
                            <div class="header">
                                <h5 class="title">Julian Wyat</h5>
                                <span>MANAGER</span>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-inner-two inner">
                        <div class="thumbnail">
                            <a href="{{ route('teamDetails') }}"><img src="{{ asset('assets/images/team/tm/08.jpg') }}"
                                    alt=""></a>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                        <div class="inner-content">
                            <div class="header">
                                <h5 class="title">Hake Mowana</h5>
                                <span>FOUNDER</span>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-inner-two inner">
                        <div class="thumbnail">
                            <a href="{{ route('teamDetails') }}"><img src="{{ asset('assets/images/team/tm/09.jpg') }}"
                                    alt=""></a>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                        <div class="inner-content">
                            <div class="header">
                                <h5 class="title">Oulian Miyako</h5>
                                <span>FINANCE MANAGER</span>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-inner-two inner">
                        <div class="thumbnail">
                            <a href="{{ route('teamDetails') }}"><img src="{{ asset('assets/images/team/tm/10.jpg') }}"
                                    alt=""></a>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                        <div class="inner-content">
                            <div class="header">
                                <h5 class="title">Alan Dosan</h5>
                                <span>DEPUTY MANAGER</span>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-inner-two inner">
                        <div class="thumbnail">
                            <a href="{{ route('teamDetails') }}"><img src="{{ asset('assets/images/team/tm/11.jpg') }}"
                                    alt=""></a>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                        <div class="inner-content">
                            <div class="header">
                                <h5 class="title">Stive Stikollo</h5>
                                <span>BUSINESS MANAGER</span>
                            </div>
                        </div>

                        <!-- Acquaintance area -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-inner-two inner">
                        <div class="thumbnail">
                            <a href="{{ route('teamDetails') }}"><img src="{{ asset('assets/images/team/tm/12.jpg') }}"
                                    alt=""></a>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                        <div class="inner-content">
                            <div class="header">
                                <h5 class="title">Archer Graham</h5>
                                <span>MARKETING EXECUTIVE</span>
                            </div>
                        </div>

                        <!-- Acquaintance area -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="team-inner-two inner">
                        <div class="thumbnail">
                            <a href="{{ route('teamDetails') }}"><img src="{{ asset('assets/images/team/tm/13.jpg') }}"
                                    alt=""></a>
                            <div class="social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                        <div class="inner-content">
                            <div class="header">
                                <h5 class="title">Amelia Clover</h5>
                                <span>MARKETING EXECUTIVE</span>
                            </div>
                        </div>
                        <!-- Acquaintance area -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts team two area End -->
@endsection
