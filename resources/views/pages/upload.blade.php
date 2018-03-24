
{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: ifeanyi--}}
 {{--* Date: 3/7/18--}}
 {{--* Time: 4:31 AM--}}
 {{--*/--}}

@extends('layouts.app')

@section('page_title')
    <title>File Upload</title>
@endsection

@section('content')


    <div class="container">
        <div class="row">
            <form action="{{route('upload.file')}}" {{--class="form-horizontal"--}} method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                {{--<input name="file_thumb" type="file" >--}}
                <input name="file" type="file" >
                <input type="submit" class="btn btn-info">

            </form>
        </div>
        <div class="row">
            <div>SHOW FILE</div>

            <img src="{{asset('storage/upload/favicon.png')}}" alt="LI">

        </div>
    </div>
    @endsection