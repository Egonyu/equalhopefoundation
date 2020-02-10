<!DOCTYPE html>
<html lang="en">

@include('frontend.partials.head')

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader style-two"></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>
    
    @include('frontend.partials.nav')

    <!-- Hidden Sidebar -->
    <section class="hidden-sidebar style-two close-sidebar">
        <div class="wrapper-box">
            <div class="hidden-sidebar-close"><span class="flaticon-cross"></span></div>
            <div class="logo"><a href="#"><img src=" {{ asset('frontend/images/logo-3.png') }} " alt=""></a></div>
            <div class="content">
                <div class="about-widget-four sidebar-widget">
                    <h3>To improve learning environment in primary schools</h3>
                    <div class="text">We denounce with righteous indignation and dislike men who we are to beguiled demoralized by the charms of pleasures that moment, so we blinded desires, that they indignations.</div>
                </div>
                <!-- News Widget -->
                <div class="news-widget-two sidebar-widget">
                    <div class="widget-title">News & Updates</div>
                    <div class="post-wrapper">
                        <div class="image"><a href="blog-details.html"><img src=" {{ asset('frontend/images/resource/post-thumb-1.jpg') }} " alt=""></a></div>
                        <div class="category">LIFE SAVING</div>
                        <h4><a href="blog-details.html">Goodsoul partners with lafarge on national literacy competition</a></h4>
                    </div>
                    <div class="post-wrapper">
                        <div class="image"><a href="blog-details.html"><img src=" {{ asset('frontend/images/resource/post-thumb-2.jpg') }} " alt=""></a></div>
                        <div class="category">Education</div>
                        <h4><a href="blog-details.html">Goodsoul improves education infrastructure</a></h4>
                    </div>
                </div>
                <!-- Newsletter Widget -->
                <div class="newsletter-widget-two">
                    <div class="widget-title">Newsletter Subscription</div>
                    <form action="#">
                        <input type="email" placeholder="Enter Email Address">
                        <button class="theme-btn btn-style-one w-100"><i class="flaticon-next"></i><span>Subscribe Us</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Bnner Section -->
    <section class="banner-section style-two">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">
                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url( {{ asset('frontend/images/main-slider/greenleaf.jpg') }} );">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h4>Every good act counts</h4>
                                <h1>Charity is a simple <br>method to prove <br>kindness.</h1>
                                <div class="link-box"><a href="#" class="theme-btn btn-style-five"><span>Meet Volunteers</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url( {{ asset('frontend/images/main-slider/candle.jpg') }} );">
                    <div class="content-outer">
                        <div class="content-box justify-content-end">
                            <div class="inner">
                                <h4>Charity is everywhere</h4>
                                <h1>Actions speak <br>louder than words! <br>Give today.</h1>
                                <div class="link-box"><a href="#" class="theme-btn btn-style-five donate-box-btn"><span>Donate Now</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="swiper-slide" style="background-image: url( {{ asset('frontend/images/main-slider/6.jpg') }} );">
                    <div class="content-outer">
                        <div class="content-box">
                            <div class="inner">
                                <h4>Every good act counts</h4>
                                <h1>Charity is a simple <br>method to prove <br>kindness.</h1>
                                <div class="link-box"><a href="#" class="theme-btn btn-style-five"><span>Meet Volunteers</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-slider-pagination style-three"></div>
        </div>
    </section>
    <!-- End Bnner Section -->

    <!-- Causes Section Two -->
    <section class="causes-section-two">
        <div class="auto-container">
            <div class="cause-wrapper">
                <div class="row">
                    <!-- Cause Block two -->
                    <div class="cause-block-two col-lg-4">
                        <div class="inner-box">
                            <div class="image">
                                <img src=" {{ asset('frontend/images/local/classes.jpeg') }} " alt="">
                                <div class="overlay">
                                    <a href="cause-details.html" class="theme-btn btn-style-seven"><span>More Details</span></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <!--Progress Levels-->
                                <div class="progress-levels style-two">
                                            
                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper-box">
                                    <h4><a href="cause-details.html">Help girls education</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cause Block two -->
                    <div class="cause-block-two col-lg-4">
                        <div class="inner-box">
                            <div class="image">
                                <img src=" {{ asset('frontend/images/resource/cause-5.jpg') }} " alt="">
                                <div class="overlay">
                                    <a href="cause-details.html" class="theme-btn btn-style-seven"><span>More Details</span></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <!--Progress Levels-->
                                <div class="progress-levels style-two">
                                            
                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="82"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper-box">
                                    <h4><a href="contact">Bolanile fight cancer</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cause Block two -->
                    <div class="cause-block-two col-lg-4">
                        <div class="inner-box">
                            <div class="image">
                                <img src=" {{ asset('frontend/images/local/football.jpeg') }} " alt="">
                                <div class="overlay">
                                    <a href="cause-details.html" class="theme-btn btn-style-seven"><span>More Details</span></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <!--Progress Levels-->
                                <div class="progress-levels style-two">
                                            
                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="52"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper-box">
                                    <h4><a href="cause-details.html">Donation for helpless people</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>

    <!-- Feature Section -->
    <section class="feature-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Live as a human being</h1>
                <div class="text">The right way to live as a human being, Just help to those people who really need your help.</div>
            </div>
            <div class="row">
                <!-- Feature Block Two -->
                <div class="col-lg-3 col-md-6 feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src=" {{ asset('frontend/images/icons/icon-6.png') }} " alt="">
                        </div>
                        <h4>Become a Volunteer</h4>
                        <div class="overlay" style="background-image: url( {{ asset('frontend/images/background/bg-2.jpg') }} );">
                            <h4>Become a Volunteer</h4>
                            <div class="text">Indignation and dislike mens all <br>beguiled demoralized. </div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-five"><span>More Details</span></a></div>
                        </div>
                    </div>
                </div>
                <!-- Feature Block Two -->
                <div class="col-lg-3 col-md-6 feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src=" {{ asset('frontend/images/icons/icon-7.png') }} " alt="">
                        </div>
                        <h4>Shelter for Homeless</h4>
                        <div class="overlay" style="background-image: url( {{ asset('frontend/images/background/bg-2.jpg') }} );">
                            <h4>Shelter for Homeless</h4>
                            <div class="text">Indignation and dislike mens all <br>beguiled demoralized. </div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-five"><span>More Details</span></a></div>
                        </div>
                    </div>
                </div>
                <!-- Feature Block Two -->
                <div class="col-lg-3 col-md-6 feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src=" {{ asset('frontend/images/icons/icon-8.png') }} " alt="">
                        </div>
                        <h4>Make World Happier</h4>
                        <div class="overlay" style="background-image: url( {{ asset('frontend/images/background/bg-2.jpg') }} );">
                            <h4>Make World Happier</h4>
                            <div class="text">Indignation and dislike mens all <br>beguiled demoralized. </div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-five"><span>More Details</span></a></div>
                        </div>
                    </div>
                </div>
                <!-- Feature Block Two -->
                <div class="col-lg-3 col-md-6 feature-block-two">
                    <div class="inner-box">
                        <div class="icon-box">
                            <img src=" {{ asset('frontend/images/icons/icon-9.png') }} " alt="">
                        </div>
                        <h4>Give Helthy Life</h4>
                        <div class="overlay" style="background-image: url( {{ asset('frontend/images/background/bg-2.jpg') }} );">
                            <h4>Give Helthy Life</h4>
                            <div class="text">Indignation and dislike mens all <br>beguiled demoralized. </div>
                            <div class="link-btn"><a href="#" class="theme-btn btn-style-five"><span>More Details</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="call-to-action">
            <div class="auto-container">
                <div class="wrapper-box">
                    <div class="left-content">
                        <h3>You have the power to bring happiness.</h3>
                        <div class="text">Expound the actual teachings of the great explorer of the truth, the masterr of human happiness.</div>
                    </div>
                    <div class="right-content">
                        <a href="#" class="theme-btn btn-style-five"><span>Meet Our Team</span></a>
                    </div>
                </div>
            </div>                
        </div>
    </section>

    <!-- Causes Section Three -->
    <section class="causes-section-three" style="background-image: url( {{ asset('frontend/images/background/bg-3.jpg') }} );">
        <div class="auto-container">
            <div class="cause-carousel-wrapper">
                <div class="single-item-carousel owl-theme owl-carousel owl-dot-style-one owl-nav-none">
                    <!-- Cause Block three -->
                    <div class="cause-block-three">
                        <div class="inner-box">
                            <div class="image">
                                <img src=" {{ asset('frontend/images/local/football.jpeg') }} " alt="">
                            </div>
                            <div class="content-wrapper">
                                <!--Progress Levels-->
                                <div class="progress-levels style-two">
                                            
                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="cause-details.html">Make somalians happy</a></h4>
                                    <div class="text">Foresee the pain and trouble that bound <br>to ensue and equal blame </div>
                                    <ul class="info-box">
                                        <li><a href="#"><span>Raised:</span> <br>$72000</a></li>
                                        <li><a href="#"><span>Goal:</span> <br>$100000</a></li>
                                    </ul>
                                    <div class="donate-btn"><a href="#" class="theme-btn btn-style-eight donate-box-btn"><span>Donate Now</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cause Block three -->
                    <div class="cause-block-three">
                        <div class="inner-box">
                            <div class="image">
                                <img src=" {{ asset('frontend/images/local/classes.jpeg') }} " alt="">
                            </div>
                            <div class="content-wrapper">
                                <!--Progress Levels-->
                                <div class="progress-levels style-two">
                                            
                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="cause-details.html">Make somalians happy</a></h4>
                                    <div class="text">Foresee the pain and trouble that bound <br>to ensue and equal blame </div>
                                    <ul class="info-box">
                                        <li><a href="#"><span>Raised:</span> <br>$92000</a></li>
                                        <li><a href="#"><span>Goal:</span> <br>$120000</a></li>
                                    </ul>
                                    <div class="donate-btn"><a href="#" class="theme-btn btn-style-eight donate-box-btn"><span>Donate Now</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Cause Block three -->
                    <div class="cause-block-three">
                        <div class="inner-box">
                            <div class="image">
                                <img src=" {{ asset('frontend/images/resource/cause-7.jpg') }} " alt="">
                            </div>
                            <div class="content-wrapper">
                                <!--Progress Levels-->
                                <div class="progress-levels style-two">
                                            
                                    <!--Skill Box-->
                                    <div class="progress-box wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                                        <div class="inner">
                                            <div class="bar">
                                                <div class="bar-innner"><div class="bar-fill" data-percent="60"><div class="percent"></div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="cause-details.html">Make somalians happy</a></h4>
                                    <div class="text">Foresee the pain and trouble that bound <br>to ensue and equal blame </div>
                                    <ul class="info-box">
                                        <li><a href="#"><span>Raised:</span> <br>$92000</a></li>
                                        <li><a href="#"><span>Goal:</span> <br>$120000</a></li>
                                    </ul>
                                    <div class="donate-btn"><a href="#" class="theme-btn btn-style-eight donate-box-btn"><span>Donate Now</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="projects-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Projects we have done</h1>
                <div class="text">The right way to live as a human being, Just help to those people really need your help.</div>
            </div>
            <div class="row">
                <!-- Project Block One -->
                <div class="col-lg-6 col-md-12 project-block-one">
                    <div class="inner-box">
                        <div class="image">
                            <img src=" {{ asset('frontend/images/resource/project-1.jpg') }} " alt="">
                            <div class="icon-box">
                                <span class="flaticon-maid"></span>
                            </div>
                        </div>
                        <h3><a href="#">Children</a></h3>
                    </div>
                </div>
                <!-- Project Block One -->
                <div class="col-lg-6 col-md-12 project-block-one">
                    <div class="inner-box">
                        <div class="image">
                            <img src=" {{ asset('frontend/images/resource/project-2.jpg') }} " alt="">
                            <div class="icon-box">
                                <span class="flaticon-maid"></span>
                            </div>
                        </div>
                        <h3><a href="#">Women & Girls</a></h3>
                    </div>
                </div>
                <!-- Project Block One -->
                <div class="col-lg-4 col-md-6 project-block-one">
                    <div class="inner-box">
                        <div class="image">
                            <img src=" {{ asset('frontend/images/resource/project-3.jpg') }} " alt="">
                            <div class="icon-box">
                                <span class="flaticon-maid"></span>
                            </div>
                        </div>
                        <h3><a href="#">Education</a></h3>
                    </div>
                </div>
                <!-- Project Block One -->
                <div class="col-lg-4 col-md-6 project-block-one">
                    <div class="inner-box">
                        <div class="image">
                            <img src=" {{ asset('frontend/images/resource/project-4.jpg') }} " alt="">
                            <div class="icon-box">
                                <span class="flaticon-maid"></span>
                            </div>
                        </div>
                        <h3><a href="#">Hunger</a></h3>
                    </div>
                </div>
                <!-- Project Block One -->
                <div class="col-lg-4 col-md-6 project-block-one">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ asset('frontend/images/resource/project-5.jpg') }}" alt="">
                            <div class="icon-box">
                                <span class="flaticon-maid"></span>
                            </div>
                        </div>
                        <h3><a href="#">Medical</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="sec-bg-one" style="background-image: url( {{ asset('frontend/images/background/bg-6.jpg') }}  );"></div>
        <div class="sec-bg-two" style="background-image: url( {{ asset('frontend/images/background/gm.jpg') }} );"></div>
        <div class="auto-container">
            <div class="row align-items-lg-center justify-content-lg-between">
                <div class="col-lg-8">
                    <div class="testimonial-carousel-wrapper">
                        <div class="single-item-carousel owl-carousel owl-theme">
                            <div class="testimonial-block-one">
                                <div class="inner-box">
                                    <div class="author-box">
                                        <div class="author-info">
                                            <div class="image"><img src="{{ asset('frontend/images/resource/client-thumb-1.jpg') }}" alt=""></div>
                                            <div class="author-title">Merhawi Yemane Bokretsion</div>
                                            <div class="designation">CEO & Founder</div>
                                            <div class="logo"><img src="{{ asset('frontend/images/clients/client-3.png') }}" alt=""></div>
                                        </div>                                            
                                    </div>
                                    <div class="content-box">
                                        <h4>It’s helped me so much. Now I can <br>really get around office.</h4>
                                        <div class="text">Goodsoul! is focused and disciplined in their approach with proven track record of delivering measurable change. Always we support them people.</div>
                                        <div class="rating">
                                            <a href="#"><span class="fa fa-star"></span></a>
                                            <a href="#"><span class="fa fa-star"></span></a>
                                            <a href="#"><span class="fa fa-star"></span></a>
                                            <a href="#"><span class="fa fa-star"></span></a>
                                            <a href="#"><span class="fa fa-star"></span></a>
                                        </div>
                                        <div class="quote"><span class="flaticon-quote"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-block-one">
                                <div class="inner-box">
                                    <div class="author-box">
                                        <div class="author-info">
                                            <div class="image"><img src="{{ asset('frontend/images/resource/client-thumb-1.jpg') }}" alt=""></div>
                                            <div class="author-title">Isaac Samuel</div>
                                            <div class="designation">CEO & Founder <a href="#">Budget Fin</a></div>
                                            <div class="logo"><img src="{{ asset('frontend/images/clients/client-4.png') }}" alt=""></div>
                                        </div>
                                    </div>
                                    <div class="content-box">
                                        <h4>It’s helped me so much. Now I can <br>really get around office.</h4>
                                        <div class="text">Goodsoul! is focused and disciplined in their approach with proven track record of delivering measurable change. Always we support them people.</div>
                                        <div class="rating">
                                            <a href="#"><span class="fa fa-star"></span></a>
                                            <a href="#"><span class="fa fa-star"></span></a>
                                            <a href="#"><span class="fa fa-star"></span></a>
                                            <a href="#"><span class="fa fa-star"></span></a>
                                            <a href="#"><span class="fa fa-star"></span></a>
                                        </div>
                                        <div class="quote"><span class="flaticon-quote"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>                    
                </div>
                <div class="col-lg-4">
                    <div class="default-video-box">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link lightbox-image video-fancybox ripple"><span class="flaticon-multimedia-1"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section Two -->
    <section class="events-section-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Our exciting events</h1>
                <div class="text">Here are our exciting events...would be great to see you at the next one!</div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="event-block-two">
                        <div class="inner-box">
                            <div class="image"><a href="event-details.html"><img src="{{ asset('frontend/images/resource/event-4.jpg') }}" alt=""></a></div>
                            <div class="lower-content">
                                <div class="countdown-timer">
                                    <div class="default-coundown">
                                        <div class="box">
                                            <div class="countdown time-countdown-two" data-countdown-time="2019/12/28"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="event-info">
                                    <div class="time"><span class="flaticon-clock"></span>05 Oct 2019, 09.00am</div>
                                    <div class="location"><span class="flaticon-point"></span>24, Red rose Steet, NY</div>
                                </div>
                                <h3><a href="event-details.html">West midlands brain game for womens</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-block-three">
                        <div class="inner-box">
                            <div class="image"><a href="event-details.html"><img src="{{ asset('frontend/images/resource/event-5.jpg') }}" alt=""></a></div>
                            <div class="content">
                                <div class="toggle-btn"><span class="fa fa-plus"></span></div>
                                <h4><a href="event-details.html">Medfest 2019 - Bristol</a></h4>
                                <div class="time"><span class="flaticon-clock"></span>24 Dec 2019, 10.00am</div>
                                <div class="text">Beguiled and demoralized by the charms of <br>pleasure of the moment.</div>
                            </div>
                            <a href="event-details.html" class="join-btn">Join Now</a>
                        </div>
                    </div>
                    <div class="event-block-three">
                        <div class="inner-box">
                            <div class="image"><a href="event-details.html"><img src="{{ asset('frontend/images/resource/event-6.jpg') }}" alt=""></a></div>
                            <div class="content">
                                <div class="toggle-btn"><span class="fa fa-plus"></span></div>
                                <h4><a href="event-details.html">Medfest 2019 - Bristol</a></h4>
                                <div class="time"><span class="flaticon-clock"></span>24 Dec 2019, 10.00am</div>
                                <div class="text">Beguiled and demoralized by the charms of <br>pleasure of the moment.</div>
                            </div>
                            <a href="event-details.html" class="join-btn">Join Now</a>
                        </div>
                    </div>
                    <div class="event-block-three">
                        <div class="inner-box">
                            <div class="image"><a href="event-details.html"><img src="{{ asset('frontend/images/resource/event-7.jpg') }}" alt=""></a></div>
                            <div class="content">
                                <div class="toggle-btn"><span class="fa fa-plus"></span></div>
                                <h4><a href="event-details.html">Medfest 2019 - Bristol</a></h4>
                                <div class="time"><span class="flaticon-clock"></span>24 Dec 2019, 10.00am</div>
                                <div class="text">Beguiled and demoralized by the charms of <br>pleasure of the moment.</div>
                            </div>
                            <a href="event-details.html" class="join-btn">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Payment Donate Section -->
    <section class="payment-donate-section" style="background-image: url( {{ asset('frontend/images/background/bg-8.jpg') }} );">
        <div class="auto-container">
            <div class="sec-title text-center light">
                <h1>Play your part</h1>
                <div class="text">Every $1 you donate helps to someone in the world, Goodsoul safely handover  to who really needed that money.</div>
            </div>
            <form action="#">
                <ul class="chicklet-list clearfix text-center">
                    <li>
                        <input type="radio" id="donate-amount-5" name="donate-amount" />
                        <label for="donate-amount-5" data-amount="10" >$10</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-6" name="donate-amount" checked="checked" />
                        <label for="donate-amount-6" data-amount="20">$20</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-7" name="donate-amount" />
                        <label for="donate-amount-7" data-amount="50">$50</label>
                    </li>
                    <li>
                        <input type="radio" id="donate-amount-8" name="donate-amount" />
                        <label for="donate-amount-8" data-amount="100">$100</label>
                    </li>
                </ul>
                <div class="other-amount d-flex align-items-center justify-content-center">
                    <div class="form-group"><input type="text" placeholder="Custom Amount"></div>
                    <button class="theme-btn btn-style-five" type="submit"><span>Donate Now</span></button>
                </div>
                    
            </form>
        </div>
    </section>

    <!-- Volunteer Section Two -->
    <section class="volunteer-section-two" style="background-image: url( {{ asset('frontend/images/background/bg-7.jpg') }} );">
        <div class="auto-container">
            <div class="volunteer-carousel">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="swiper-container volunteer-image">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="author-thumb"><img src=" {{ asset('frontend/images/resource/image-12.jpg') }} " alt=""></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="author-thumb"><img src=" {{ asset('frontend/images/resource/image-12.jpg') }} " alt=""></div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="author-thumb"><img src=" {{ asset('frontend/images/resource/image-12.jpg') }} " alt=""></div>
                                </div>
                            </div>
                            <div class="swiper-nav-button">
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                                <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="swiper-container volunteer-content">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!-- Volunteer Block -->
                                    <div class="volunteer-block">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-love"></span></div>
                                            <h1>Caring is the gift of making <br>the ordinary special.</h1>
                                            <h4><span class="flaticon-next"></span>Complete our online registration form:</h4>
                                            <ul class="list">
                                                <li>With righteous indignation and dislike</li>
                                                <li>Perfectly simple and easy</li>
                                                <li>Have to be repudiated & annoyances</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Volunteer Block -->
                                    <div class="volunteer-block">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-love"></span></div>
                                            <h1>Caring is the gift of making <br>the ordinary special.</h1>
                                            <h4><span class="flaticon-next"></span>Complete our online registration form:</h4>
                                            <ul>
                                                <li>With righteous indignation and dislike</li>
                                                <li>Perfectly simple and easy</li>
                                                <li>Have to be repudiated & annoyances</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <!-- Volunteer Block -->
                                    <div class="volunteer-block">
                                        <div class="inner-box">
                                            <div class="icon-box"><span class="flaticon-love"></span></div>
                                            <h1>Caring is the gift of making <br>the ordinary special.</h1>
                                            <h4><span class="flaticon-next"></span>Complete our online registration form:</h4>
                                            <ul>
                                                <li>With righteous indignation and dislike</li>
                                                <li>Perfectly simple and easy</li>
                                                <li>Have to be repudiated & annoyances</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-counter-two">
                                <div id="current">01</div>
                                <div id="total"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h1>Recent blog post</h1>
                <div class="text">We're here to keep you up-to-date with all the latest happenings at the goodsoul</div>
            </div>
            <div class="row">
                <!-- News Block Two -->
                <div class="col-lg-4 news-block-two">
                    <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                        <div class="image">
                            <div class="category"><a href="#">Tips & Advice</a></div>
                            <a href="blog-details.html"><img src="{{ asset('frontend/images/resource/news-5.jpg') }}" alt=""></a>
                            <div class="post-meta-info">
                                <a href="#"><span class="flaticon-eye"></span>21</a>
                                <a href="#"><span class="flaticon-comment"></span>08</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="date"><span class="flaticon-clock"></span>Jul 14, 2019</div>
                            <h4><a href="blog-details.html">Water is more essential</a></h4>
                            <div class="author-info">
                                <div class="image"><img src="{{ asset('frontend/images/resource/author-thumb-1.jpg') }}" alt=""></div>
                                <div class="author-title"><a href="#">Rubin Santro</a></div>
                                <div class="share-icon style-two post-share-icon">
                                    <div class="share-btn"><img src=" {{ asset('frontend/images/resource/dotted.png') }} " alt=""></div>
                                    <ul>
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- News Block Two -->
                <div class="col-lg-4 news-block-two">
                    <div class="inner-box wow fadeInDown" data-wow-delay="400ms">
                        <div class="image">
                            <div class="category"><a href="#">Interviews</a></div>
                            <a href="blog-details.html"><img src="{{ asset('frontend/images/resource/news-6.jpg') }}" alt=""></a>
                            <div class="post-meta-info">
                                <a href="#"><span class="flaticon-eye"></span>14</a>
                                <a href="#"><span class="flaticon-comment"></span>05</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="date"><span class="flaticon-clock"></span>Jun 05, 2019</div>
                            <h4><a href="blog-details.html">Coaching for fundraisers</a></h4>
                            <div class="author-info">
                                <div class="image"><img src="{{ asset('frontend/images/resource/author-thumb-1.jpg') }}" alt=""></div>
                                <div class="author-title"><a href="#">Carl Ronny</a></div>
                                <div class="share-icon style-two post-share-icon">
                                    <div class="share-btn"><img src=" {{ asset('frontend/images/resource/dotted.png') }} " alt=""></div>
                                    <ul>
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- News Block Two -->
                <div class="col-lg-4 news-block-two">
                    <div class="inner-box wow fadeInUp" data-wow-delay="200ms">
                        <div class="image">
                            <div class="category"><a href="#">Disaster</a><a href="#">Video</a></div>
                            <a href="blog-details.html"><img src="{{ asset('frontend/images/resource/news-7.jpg') }}" alt=""></a>
                            <div class="post-meta-info">
                                <a href="#"><span class="flaticon-eye"></span>12</a>
                                <a href="#"><span class="flaticon-comment"></span>02</a>
                            </div>
                            <div class="youtube-video-box"><a href="#"><span class="flaticon-logo"></span></a></div>
                        </div>
                        <div class="lower-content">
                            <div class="date"><span class="flaticon-clock"></span>Mar 27, 2019</div>
                            <h4><a href="blog-details.html">Aid for japan flood</a></h4>
                            <div class="author-info">
                                <div class="image"><img src="{{ asset('frontend/images/resource/author-thumb-1.jpg') }}" alt=""></div>
                                <div class="author-title"><a href="#">Gene Emery</a></div>
                                <div class="share-icon style-two post-share-icon">
                                    <div class="share-btn"><img src=" {{ asset('frontend/images/resource/dotted.png') }} " alt=""></div>
                                    <ul>
                                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fa fa-skype"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.partials.footer')

    <!-- Via Payment Section -->
    <section class="via-payment-section" style="background-image: url( {{ asset('frontend/images/background/bg-9.jpg') }} );">
        <div class="auto-container">
            <h5>How can you donate</h5>
            <h1>Our donars can donate online <br>in different ways </h1>
            <div class="five-item-carousel owl-theme owl-carousel owl-nav-none owl-dots-none">
                <div class="image"><a href="#"><img src=" {{ asset('frontend/images/resource/payment-method-1.png') }} " alt=""></a></div>
                <div class="image"><a href="#"><img src=" {{ asset('frontend/images/resource/payment-method-2.png') }} " alt=""></a></div>
                <div class="image"><a href="#"><img src=" {{ asset('frontend/images/resource/payment-method-3.png') }} " alt=""></a></div>
                <div class="image"><a href="#"><img src=" {{ asset('frontend/images/resource/payment-method-4.png') }} " alt=""></a></div>
                <div class="image"><a href="#"><img src=" {{ asset('frontend/images/resource/payment-method-5.png') }} " alt=""></a></div>
                <div class="image"><a href="#"><img src=" {{ asset('frontend/images/resource/payment-method-1.png') }} " alt=""></a></div>
                <div class="image"><a href="#"><img src=" {{ asset('frontend/images/resource/payment-method-2.png') }} " alt=""></a></div>
                <div class="image"><a href="#"><img src=" {{ asset('frontend/images/resource/payment-method-3.png') }} " alt=""></a></div>
                <div class="image"><a href="#"><img src=" {{ asset('frontend/images/resource/payment-method-4.png') }} " alt=""></a></div>
                <div class="image"><a href="#"><img src=" {{ asset('frontend/images/resource/payment-method-5.png') }} " alt=""></a></div>
            </div>
        </div>
    </section>

    

    <div id="donate-popup" class="donate-popup style-two">
        
        <div class="popup-overlay"></div>

        <div class="donate-form-area">
            <div class="donate-form-wrapper">
                <div class="close-donate theme-btn"><span class="flaticon-close"></span></div>
                <div class="sec-title text-center">
                    <h1>Donate us to achive our goal</h1>
                    <div class="text">Beguiled and demoralized by the charms of pleasure of the moment, so by desire, <br>that they cannot foresee.</div>
                </div>

                <form  action="#" class="donate-form default-form">
                    <ul class="chicklet-list clearfix">
                        <li>
                            <input type="radio" id="donate-amount-1" name="donate-amount" />
                            <label for="donate-amount-1" data-amount="10" >$10</label>
                        </li>
                        <li>
                            <input type="radio" id="donate-amount-2" name="donate-amount" checked="checked" />
                            <label for="donate-amount-2" data-amount="20">$20</label>
                        </li>
                        <li>
                            <input type="radio" id="donate-amount-3" name="donate-amount" />
                            <label for="donate-amount-3" data-amount="50">$50</label>
                        </li>
                        <li>
                            <input type="radio" id="donate-amount-4" name="donate-amount" />
                            <label for="donate-amount-4" data-amount="100">$100</label>
                        </li>
                        <li class="other-amount">

                            <div class="input-container" data-message="Every dollar you donate helps end hunger."><input type="text" id="other-amount" placeholder="Other Amount"  />
                            </div>
                        </li>
                    </ul>

                    <h3>Donor Information</h3>

                    <div class="contact-form">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="fname" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="fname" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="fname" placeholder="Contact">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <select class="filters-selec form-controlt selectmenu" name="form_subject">
                                        <option value="*">Payment Via</option>
                                        <option value=".category-1">Cash</option>
                                        <option value=".category-2">Card</option>
                                        <option value=".category-2">Bank Transfer</option>
                                        <option value=".category-2">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <button class="theme-btn btn-style-one" type="submit"><span>Donate Now</span></button>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">
                                            <span>I would like to donate automatically repeat each month</span>
                                        </label>
                                    </div>
                                </div>
                            </div>  

                        </div>
                    </div>
                </form>
            </div>
                
        </div>
    </div>

</div>
<!--End pagewrapper-->



@include('frontend.partials.scripts')

</body>

<!-- Goodsoul_html/index-2.html  20 Nov 2019 03:28:36 GMT -->
</html>