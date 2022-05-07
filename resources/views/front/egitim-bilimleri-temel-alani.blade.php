@extends('layouts.fields')
@section('title')
    Eğitim Bilimleri Temel Alanı
@endsection
@section('css')
@endsection
@section('headerName')
    Eğitim Bilimleri Temel Alanı
@endsection
@section('requirements')
    <h4>Zorunluluklar</h4>
    <div class="alert alert-info mb-5" role="alert">
        <ul>
            @foreach($fieldRequirements as $fieldRequirement)
            <li>{{$fieldRequirement->name}}</li>
            {{--<li>Asgari yüz (100) puan gereklidir.</li>
            <li>Her çalışma sadece bir bölümde puanlandırılır.</li>
            <li>Tek yazarlı yayınlardan tam puan alınır.</li>
            <li>Çok yazarlı yayınlarda puan yazarlar arasında eşit bölünür.</li>--}}
            @endforeach
        </ul>
    </div>
@endsection
@section('category')
    <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Alınan Puanlar</span>
    </h4>
    <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0">1. Uluslararası Makale</h6>
                <div id="tblitemList01">
                </div>
            </div>
            <span id="tblscore01" class="text-muted">0</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0">2. Ulusal Makale</h6>
                <div id="tblitemList02">
                </div>
            </div>
            <span id="tblscore02" class="text-muted">0</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0">3. Lisansüstü Tezlerden Üretilmiş Yayın</h6>
                <div id="tblitemList03">
                </div>
            </div>
            <span id="tblscore03" class="text-muted">0</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0">4.Kitap</h6>
                <div id="tblitemList04">
                </div>
            </div>
            <span id="tblscore04" class="text-muted">0</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0">5.Atıflar</h6>
                <div id="tblitemList05">
                </div>
            </div>
            <span id="tblscore05" class="text-muted">0</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0">6. Lisansüstü Tez Danışmanlığı</h6>
                <div id="tblitemList06">
                </div>
            </div>
            <span id="tblscore06" class="text-muted">0</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0">7. Bilimsel Araştırma Projesi</h6>
                <div id="tblitemList07">
                </div>
            </div>
            <span id="tblscore07" class="text-muted">0</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0">8. Bilimsel Toplantı Faaliyeti</h6>
                <div id="tblitemList08">
                </div>
            </div>
            <span id="tblscore08" class="text-muted">0</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
                <h6 class="my-0">9. Eğitim-Öğretim Faaliyeti</h6>
                <div id="tblitemList09">
                </div>
            </div>
            <span id="tblscore09" class="text-muted">0</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
                <h6 class="my-0">Doktora Öncesi</h6>
            </div>
            <p id="doktoraOncesi">-</p>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
                <h6 class="my-0">Doktora Sonrası</h6>
            </div>
            <p id="doktoraSonrasi">-</p>
        </li>
        <li class="list-group-item d-flex justify-content-between">
            <span>Genel Toplam</span>
            <p id="genelToplam">-</p>
        </li>
        <li class="list-group-item d-flex justify-content-between">
            <span>Değerlendirme</span>
            <p id="degerlendirmeSonuc">-</p>
        </li>
    </ul>
@endsection
@section('content')
    <?php
    $i = 0;
    $j = 0;
    ?>
    @foreach($chapters as $chapter)
        <?php $i++ ?>
        <h4 class="mb-3 border-bottom">{{$i}}. {{$chapter->name}}</h4>
        <p>{{$chapter->information}}</p>
        <form>
            @foreach($chapterItems as $chapterItem)
                @if($chapterItem->chapter_id == $chapter->id)
                    <?php $j++ ?>
            <div class="row p-2 item-app">
                <div class="col-sm-10"><p><span class="badge-puan badge text-center text-light bg-secondary">{{$chapterItem->score}} puan</span>
                 {{$i}}.{{$j}}  {{$chapterItem->name}}</p></div>
                <div class="col-sm-2 text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#addModal">
                        Ekle
                    </button>
                </div>
            </div>
                @endif
            @endforeach
            <?php $j=0; ?>
                @foreach($chapterRequirements as $chapterRequirement)
                @if($chapter->id == $chapterRequirement->chapter_id)
            <div class="alert alert-secondary mt-3" role="alert">{{$chapterRequirement->name}}</div>
                @endif
                @endforeach
        </form>
        @endforeach
<hr>
    <!--Add form Modal -->
    <div class="modal fade text-left" id="addModal" tabindex="-1"
         role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
             role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Alan Ekle</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="{{--{{route('fields.store')}}--}}" method="post" id="frmAdd">
                    @csrf
                    <div class="modal-body">
                        <label for="tools">{{}}</label>
                        <div class="form-group">
                            <select class="choices form-select" name="tools" id="tools">
                                {{--@foreach($listTool as $itemTool)
                                    <option value="{{$itemTool->id}}">{{$itemTool->name}}</option>
                                @endforeach--}}
                            </select>
                        </div>
                        <label for="name">Alan Adı </label>
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Alan Adı"
                                   class="form-control">
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="status"
                                   id="status"
                                   checked>
                            <label class="form-check-label" for="status">Aktif</label>
                        </div>
                        <label for="slug">Slug </label>
                        <div class="form-group">
                            <input type="text" name="slug" id="slug"
                                   class="form-control">
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
@endsection
@section('js')
@endsection
