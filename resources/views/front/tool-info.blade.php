@extends('layouts.front')
@section('title')
    Doçentlik Puanı Hesaplama
@endsection
@section('css')
@endsection
@section('header')
    {{--  <header id="header" class="ex-header">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h1>Doçentlik Puanı Hesaplama Aracı</h1>
                      <p class="p-large text-light"><span class="badge badge-warning">2022 Mart Dönemi </span> başvuru
                          şartlarına göre size uygun doçentlik temel
                          alanındaki puanınızı hesaplayabilirsiniz.</p>
                  </div>
              </div>
          </div>
      </header>--}}
    <header id="header" class="ex-header"><h1>Doçentlik Puanı Hesaplama Aracı Hakkında</h1>
        <p class="p-large text-light"><span class="badge badge-warning">2022 Mart Dönemi </span> başvuru
            şartlarına göre size uygun doçentlik temel
            alanındaki puanınızı hesaplayabilirsiniz.</p> </header>
@endsection
@section('content')
    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumbs">
                        <a href="index.php">Anasayfa</a><i class="fa fa-angle-double-right"></i><span>Doçentlik Puanı Hesaplama Aracı</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->
    <div class="card bg-light shadow border-0">
        <div class="card-body px-lg-5 py-lg-5">
            <div class="row row-grid align-items-center">
                <div class="col-md-6">
                    <div class="card bg-default shadow border-0">
                        <img
                            src="{{asset('assets/visitor-auth-temp/images/banner.png')}}"
                            class="card-img-top"
                        />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pl-md-5">
                        <div
                            class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle mb-5"
                        >
                            {{--Örnek İcon--}}
                            {{--<i class="fab fa-instagram fa-stack-2x"></i>--}}
                        </div>
                        <h3>Araç Hakkında</h3>
                        <p class="lead">
                            Doçentlik sürecinde, toplattığınız puanlarınızı anlık olarak
                            hesaplayabileceğiniz bir araçtır.
                        </p>
                        <p>
                            Başvurmak istediğiniz alana göre gerçekleştirdiğiniz veya
                            planladığınız çalışmalara göre elde edeceğiniz puanı
                            hesaplayabilmenizi sağlar. Ücretsizdir. Açık kaynak kodludur.
                            Desteğiniz ve ilginize muhtaçtır.
                        </p>
                        {{--<a class="" href="{{route('front.calculating-associate-professorship-score')}}"><button type="button" class="btn btn-danger btn-lg btn-block">
                            Doçentlik Puanı Hesaplama Aracına erişmek için tıklayınız.
                        </button></a>--}}
                        <a class="btn-solid-lg page-scroll btn-block btn-lg text-center" href="{{route('tool')}}">Doçentlik Puanı Hesaplama Aracına erişmek için tıklayınız.</a>
                        <!-- <a
                          routerLinkActive="active"
                          [routerLink]="['/calc-tool']"
                          class="font-weight-bold text-warning mt-5"
                          >Devamını okumak için tıklayınız...</a
                        > -->
                    </div>
                </div>
            </div>

            <br />
            <div class="alert alert-primary" role="alert">
                Görüşlerinizi, bulduğunuz hataları ve önerinizi lütfen benim ile
                paylaşırsanız çok memnun olurum.
            </div>
            <h3>Doçentlik Puanı Hesaplama Aracı Hakkında Bazı Ufak Notlar</h3>
            <p>
            <li>
                Hemen hemen tüm alanlara yönelik hesaplama yapabilmeniz için
                parametrik ve esnek bir kurgu üzerine bir geliştirme yaptım. Bu
                yapı sayesinde sistemi, her başvuru döneminde sürekli
                güncelleyebileceğim.
            </li>
            <li>
                ÜAK’ın yayınladığı bilim alanlarının hepsini kapsamaya dikkat
                ettim. Sadece Güzel Sanatlar Temel Alanına ait kriterler ve
                puanlama sistemi oldukça farklı olduğu için onu bu araca dahil edemedim.
                Belki çok ilerleyen zamanlarda ve gelen isteklere göre Güzel
                Sanatlar için özel bir araç geliştirebilirim.
            </li>
            <li>
                Şubat 2021 içerisinde yayımladığım sürüm henüz tam stabil değil.
                Kaba haliyle ve yazar oranlarına göre bir puanlama yapıyor. Bazı
                alanların yazar sayısı önceliği gibi durumlara dikkate
                almayabilir. Daha hassas ve doğru hesaplaması yapan sürümleri
                ilerleyen günlerde geliştirmeye devam edeceğim.
            </li>
            <li>
                Açık kaynak kodlu olarak geliştirdim. Github hesabım üzerinden
                kodlarını paylaşacağım.
            </li>
            </p>
            <hr />
            <h3>Sürüm Geçmişi</h3>
            <p>
                <b>21 Şubat 2021: sürüm 1.0 Beta</b> sürümün yayına aldım. Henüz tam
                stabil değil. Eksikleri mevcut.
            </p>
        </div>
    </div>
@endsection
@section('js') @endsection
