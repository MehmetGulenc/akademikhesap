<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <meta http-equiv="content-language" content="tr">
    <!-- SEO Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="revisit-after" content="7 Days">


    <title>@yield('title')</title>
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">


    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/styles.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/visitor-auth-temp/vendors/bootstrap-icons/bootstrap-icons.css')}}">

@yield('css')


<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">

</head>
<body data-spy="scroll" data-target=".fixed-top">


@include('front.nav')
<header id="header" class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>@yield('headerName')</h1>
            </div>
        </div>
    </div>
</header>
{{-- İçerik --}}

<div class="container mt-4">
<div class="row">
    <div class="col-md-12 mt-4">@yield('requirements')</div>
    <div class="col-md-7 mt-4 mb-5">@yield('content')</div>
    <div class="col-md-5 mt-4">@yield('category')</div>
</div>
</div>
{{--İçerik - end--}}





<svg class="footer-frame" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" viewBox="0 0 1920 79"><defs><style>.cls-2{fill:#5f4def;}</style></defs><title>footer-frame</title><path class="cls-2" d="M0,72.427C143,12.138,255.5,4.577,328.644,7.943c147.721,6.8,183.881,60.242,320.83,53.737,143-6.793,167.826-68.128,293-60.9,109.095,6.3,115.68,54.364,225.251,57.319,113.58,3.064,138.8-47.711,251.189-41.8,104.012,5.474,109.713,50.4,197.369,46.572,89.549-3.91,124.375-52.563,227.622-50.155A338.646,338.646,0,0,1,1920,23.467V79.75H0V72.427Z" transform="translate(0 -0.188)"/></svg>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-col first">
                    <h4>About Tivo</h4>
                    <p class="p-small">We're passionate about designing and developing one of the best marketing
                        apps in
                        the market</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-col middle">
                    <h4>Important Links</h4>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Our business partners <a class="white" href="#your-link">startupguide.com</a>
                            </div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i>
                            <div class="media-body">Read our <a class="white" href="terms-conditions.php">Terms &
                                    Conditions</a>, <a class="white" href="privacy-policy.php">Privacy Policy</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="footer-col last">
                    <h4>Contact</h4>
                    <ul class="list-unstyled li-space-lg p-small">
                        <li class="media">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="media-body">22 Innovative, San Francisco, CA 94043, US</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-envelope"></i>
                            <div class="media-body"><a class="white"
                                                       href="mailto:contact@tivo.com">contact@tivo.com</a>
                                <i class="fas fa-globe"></i><a class="white" href="#your-link">www.tivo.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Copyright -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="p-small">Copyright 2022, Mehmet Gülenç<br>
                </p>
            </div>
        </div>
    </div>
</div>




<!-- Scripts -->
<script src="{{asset('assets/visitor-auth-temp/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/visitor-auth-temp/js/popper.min.js')}}"></script>
<script src="{{asset('assets/visitor-auth-temp/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/visitor-auth-temp/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/visitor-auth-temp/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/visitor-auth-temp/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/visitor-auth-temp/js/validator.min.js')}}"></script>
<script src="{{asset('assets/visitor-auth-temp/js/scripts.js')}}"></script>
@yield('js')
</body>
</html>
