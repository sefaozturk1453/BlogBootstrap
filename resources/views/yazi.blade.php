@extends('main')
@section('icerik')
@foreach ($icerik as $item)
   <div class="col-sm-18 col-offset-1 main-layout" style="text-align:justify">
      <header class="post-header">
         <h1 class="post-title">{{$item->baslik}}</h1>
      </header>
      <span class="time">{{$item->created_at}}</span> <span class="categories"> » <a href="/kategori/{{$item->kategori->url}}">{{$item->kategori->baslik}}</a> </span>
      <div class="content">
         <div class="post">
            <p>{{$item->icerik}}</p>
         </div>
      </div>
   </div>

   @foreach ($item->yorum as $yorum)
            <div class="col-sm-12">
                <div class="col-sm-2"><div class="thumbnail"><img class="img-responsive user-photo" src="https://agusmakmun.github.io/static/img/avatar.jpg"></div></div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>{{$yorum->email}}</strong><span style="float:right" class="text-muted">{{$yorum->created_at}}</span>
                    </div>
                    <div class="panel-body">{{$yorum->yorum}}</div>
                </div>
            </div>
        @endforeach

@endforeach
@endsection
