@extends('frontend.body')

@section('content')
        <!-- Page Title -->
        <section class="page-title" style="background-image:url({{ asset('frontend/images/local/football.jpeg') }})">
            <div class="auto-container">
                <div class="content-box">
                    <h1>Know About Us</h1>
                    <ul class="bread-crumb">
                        <li><a class="home" href="index-2.html"><span class="fa fa-home"></span></a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </section>

        @include('frontend.pages.about.history')

        @include('frontend.pages.about.funfacts')

        <!-- Why Choose Us Section -->
        <section class="whychoose-us-section">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sec-title">
                            <h1>Why sign up as a giver on <br>the Equal Hope Foundation?</h1>
                            <div class="text">We have a deep passion for the work that we do to improve the efficiency <br>and effectiveness of the non-profit sector.</div>
                        </div>
                        <div class="whychoose-us-block">
                            <div class="icon-box"><span class="flaticon-tick"></span></div>
                            <div class="content">
                                <h4>It’s super simple</h4>
                                <div class="text">Indignation and dislike men who are so beguiled and demoral <br>the charms of pleasure of the moment.</div>
                            </div>
                        </div>
                        <div class="whychoose-us-block">
                            <div class="icon-box"><span class="flaticon-tick"></span></div>
                            <div class="content">
                                <h4>It’s super simple</h4>
                                <div class="text">Indignation and dislike men who are so beguiled and demoral <br>the charms of pleasure of the moment.</div>
                            </div>
                        </div>
                        <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span>Let's Start</span></a></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-block">
                            <img src="{{ asset('frontend/images/local/mother-bathing.jpeg') }}" alt="">
                            <div class="contact-info-two">
                                <h5>Need assitant for <br>join with us?</h5>
                                <div class="icon-box"><span class="flaticon-phone-1"></span></div>
                                <div class="phone-number"><a href="+256 756667954">+256 756667954 <br> +256 773489300</a></div>
                            </div>
                            <div class="logo-box"><div class="image wow zoomIn" data-wow-delay="500ms"><img src="{{ asset('frontend/images/logo/black-logo.png') }}" alt=""></div></div>
                            <div class="video-box"><img src="{{ asset('frontend/images/local/mera-small.png') }}" alt=""><a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link lightbox-image video-fancybox video-btn"><span class="flaticon-multimedia-1"></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('frontend.pages.about.team')

        <!-- Client section -->
        {{-- <section class="client-section style-three">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h1>Who contributed with us?</h1>
                    <div class="text">The following  list of people contributed their 100%  support to help our thousands of causes.</div>
                </div>
                <div class="sponsors-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <div class="image" data-toggle="tooltip" data-placement="top" title="media partner"><a href="#"><img src="{{ asset('frontend/images/local/mera.png') }}" alt=""></a></div>
                    <div class="image" data-toggle="tooltip" data-placement="top" title="media partner"><a href="#"><img src="images/clients/client-2.png" alt=""></a></div>
                </div>
                <div class="text-two text-center">To learn about becoming a partner, contact us at: <a href="mailto:support@EqualHopeFoundation.com">support@EqualHopeFoundation.com</a> or <a href="tel:+8889991234">1-888-999-1234</a></div>
            </div>
        </section> --}}
@endsection
