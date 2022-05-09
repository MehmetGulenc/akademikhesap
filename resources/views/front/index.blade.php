@extends('layouts.front')
@section('title')
    Anasayfa
@endsection
@section('css')
@endsection
@section('header')
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h1>Doçentlik Puanı Hesaplama</h1>
                            <p class="p-large">2022 Mart Dönemi başvuru şartlarına göre size uygun doçentlik temel
                                alanındaki puanınızı hesaplayabilirsiniz.</p>
                            <a class="btn-solid-lg page-scroll" href="{{route('docentlik-hesaplama')}}">HESAPLA</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <div class="img-wrapper">
                                <img class="img-fluid" src="{{asset("assets/visitor-auth-temp/images/home.png")}}"
                                     alt="alternative">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <svg class="header-frame" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
         viewBox="0 0 1920 310">
        <defs>
            <style>.cls-1 {
                    fill: #5f4def;
                }</style>
        </defs>
        <title>header-frame</title>
        <path class="cls-1"
              d="M0,283.054c22.75,12.98,53.1,15.2,70.635,14.808,92.115-2.077,238.3-79.9,354.895-79.938,59.97-.019,106.17,18.059,141.58,34,47.778,21.511,47.778,21.511,90,38.938,28.418,11.731,85.344,26.169,152.992,17.971,68.127-8.255,115.933-34.963,166.492-67.393,37.467-24.032,148.6-112.008,171.753-127.963,27.951-19.26,87.771-81.155,180.71-89.341,72.016-6.343,105.479,12.388,157.434,35.467,69.73,30.976,168.93,92.28,256.514,89.405,100.992-3.315,140.276-41.7,177-64.9V0.24H0V283.054Z"/>
    </svg>


@endsection
@section('content')
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="above-heading">YAKINDA</div>
                    <h2 class="h2-heading">Yakında Eklenecek Olan Alanlar</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="assets/visitor-auth-temp/images/description-1.png"
                                 alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Mühendislik Temel Alanı</h4>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="assets/visitor-auth-temp/images/description-2.png"
                                 alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Sağlık Bilimleri Temel Alanı</h4>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="assets/visitor-auth-temp/images/description-3.png"
                                 alt="alternative">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Fen Bilimleri ve Matematik Temel Alanı</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="video" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="p-heading"><h3>Doçentlik Puanı Nasıl Hesaplanır</h3>
                </div>
                <div class="col-lg-12">
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs"
                               data-effect="fadeIn">
                                <img class="img-fluid" src="assets/visitor-auth-temp/images/video-image.png"
                                     alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-container">
                        <div class="swiper-container text-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="assets/visitor-auth-temp/images/testimonial-1.jpg"
                                             alt="alternative">
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">"Bu stresli ve zorlu süreçte tüm hazırlığımı tamamlayan akademikhesap.com ekibine teşekkür ederim. Bu kadar prosedür uğraşılacak gibi değilken yaptıkları iş gerçekten çok kıymetli."
                                        </div>
                                        <div class="testimonial-author"><b>O. O.</b>
                                            <p>Oftalmolog</p></div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="assets/visitor-auth-temp/images/testimonial-2.jpg"
                                             alt="alternative">
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">“Emeği geçen herkese çok teşekkür ederim. Bu
                                            süreçle ilgili her şeyi akademikhesap.com çalışanlarına bırakın. Şimdiden
                                            çevremdeki doçent adaylarına önermeye başladım.”
                                        </div>
                                        <div class="testimonial-author"><b>N. T.</b>
                                            <p>Tıbbi Mikrobiyoloji</p></div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="assets/visitor-auth-temp/images/testimonial-3.jpg"
                                             alt="alternative">
                                    </div>
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">“Eylül dönemi için normalde çok geç kalmış olamama
                                            rağmen, sadece 5 gün içerisinde, 45 adet makale, 70 adet poster ve sunum, 3
                                            kitap bölümünü ve diğer tüm çalışmalarımı titizlikle hazırlayıp sisteme
                                            yüklediler. Bu çalışmayı yaparken sık sık bilgilendirmeyi hiç ihmal
                                            etmediler. ayrıca çokta nazik bir ekip. sizlerle çalışmak keyifliydi,
                                            teşekkür ederim.”
                                        </div>
                                        <div class="testimonial-author"><b>Op. Dr. B. S.</b>
                                            <p>Kardiyoloji</p></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="image-wrapper">
                                        <img class="img-fluid" src="assets/visitor-auth-temp/images/testimonial-4.jpg"
                                             alt="alternative">
                                    </div> <!-- end of image-wrapper -->
                                    <div class="text-wrapper">
                                        <div class="testimonial-text">“Hiç tereddüt etmeden güvenebileceğiniz,
                                            profesyonelce çalışan bu ekibe, Doçentlik Başvuru aşamasında vermiş olduğu
                                            destekten dolayı çok çok teşekkür ediyorum.”
                                        </div>
                                        <div class="testimonial-author">
                                            <b>G. Bedir</b>
                                            <p>Kadın Hastalıkları ve Doğum Uzmanı</p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="icon-container">
                         <span class="fa-stack">
                            <a href="https://www.linkedin.com/in/mehmet-g%C3%BClen%C3%A7-924022187" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://github.com/MehmetGulenc" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-github fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://twitter.com/mehmetgulenc_" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.instagram.com/mehmetgulenc_/" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js') @endsection
