<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/admin-temp/css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin-temp/vendors/simple-datatables/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/admin-temp/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin-temp/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin-temp/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('assets/sweet-alert/sweetalert2.css')}}">
    {{--<link rel="stylesheet" href="{{asset('assets/toastr/toastr.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="shortcut icon" href="{{asset('assets/admin-temp/images/favicon.svg')}}" type="image/x-icon">
    @yield('css')
</head>

<body>
<div id="app">
    @include('admin.sidebar')
    <div id="main" class='layout-navbar'>
        <header class='mb-3'>
            @include('admin.navbar')
        </header>
        <div id="main-content">

            @yield('content')

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Mehmet Gülenç</p>
                    </div>
                    <div class="float-end">
                        <!--İCONLAR-->
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>
@include('sweetalert::alert')
<script src="{{asset('assets/admin-temp/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/admin-temp/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/admin-temp/vendors/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('assets/admin-temp/js/jQuery/jquery.min.js')}}"></script>
<script src="{{asset('assets/sweet-alert/sweetalert2.all.js')}}"></script>
{{--<script src="{{asset('assets/toastr/toastr.min.js')}}"></script>--}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{--<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);

</script>--}}
<script src="{{asset('assets/admin-temp/js/main.js')}}"></script>
@yield('js')
</body>

</html>
