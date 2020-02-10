@extends('frontend.site.index')
@section('content')
<div class="form-body">
    <canvas id="pagebg" resize></canvas>
    <div class="row">
        <div class="form-holder col-sm-12 col-md-6 col-lg-5">
            <div class="form-content">
                <div class="form-items">
                    <div class="form-row logo-social">
                        <div class="col-6">
                            <div class="website-logo-inside">
                                <a href="index.html">
                                    <div class="logo">
                                        <img class="logo-size" src="{{ asset('frontend/site/images/logo-light.svg') }}" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="other-links no-bg-icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <h3>Look out for our existance as Equal Hope Foundation </p>
                    <form class="form-row">
                        <input class="form-control" type="text" name="firstname" placeholder="Your Name" required>
                        <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                        <div class="form-button">
                            <button id="submit" type="submit" class="ibtn">Register now</button>
                        </div>
                    </form>

                    
                    <h5>Event will starts in</h5>
                    <div class="time-counter form-row other-style">
                        <div class="days count col">
                            <div class="num">38</div>
                            <div class="label">Days</div>
                        </div>
                        <div class="hours count col">
                            <div class="num">13</div>
                            <div class="label">Hrs</div>
                        </div>
                        <div class="minutes count col">
                            <div class="num">59</div>
                            <div class="label">Min</div>
                        </div>
                        <div class="seconds count col">
                            <div class="num">30</div>
                            <div class="label">Sec</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-holder-right col-sm-12 col-md-6 col-lg-7">
            <img src="{{ asset('frontend/site/images/graphic7.svg') }}" alt="">
        </div>
    </div>
</div>
@endsection