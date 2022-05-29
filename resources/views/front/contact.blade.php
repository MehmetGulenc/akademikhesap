@extends('layouts.front')

@section('title')
    İletişim
@endsection

@section('css')

@endsection

@section('header')
    <header id="header" class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>İletişim</h1>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="container card-0 justify-content-center ">
        <div class="card-body px-sm-4 px-0">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 col"><h3 class="font-weight-bold ml-md-0 mx-auto text-center text-sm-left">
                        Yardım almak için formu doldurun</h3>
                    <p class="mt-md-4 ml-md-0 ml-2 text-center text-sm-left">Aklınıza takılan soruları memnuniyetle en kısa zamanda cevaplıyoruz. Bunun için mesajınızı göndermeniz yeterli.</p></div>
            </div>
            <div class="row justify-content-center round">
                <div class="col-lg-10 col-md-12 ">
                    <div class="card shadow-lg card-1">
                        <div class="card-body inner-card">
                            <div class="row justify-content-center">
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group"><label for="first-name">Ad</label><input type="text"
                                                                                                             class="form-control"
                                                                                                             id="first-name"
                                                                                                             placeholder="Adınızı Giriniz">
                                    </div>
                                    <div class="form-group"><label for="Mobile-Number">Telefon Numarası</label> <input
                                            type="text" class="form-control" id="Mobile-Number" placeholder="Telefon Numaranızı Giriniz">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                    <div class="form-group"><label for="last-name">Soyad</label> <input type="text"
                                                                                                            class="form-control"
                                                                                                            id="last-name"
                                                                                                            placeholder="Soyadınızı Giriniz">
                                    </div>
                                    <div class="form-group"><label for="phone">E-Posta</label> <input type="email"
                                                                                                    class="form-control"
                                                                                                    id="email"
                                                                                                    placeholder="E-Posta Adresinizi Giriniz">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-lg-10 col-12">
                                    <div class="form-group"><label for="phone">Konu</label> <input type="text"
                                                                                                   class="form-control"
                                                                                                   id="subject"
                                                                                                   placeholder="Konu Giriniz">
                                    </div>
                                    <div class="form-group"><label for="exampleFormControlTextarea2">Mesaj</label>
                                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2"
                                                  rows="5"></textarea></div>
                                    <div class="mb-2 mt-4">
                                        <div class="text-right">
                                            <button type="button" class="btn btn-primary btn-block"><small
                                                    class="font-weight-bold">Gönder</small></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Newsletter -->
    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="icon-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- end of newsletter -->
@endsection

@section('js')

@endsection
