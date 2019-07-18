@extends('main')

@section('icerik')


<div id="home">
    <h1>Stack Problems</h1>
    <hr />
    <ol class="posts">
            @foreach ($yazilar as $yazi)
            <li><a href="/yazi/{{$yazi->url}}">{{$yazi->baslik}}</a> » <i><span>{{$yazi->created_at}}</span></i>
        @endforeach
        

        
    </ol>
        {{$yazilar->links()}}
</div>

@endsection