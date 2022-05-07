@extends('layouts.admin')

@section('title')
    Menü Düzenleme
@endsection

@section('css')
@endsection

@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <button type="button" class="btn btn-primary btn-lg btn-floating rounded-circle mb-3"
                            data-bs-toggle="modal"
                            data-bs-target="#inlineForm">
                        <i class='bi bi-plus bi-sub fs-4 text-white-600'></i>
                    </button>
                    <!--Add form Modal -->
                    <div class="modal fade text-left" id="inlineForm" tabindex="-1"
                         role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                             role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Menü Ekle</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <form action="{{route('menu.add')}}" method="post" id="frmAddMenu">
                                    @csrf
                                    <div class="modal-body">
                                        <label for="name">Menü Başlığı</label>
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" placeholder="Menü Başlığı"
                                                   class="form-control">
                                        </div>

                                        <label for="route_type">Rota Türü </label>
                                        <div class="form-group">
                                            <select class="choices form-select" name="route_type" id="route_type">
                                                    <option value="1">Dinamik Rota</option>
                                                    <option value="2">Statik URL</option>
                                            </select>
                                        </div>

                                        <label for="route">Rota</label>
                                        <div class="form-group">
                                            <input type="text" name="route" id="route" placeholder="Rota"
                                                   class="form-control">
                                        </div>

                                        <label for="order">Sıralama</label>
                                        <div class="form-group">
                                            <input type="number"min="1" max="9999" value="9999" name="order" id="order" placeholder="Sıralama"
                                                   class="form-control">
                                        </div>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="status"
                                                   id="status"
                                                   checked>
                                            <label class="form-check-label" for="status">Aktif</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" name="btnBack" class="btn btn-light-secondary"
                                                data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Kapat</span>
                                        </button>
                                        {{--Buradaydı // onclick="form_submit()" --}}
                                        <button type="submit" class="btn btn-primary ml-1"
                                                name="btnSave" id="btnSave"
                                                data-bs-dismiss="modal">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Kaydet</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                {{----}}
                <!--Edit form Modal -->
                    <div class="modal fade text-left" id="editMenu" tabindex="-1"
                         role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                             role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel33">Menü Düzenleme</h4>
                                    <button type="button" class="close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                        <i data-feather="x"></i>
                                    </button>
                                </div>
                                <form action="{{route('menu.edit')}}" method="POST" id="frmEditMenu">
                                    @csrf
                                    @method('POST')
                                    <div class="modal-body">
                                        <label for="nameEdit">Menü Başlığı</label>
                                        <div class="form-group">
                                            <input type="text" name="nameEdit" id="nameEdit" placeholder="Menü Başlığı"
                                                   class="form-control">
                                        </div>

                                        <label for="route_typeEdit">Rota Türü </label>
                                        <div class="form-group">
                                            <select class="choices form-select" name="route_typeEdit" id="route_typeEdit">
                                                <option value="1">Dinamik Rota</option>
                                                <option value="2">Statik URL</option>
                                            </select>
                                        </div>

                                        <label for="routeEdit">Rota</label>
                                        <div class="form-group">
                                            <input type="text" name="routeEdit" id="routeEdit" placeholder="Rota"
                                                   class="form-control">
                                        </div>

                                        <label for="orderEdit">Sıralama</label>
                                        <div class="form-group">
                                            <input type="number"min="1" max="9999" value="9999" name="orderEdit" id="orderEdit" placeholder="Sıralama"
                                                   class="form-control">
                                        </div>

                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="statusEdit"
                                                   id="statusEdit"
                                                   checked>
                                            <label class="form-check-label" for="statusEdit">Aktif</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" name="btnBack" class="btn btn-light-secondary"
                                                data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Kapat</span>
                                        </button>
                                        {{--Burdaydı // onclick="form_submit()" --}}
                                        <button type="submit" class="btn btn-primary ml-1"
                                                name="btnEdit" id="btnEdit"
                                                data-bs-dismiss="modal">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Güncelle</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    Menüler
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Menü Başlığı</th>
                            <th>Ekleyen</th>
                            <th>Aktif/Pasif</th>
                            <th>Rota Türü</th>
                            <th>Rota</th>
                            <th>Sıralama</th>
                            <th>Oluşturma Tarihi</th>
                            <th>Güncelleme Tarihi</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($list as $item)
                            <tr id="{{$item->id}}">
                                <td>{{$item->id}}</td>
                                {{--<td>{{$item->getTool->name}}</td>--}}
                                <td>{{$item->name}}</td>
                                <td>{{$item->getUser->name}}</td>
                                <td>
                                    @if($item->status)
                                        <a data-id="{{$item->id}}" class="badge btn btn-success changeStatus">Aktif</a>
                                    @else
                                        <a data-id="{{$item->id}}" class="badge btn btn-danger changeStatus">Pasif</a>
                                    @endif
                                </td>
                                <td>
                                    @if($item->route_type == 1)
                                        Dinamik rota
                                    @elseif($item->route_type == 2)
                                        Statik URL
                                    @endif
                                </td>
                                <td>{{$item->route}}</td>
                                <td>{{$item->order}}</td>
                                <td>{{\Carbon\Carbon::parse($item->created_at)->format('d-m-Y H:i:s')}}</td>
                                <td>{{\Carbon\Carbon::parse($item->updated_at)->format('d-m-Y H:i:s')}}</td>
                                <td>
                                    <a data-id="{{$item->id}}" href="javascript:void(0)" class="btn editMenu"
                                       data-bs-toggle="modal"
                                       data-bs-target="#editMenu">
                                        <i class='bi bi-pencil-fill bi-sub text-primary'></i>
                                    </a>
                                    <a data-id="{{$item->id}}" href="javascript:void(0)" class="btn deleteMenu"><i
                                            class='bi bi-trash-fill bi-sub text-danger'></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </section>
        @endsection

        @section('js')
            <script>
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            </script>
            <script type="text/javascript">
                /*function form_submit() {
                    document.getElementById("frmAddField").submit();
                }*/

                function inputValidation(inputArray, formId) {
                    let validation = true;
                    for (let i = 0; i < inputArray.length; i++) {
                        let inputInfo = inputArray[i];
                        let input = $('#' + inputInfo.id + "").val();

                        if (input.trim() == "") {
                            Swal.fire({
                                icon: 'error',
                                title: inputInfo.alertTitle,
                                text: inputInfo.alertTextAttr + ' Boş Bırakılamaz',
                                confirmButtonText: 'Tamam',
                            });
                            validation = false;
                        }
                    }

                    validation ? $('#' + formId).submit() : "";

                }

                $('.deleteField').click(function () {
                    //let fieldId = $(this).data("id");
                    let fieldId = $(this).attr('data-id');
                    //let fieldId = $(this).data("id");
                    Swal.fire({
                        title: "Emin misiniz ?",
                        text: fieldId + " ID'li alanı silmek istediğinize emin misiniz ?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Evet, Sil!',
                        cancelButtonText: 'Vazgeç'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "{{route('fields.delete')}}",
                                type: "POST",
                                async: false,
                                data: {
                                    fieldId: fieldId
                                },
                                success: function (response) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Başarılı',
                                        text: 'Alan Silindi',
                                        confirmButtonText: 'Tamam'
                                    })
                                    $("tr#" + fieldId).remove();
                                },
                                error: function () {

                                }
                            })
                        }
                    })
                })
                /**/
                $('.changeStatus').click(function () {
                    let menuId = $(this).data("id");
                    let self = $(this);

                    //let fieldId = $(this).attr('data-id');
                    //let fieldId = $(this).data("id");
                    $question = null;
                    (self[0].innerText == "Aktif") ? $question = "Pasif" : $question = "Aktif";
                    Swal.fire({
                        title: "Emin misiniz ?",
                        text: menuId + " ID'li alanı" + $question + " olarak güncellemek istediğinize emin misiniz ?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Evet, Güncelle!',
                        cancelButtonText: 'Vazgeç'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: "{{route('menu.changeStatus')}}",
                                type: "POST",
                                async: false,
                                data: {
                                    menuId: menuId
                                },
                                success: function (response) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Başarılı',
                                        text: response.menuId + " Id'li kayıt durumu " + response.newStatus + " olarak güncellenmiştir.",
                                        confirmButtonText: 'Tamam'
                                    })


                                    if (response.status == 1) {
                                        self[0].innerText = 'Aktif';
                                        self.removeClass("btn-danger").addClass("btn-success");
                                    } else {
                                        self[0].innerText = 'Pasif';
                                        self.removeClass("btn-success").addClass("btn-danger");

                                    }
                                    /*console.log(self);*/
                                },
                                error: function () {

                                }
                            })
                        }
                    })
                })
                /**/
                $('.editMenu').click(function () {
                    let menuId = $(this).data('id');
                    let nameEdit = $('#nameEdit');
                    let routeTypeEdit = $('#route_typeEdit');
                    let routeEdit = $('#routeEdit');
                    let statusEdit = $('#statusEdit');
                    let orderEdit = $('#orderEdit');

                    $.ajax({
                        url: '{{route('menu.editShow')}}',
                        type: "POST",
                        async: false,
                        data: {
                            menuId: menuId
                        },
                        success: function (response) {
                            let menu = response.menu;
                            nameEdit.val(menu.name);
                            routeTypeEdit.val(menu.route_type)
                            routeEdit.val(menu.route)
                            orderEdit.val(menu.order)
                            if (menu.status) {
                                statusEdit.attr('checked', true);
                            } else {
                                statusEdit.attr('checked', false);
                            }

                        },
                        error: function () {

                        }
                    })

                })

                /* Buton Save */
                $('#btnSave').click(function () {
                    /*let name = $('#name').val();*/
                    let inputArray = [{
                        id: 'name',
                        alertTextAttr: 'Menü Başlığı',
                        alertTitle: "Uyarı"
                    },
                        {
                            id: 'route',
                            alertTextAttr: 'Rota',
                            alertTitle: "Uyarı"
                        }
                    ];
                    inputValidation(inputArray, 'frmAddMenu');
                });

                /* Buton Edit */
                $('#btnEdit').click(function () {

                    let inputArray = [{
                        id: 'nameEdit',
                        alertTextAttr: 'Alan Adı',
                        alertTitle: "Uyarı"
                    }];
                    inputValidation(inputArray, 'frmEditMenu');
                });

            </script>
@endsection
