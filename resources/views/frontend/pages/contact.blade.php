@extends('frontend.master')

@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url(images/background/bg-13.jpg)">
        <div class="auto-container">
            <div class="content-box">
                <h1>Get Touch With Us</h1>
                <ul class="bread-crumb">
                    <li><a class="home" href="index-2.html"><span class="fa fa-home"></span></a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form-section">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="default-form-area">
                        <div class="sec-title">
                            <h1>Drop a line us</h1>
                        </div>
                        <form id="contact-form" name="contact_form" class="contact-form" action="http://steelthemes.com/demo/html/EqualHopeFoundation_html/inc/sendmail.php" method="post">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <input type="text" name="form_name" class="form-control" value="" placeholder="Name" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">
                                    <div class="form-group">
                                        <input type="email" name="form_email" class="form-control required email" value="" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <input type="text" name="form_phone" class="form-control" value="" placeholder="Phone" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 column">        
                                    <div class="form-group">
                                        <input type="text" name="form_subject" class="form-control" value="" placeholder="Subject" required="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 column">
                                    <div class="form-group">
                                        <textarea name="form_message" class="form-control textarea required" placeholder="Message...."></textarea>
                                    </div>
                                    <div class="form-group flex-box">
                                        <div class="submit-btn">
                                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button class="theme-btn btn-style-one" type="submit" data-loading-text="Please wait..."><span>Send Message</span></button>
                                        </div>
                                        <span class="hint">*Get answers to common questions through our help center.</span>
                                    </div>
                                </div>                                            
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-three">
                        <div class="single-info">
                            <h4>Equal Hope Foundation HQ</h4>
                            <div class="text">Naguru II Kasenke - Kampala</div>
                            <p>Naguru</p>                         
                        </div>
                        <div class="single-info">
                            <h4>Quick Contact</h4>
                            <div class="wrapper-box">
                                <a href="mailto:info@equalhoefoundation.org">info@equalhoefoundation.org </a> <br>
                                <a href="tel:+256756667954">+256 756667954 / +256 773489300</a>
                            </div>
                            {{-- <a class="link-btn" href="#">Get Call Back</a> --}}
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
    </section>

    <!-- Google Map -->
    <div class="google-map">
        <!--Map Canvas-->
        <div class="map-canvas"
            data-zoom="12"
            data-lat="0.340322"
            data-lng="32.605789"
            data-type="roadmap"
            data-hue="#1fb58f"
            data-title="Naguru Office"
            data-icon-path="{{ asset('frontend/images/icons/map-marker.png') }}"
            data-content="<p>Kasenke, Naguru <br> +256 756667954 & 11 <br> info@equalhoefoundation.org</p>">
        </div>
    </div>
@endsection