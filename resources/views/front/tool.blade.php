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
    <header id="header" class="ex-header"><h1>Doçentlik Puanı Hesaplama Aracı</h1>
        <p class="p-large text-light"><span class="badge badge-warning">2022 Mart Dönemi </span> başvuru
            şartlarına göre size uygun doçentlik temel
            alanındaki puanınızı hesaplayabilirsiniz.</p></header>
@endsection
@section('content')
    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumbs">
                        <a href="index.php">Anasayfa</a><i class="fa fa-angle-double-right"></i><a href="index.php">Araç Hakkında</a><i class="fa fa-angle-double-right"></i><span>Doçentlik Puanı Hesaplama Aracı</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->
    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">Puanını Hesaplamak İstediğiniz Alanı Seçiniz</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">

                @foreach($fields as $field)
                   {{-- @foreach($listTool as $itemTool)
                        @if($item->tool_id == $itemTool->id)--}}
                            <div class="col-md-4 mt-4">
                                <a data-id="{{$field->id}}" href="{{route('tools.tool', $field->slug)}}" id="selectedField" class="card btn btn-outline-light border text-decoration-none">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$field->name}}</h4>
                                    </div>
                                </a>
                            </div>
                    {{--    @endif
                    @endforeach--}}
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('js')
{{--<script>
    $('#selectedField').click(function () {
        //let fieldId = $(this).attr('data-id');
        let fieldId = $(this).data("id");
        alert(fieldId);

    });
</script>--}}
@endsection
