<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="{{route('admin.index')}}"><h5>Yönetici Paneli</h5></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{Route::is('admin.index') ? 'active' : ''}}">
                    <a href="{{route('admin.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Gösterge Paneli</span>
                    </a>
                </li>
                <li class="sidebar-item {{Route::is('fields.index') ? 'active' : ''}}">
                    <a href="{{route('fields.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Alan İşlemleri</span>
                    </a>
                </li>
               {{-- <li class="sidebar-item">
                    <a href="{{route('tools.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Araç İşlemleri</span>
                    </a>
                </li>--}}
                <li class="sidebar-item {{Route::is('menu.index') ? 'active' : ''}}">
                    <a href="{{route('menu.index')}}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Menü İşlemleri</span>
                    </a>
                </li>
                {{--<li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="bi bi-stack"></i>
                        <span>Alanlar</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="#">Alert</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Badge</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="#">Breadcrumb</a>
                        </li>
                    </ul>
                </li>--}}
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
