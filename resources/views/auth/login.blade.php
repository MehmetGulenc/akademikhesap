<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Giriş Yap</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">
    <meta property="og:site_name" content="" />
    <meta property="og:site" content="" />
    <meta property="og:title" content=""/>
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="article" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext"
          rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/styles.css')}}" rel="stylesheet">
    <link href="{{asset('assets/sweet-alert/sweetalert2.min.css')}}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">

@include('front.loader')

@include('front.nav')


<header id="header" class="ex-2-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Yönetici Paneli</h1>
                {{--<p>Hesabınız yoksa<a class="white" href="sign-up.html">Kayıt Olun</a></p>--}}
                <!-- Sign Up Form -->
                <div class="form-container mt-4">
                    <form id="logInForm" method="post"  action="{{route('login')}}" data-toggle="validator" data-focus="false">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control-input" id="lemail" required>
                            <label class="label-control" for="lemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control-input" id="lpassword" required>
                            <label class="label-control" for="lpassword">Şifre</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Giriş Yap</button>
                        </div>
                        <div class="form-message">
                            <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Scripts -->
<script src="{{asset('assets/visitor-auth-temp/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/visitor-auth-temp/js/popper.min.js')}}"></script>
<script src="{{asset('assets/visitor-auth-temp/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/visitor-auth-temp/js/jquery.easing.min.js')}}"></script>
<!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{asset('assets/visitor-auth-temp/js/swiper.min.js')}}"></script>
<script src="{{asset('assets/visitor-auth-temp/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/js/validator.min.js')}}"></script>
<!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="{{asset('assets/visitor-auth-temp/js/scripts.js')}}"></script>
<script src="{{asset('assets/sweet-alert/sweetalert2.all.min.js')}}"></script>
</body>
</html>
