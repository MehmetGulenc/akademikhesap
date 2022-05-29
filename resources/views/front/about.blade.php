@extends('layouts.front')

@section('title')
    Hakkımızda
@endsection

@section('css')

@endsection

@section('header')
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Hakkımızda</h1>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Takım</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg">
                    <div class="slider-2">
                        <div class="container col-lg-6">
                            <div class="swiper-container text-slider">
                                <div class="image-wrapper">
                                    <img class="img-fluid"
                                         src="../assets/visitor-auth-temp/images/profil.jpg"
                                         alt="alternative">
                                </div>
                                <div class="text-wrapper">
                                    <div class="testimonial-text">
                                        <div class="icon-container">
                                                             <span class="fa-stack">
                                                                <a href="https://www.linkedin.com/in/mehmet-g%C3%BClen%C3%A7-924022187"
                                                                   target="_blank">
                                                                    <i class="fab fa-linkedin-in fa-stack-1x"></i>
                                                                </a>
                                                            </span>
                                            <span class="fa-stack">
                                                                <a href="https://github.com/MehmetGulenc"
                                                                   target="_blank">
                                                                    <i class="fab fa-github fa-stack-1x"></i>
                                                                </a>
                                                            </span>
                                            <span class="fa-stack">
                                                                <a href="https://twitter.com/mehmetgulenc_"
                                                                   target="_blank">
                                                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                                                </a>
                                                            </span>
                                            <span class="fa-stack">
                                                                <a href="https://www.instagram.com/mehmetgulenc_/"
                                                                   target="_blank">
                                                                    <i class="fab fa-instagram fa-stack-1x"></i>
                                                                </a>
                                                            </span>
                                        </div>
                                    </div>
                                    <div class="testimonial-author"><b>Mehmet Gülenç</b>
                                        <p>Junior Full Stack Developer</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
