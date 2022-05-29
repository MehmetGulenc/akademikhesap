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
    <?php
    $i = 0;
    ?>
    <ul class="list-group mb-3">
        @foreach($chapters as $chapter)
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                    <?php $i++ ?>
                    <h6 class="my-0">{{$i}}. {{$chapter->name}}</h6>
                    <div data-id="{{$chapter->id}}" id="category{{$chapter->id}}">
                        <p style="visibility: hidden; display: none"><a href="" class="text-decoration-none"><i
                                    class="bi bi-x-square-fill"
                                    onclick=""></i></a>
                            <small class="text-muted">1.1. SSCI, SCI, SCI- Expanded ve AHCI indeksli dergilerde
                                yayımlanmış makale
                                <span class="text-success"><em>(40 puan - Doktora Sonrası)</em></span>
                            </small>
                        </p>
                    </div>
                </div>
                <span id="tblscore01" class="text-muted">0</span>
            </li>
        @endforeach
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
        <form data-id="{{$chapter->id}}" id="chapter">
            @foreach($chapterItems as $chapterItem)
                @if($chapterItem->chapter_id == $chapter->id)
                    <?php $j++ ?>

                    <div class="row p-2 item-app">
                        <div data-id="{{$chapterItem->id}}" id="item{{$chapterItem->id}}" class="col-sm-10">
                            <p>
                                <span class="badge-puan badge text-center text-light bg-secondary">{{$chapterItem->score}} puan</span>
                                <span>{{$i}}.{{$j}}  {{$chapterItem->name}}</span>
                            </p>
                        </div>
                        <div class="col-sm-2 text-end">
                            <button data-id="{{$chapterItem->id}}" type="button" class="btn btn-primary addItem"
                                    data-toggle="modal"
                                    data-target="#addModal">
                                Ekle
                            </button>
                        </div>
                    </div>
                @endif
            @endforeach
            <?php $j = 0; ?>
            @foreach($chapterRequirements as $chapterRequirement)
                @if($chapter->id == $chapterRequirement->chapter_id)
                    <div class="alert alert-secondary mt-3" role="alert">{{$chapterRequirement->name}}</div>
                @endif
            @endforeach
        </form>
    @endforeach
    <hr>
    <!-- Modal -->
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="addModal" tabindex="-1"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modelTitle"></h5>
                    <button type="button" id="closeModal" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form {{--method="" action=""--}}>
                    {{-- @csrf--}}
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="yayinAdeti" class="form-label">Adet:</label>
                            <input type="number" class="form-control" name="yayinAdeti" min="1" id="yayinAdeti"
                                   placeholder="1" value="1">
                        </div>
                        <div class="mb-3">
                            <label for="yazarSayisi" class="form-label">Toplam Yazar Sayısı:</label>
                            <input type="number" class="form-control" name="yazarSayisi" min="1" id="yazarSayisi"
                                   placeholder="1"
                                   value="1">
                        </div>
                        <div class="mb-3">
                            <label for="basYazar" class="form-label">Baş Yazar:</label>
                            <select class="form-control" id="basYazar">
                                <option value="ben">Var, benim</option>
                                <option value="başka">Var, başkası</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="zamanlama">Zamanlama:</label>
                            <select id="zamanlama" class="form-control">
                                <option value="sonra">Doktora Sonrası</option>
                                <option value="önce">Doktora Öncesi</option>
                            </select>
                        </div>
                        <div class="alert alert-success" role="alert">
                            <label for="calismaPuan" class="form-label">Alınacak Puan:</label>
                            <input type="number" class="form-control" id="calismaPuan" value="" disabled=""
                                   style="display:none;">
                            <input type="number" class="form-control" value="" id="toplamPuan" disabled="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" name="btnBack" id="btnBack"
                                data-dismiss="modal">
                            Vazgeç
                        </button>
                        <button type="button" id="btnSave" name="btnSave" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        $('.addItem').click(function () {
            let dataId = $(this).data('id');
            let value = $('#item' + dataId)[0].getElementsByTagName('span')[1].innerText;
            let pointValue = $('#item' + dataId)[0].getElementsByTagName('span')[0].innerText;
            let point = pointValue.replace(/\D/g, '');

            let checkTitle = $('#modelTitle')[0];
            checkTitle.innerText = value + " ekle";
            /*$('#btnBack').click(function(){
                checkTitle.innerText = "";
            })
            $('#closeModal').click(function(){
                checkTitle.innerText = "";
            })*/

            let checkPoint = $('#toplamPuan');


            let checkNumberOfPublications = 1;
            let checkNumberOfAuthors = 1;
            let tempScore1 = point;
            let tempScore2 = point;

            checkPoint.val(point);
            $(":input").bind('keyup mouseup', function () {
                checkNumberOfPublications = $('#yayinAdeti').val();
                checkNumberOfAuthors = $('#yazarSayisi').val();

                tempScore2 = tempScore1 * checkNumberOfPublications;

                point = tempScore2 / checkNumberOfAuthors;

                checkPoint.val(point);
            });

            $('#btnSave').click(function () {
                //console.log(value[0]);
                let categoryId = 0;
                let i = 0;
                for (i = 1; i <= value[0]; i ++){
                    categoryId = $('#category'+ i).data('id');
                    let html = "";
                    if (value[0] == categoryId) {

                        html  = $('#category' + value[0])[0]; //html =
                        html.innerHTML += '<p> <a href="" class="text-decoration-none"><i class="bi bi-x-square-fill"></i></a>  <small class="text-muted">' +  value  + ' <span class="text-success"><em>(40 puan - Doktora Sonrası)</em></span>  </small>  </p>'
                    }
                    $('#btnBack').click();
                }
            })
        })
    </script>
@endsection
