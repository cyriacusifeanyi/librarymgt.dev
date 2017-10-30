@extends('master.master')
@section('content')

    <div class="container col-md-12" align="center" style="margin-top: 120px">
        @foreach($videos as $video)

            <li><a href="/help/{{$video->id}}"><h2>{{$video->title}}</h2></a></li>
        @endforeach
    </div>


@endsection