<nav class="navbar navbar-expand navbar-light ">
    <div class="container-fluid">
        <a href="#" class="burger-btn d-block">
            <i class="bi bi-justify fs-3"></i>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <a class="nav-link active dropdown-toggle" href="{{route('index')}}">
                    <i class='bi bi-arrow-left-circle bi-sub fs-4 text-gray-600'></i> Sayfaya Dön
                </a>
                <li class="nav-item dropdown me-1">
                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        <i class='bi bi-envelope bi-sub fs-4 text-gray-600'></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li>
                            <h6 class="dropdown-header">Mesaj</h6>
                        </li>
                        <li><a class="dropdown-item" href="#">Mesaj yok</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown me-3">
                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        <i class='bi bi-bell bi-sub fs-4 text-gray-600'></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li>
                            <h6 class="dropdown-header">Bildirimler</h6>
                        </li>
                        <li><a class="dropdown-item">Bildirim yok</a></li>
                    </ul>
                </li>
            </ul>
            <div class="dropdown">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="user-menu d-flex">
                        <div class="user-name text-end me-3">
                            <h6 class="mb-0 text-gray-600">{{auth()->user()->name}}</h6>
                            <p class="mb-0 text-sm text-gray-600">Admin</p>
                        </div>
                        <div class="user-img d-flex align-items-center">
                            <div class="avatar avatar-md">
                                <img src="{{asset('assets/admin-temp/images/faces/1.jpg')}}">
                            </div>
                        </div>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li>
                        <h6 class="dropdown-header">Hoşgeldin, {{auth()->user()->name}}</h6>
                    </li>
                    {{--<li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                            Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                            Settings</a></li>
                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                            Wallet</a></li>
                    <li>--}}
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"><i
                                class="icon-mid bi bi-box-arrow-left me-2"></i> Çıkış Yap</a></li>
                    <form action="{{route('logout')}}" id="logoutForm" method="post">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
    </div>
</nav>
