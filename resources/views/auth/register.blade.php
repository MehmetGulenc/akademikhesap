<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Kayıt Ol</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext"
          rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/swiper.css')}}" rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('assets/visitor-auth-temp/css/styles.css')}}" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">

@include('front.loader')

@include('front.nav')


<!-- Header -->
<header id="header" class="ex-2-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Kayıt Ol</h1>
                <p>Kaydolmak için aşağıdaki formu doldurun. Zaten hesabınız varsa <a class="white" href="{{route('login')}}}">Giriş Yapın</a></p>
                <!-- Sign Up Form -->
                <div class="form-container">
                    <form id="signUpForm" action="{{route('register')}}" method="post" data-toggle="validator" data-focus="false">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control-input" id="semail" required>
                            <label class="label-control" for="semail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control-input" id="sname" required>
                            <label class="label-control" for="sname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="password" class="form-control-input" id="spassword" required>
                            <label class="label-control" for="spassword">Password</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" name="password_confirmation" class="form-control-input" id="spassword" required>
                            <label class="label-control" for="spassword">Password Confirmation</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="sterms" value="Agreed-to-Terms" required>I agree with Tivo's <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Kayıt Ol</button>
                        </div>
                        <div class="form-message">
                            <div id="smsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</header>



<!-- Scripts -->
<script src="{{asset('assets/visitor-auth-temp/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
<script src="{{asset('assets/visitor-auth-temp/js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
<script src="{{asset('assets/visitor-auth-temp/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
<script src="{{asset('assets/visitor-auth-temp/js/jquery.easing.min.js')}}"></script>
<!-- jQuery Easing for smooth scrolling between anchors -->
<script src="{{asset('assets/visitor-auth-temp/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
<script src="{{asset('assets/visitor-auth-temp/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
{{--<script src="{{asset('assets/js/validator.min.js')}}"></script>--}}
<!-- Validator.js - Bootstrap plugin that validates forms -->
<script src="{{asset('assets/visitor-auth-temp/js/scripts.js')}}"></script> <!-- Custom scripts -->
</body>
</html>
