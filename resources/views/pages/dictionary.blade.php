@extends('master.master')

@section('page_title')
    <title>Library | Dictionary</title>
@endsection
@section('page_style')
    {{Html::script('assets/js/script.js')}}
@endsection

@section('content')
    <div class="container" {{--align="center"--}} style="margin-top: 55px;">
        @include('include.dictionarysearch')

        <div class="container" {{--align="center"--}} style="margin-top: 55px;">





        </div>




















    </div>
@endsection