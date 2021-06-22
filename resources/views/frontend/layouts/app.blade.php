<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title') | {{ setting('site.title') }}</title>
    <meta name="description" content="{{ setting('site.description') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="{{ setting('site.title') }}">
    <meta property="og:description" content="{{ setting('site.description') }}">
    <meta property="og:image" content="{{ Voyager::image(setting('site.bg_beranda')) }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url('/') }}">
    <meta property="twitter:title" content="{{ setting('site.title') }}">
    <meta property="twitter:description" content="{{ setting('site.description') }}">
    <meta property="twitter:image" content="{{ Voyager::image(setting('site.bg_beranda')) }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{ Voyager::image(setting('site.logo')) }}">
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap/css/bootstrap.min.css') }}">
       <link rel="stylesheet" href="{{ asset('frontend/assets/niceselectpicker/nice-select.css') }}">
       <link rel="stylesheet" href="{{ asset('frontend/assets/slick/slick.css') }}">
       <link rel="stylesheet" href="{{ asset('frontend/assets/slick/slick-theme.css') }}">
       <!-- icon css-->
       <link rel="stylesheet" href="{{ asset('frontend/assets/elagent-icon/style.css') }}">
       <link rel="stylesheet" href="{{ asset('assets/font-awesome/css/all.css') }}">
       <link rel="stylesheet" href="{{ asset('frontend/assets/animation/animate.css') }}">
       <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
       <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    @stack('styles')
</head>

<body data-spy="scroll" data-offset="86" data-scroll-animation="true">
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="round_spinner">
                    <div class="spinner"></div>
                    <div class="text">
                        <img src="img/spinner_logo.png" alt="">
                        <h4><span>SP</span>BE</h4>
                    </div>
                </div>
            </div>
        </div>
    <!-- preloader end -->
    @include('frontend.layouts.header')


    @yield('main-content')

    <!-- start footer section -->
    @include('frontend.layouts.footer')
    <!-- end footer section -->
    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- Pake jquery yg full -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/pre-loader.js') }}"></script>
    <script src="{{ asset('frontend/assets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/niceselectpicker/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/slick/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/parallaxie.js') }}"></script>
    <script src="{{ asset('frontend/js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.parallax-scroll.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.wavify.js') }}"></script>
    <script src="{{ asset('frontend/assets/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/counterup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('frontend/../../../cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    {{-- API Visitor --}}
    <script>
        $.post("{{ url('api/visitor') }}", function(data) {});

    </script>
    @stack('scripts')

</body>

</html>
