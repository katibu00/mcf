<!DOCTYPE html>
<html lang="zxx">
    @php
    $settings = App\Models\Setting::first();
@endphp
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mujaddadi Care Foundation - @yield('pageTitle')</title>
    <link rel="icon" href="/frontend/logo.jpeg">

    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/frontend/css/slick.css">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="/frontend/css/fontawesome.min.css">
    <link rel="stylesheet" href="/frontend/css/slick-theme.css">
    <link rel="stylesheet" href="/frontend/css/odometer-theme.css">
    <!-- style -->
    <link rel="stylesheet" href="/frontend/css/style.css">
    <link rel="stylesheet" href="/frontend/css/style-dark.css">
    <!-- responsive -->
    <link rel="stylesheet" href="/frontend/css/responsive.css">
    <!-- color -->
    <link rel="stylesheet" href="/frontend/css/color.css">
</head>

<body>
    <div class="preloader">
        <div class="sec-loading">
            <div class="one">
            </div>
        </div>
    </div>
    <!-- theme color -->
    <div class="theme-color">
        <img src="/frontend/img/sun.png" alt="moon" id="theme-icon">
    </div>
    <!-- theme color end -->
    @include('frontend.layouts.header')

    @yield('content')
    <!-- footer -->
    @include('frontend.layouts.footer')
    <!-- footer end -->
    <!-- Back to top button -->
    <a id="button"></a>
    <!-- Back to top button end -->
    <!-- jQuery -->
    <script src="/frontend/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap Js -->
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/frontend/js/owl.carousel.min.js"></script>
    <script src="/frontend/js/slick.min.js"></script>
    <script src="/frontend/js/circle-progres.js"></script>
    <script src="/frontend/js/odometer.js"></script>
    <script>
        setTimeout(function() {
            odometer.innerHTML = jQuery('.odometer1').data("id");
            odometer2.innerHTML = jQuery('.odometer2').data("id");
            odometer3.innerHTML = jQuery('.odometer3').data("id");
        }, 2000);
    </script>
    <script src="/frontend/js/custom.js"></script>
</body>
