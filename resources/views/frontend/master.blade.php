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

    @yield('content')

    @include('frontend.partials.footer')

    @include('frontend.includes.payment-section')

    

    @include('frontend.includes.donations')

</div>
<!--End pagewrapper-->



@include('frontend.partials.scripts')

</body>

<!-- Goodsoul_html/index-2.html  20 Nov 2019 03:28:36 GMT -->
</html>