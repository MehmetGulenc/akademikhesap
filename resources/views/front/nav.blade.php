
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" style="background-color: #5f4def">
    <div class="container">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.php">Tivo</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image btn-link" href="{{route('index')}}">
            <!--<img src="images/logo.svg" alt="alternative">-->
            akademikhesap.com</a>

        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                @foreach($menu as $item)
                    <?php
                    if($item->route_type == 1){
                        $route= route($item->route);
                        $active = Route::is($item->route) ? 'active' : '';
                    }
                    elseif($item->route_type == 2){
                        $route= url($item->route);
                        $active = request()->is($item->route) ? 'active' : '';
                    }
                    ?>
                    <li class="nav-item {{Route::is($item->route) ? 'active' : ''}}">
                        <a class="nav-link page-scroll" href="{{route($item->route)}}">{{$item->name}}<span
                                class="sr-only">(current)</span></a>
                    </li>
                @endforeach
                {{--<li class="nav-item {{Route::is('index') ? 'active' : ''}}">
                    <a class="nav-link page-scroll" href="{{route('index')}}">ANASAYFA <span
                            class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#video" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ARAÇLAR</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href=""><span class="item-text">Doçentlik Hesaplama Aracı</span></a>
                            <div class="dropdown-items-divide-hr"></div>
                    </div>
                </li>

                <li class="nav-item {{Route::is('about') ? 'active' : ''}}">
                    <a class="nav-link page-scroll" href="{{route('about')}}">HAKKIMIZDA</a>
                </li>

                <li class="nav-item {{Route::is('contact') ? 'active' : ''}}">
                    <a class="nav-link page-scroll" href="{{route('contact')}}">İLETİŞİM</a>
                </li>--}}
            </ul>
            @guest
            <span class="nav-item">
                    <a class="btn-outline-sm" href="{{route('login')}}">Giriş Yap</a>
                </span>
           {{-- <span class="nav-item">
                    <a class="btn-outline-sm" href="{{route('register')}}">Kayıt Ol</a>
                </span>--}}
            @else
                <span class="nav-item">
                    <a class="btn-outline-sm" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Çıkış Yap</a>
                </span>
                <form action="{{route('logout')}}" id="logoutForm" method="post">
                    @csrf
                </form>
            @endguest
        </div>
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->



