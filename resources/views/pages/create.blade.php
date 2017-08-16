@extends('master.master')

@section('page_title')
    <title>Library | Create New</title>
@endsection

@section('content')

    <form action="{{url('create')}}" method="post">
        {{ csrf_field() }}



    </form>











@endsection