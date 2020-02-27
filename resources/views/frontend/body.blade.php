@extends('frontend.master')
@section('content')
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
                                    <h4><a href="cause-details.html">Educations</a></h4>
                                    <div class="text">Foresee the pain and trouble that bound <br>to ensue and equal blame </div>
                                    
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
                                    <h4><a href="cause-details.html">Make Children happy</a></h4>
                                    <div class="text">Foresee the pain and trouble that bound <br>to ensue and equal blame </div>
                                    
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

    @include('frontend.includes.testimonials')
    
    @include('frontend.includes.events')

    <!-- Payment Donate Section -->
    <section class="payment-donate-section" style="background-image: url( {{ asset('frontend/images/background/bg-8.jpg') }} );">
        <div class="auto-container">
            <div class="sec-title text-center light">
                <h1>Play your part</h1>
                <div class="text">Every $1 you donate helps to someone in the world, EqualHopeFoundation safely handover  to who really needed that money.</div>
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
                <div class="text">We're here to keep you up-to-date with all the latest happenings at the EqualHopeFoundation</div>
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
                            <h4><a href="blog-details.html">Children's Happinnes depends on us</a></h4>
                            <div class="author-info">
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
                            <a href="blog-details.html"><img src="{{ asset('frontend/images/local/football.jpeg') }}" alt=""></a>
                            <div class="post-meta-info">
                                <a href="#"><span class="flaticon-eye"></span>14</a>
                                <a href="#"><span class="flaticon-comment"></span>05</a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <div class="date"><span class="flaticon-clock"></span>Jun 05, 2019</div>
                            <h4><a href="blog-details.html">Grooming Childrens Talents</a></h4>
                            <div class="author-info">
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
                            <h4><a href="blog-details.html">Urban Housing</a></h4>
                            <div class="author-info">
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
@endsection