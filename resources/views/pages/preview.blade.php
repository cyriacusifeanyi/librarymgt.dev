@extends('master.master')

@section('page_title')
    <title>Library | Preview</title>
@endsection

@section('page-style')


@endsection

@section('content')
    <div class="container" align="center" style="margin-top: 55px {{--background = grey--}}">

{{--        @include('include.simplesearch')--}}
    </div>

    <div class="col-md-3">
        {{--Categories--}}

    </div>
    <div class="col-md-9" style=" float:right;">
        <div{{--style white box--}}>
            <div class="item-right">
                <a href="">ddddddd <img src="" alt="" title=""></a>
            </div>
            <div class="item-right">
                <h2>{{$resource->id}}</h2>
                <h2>{{$resource->title}}</h2>
                <h2>{{$resource->author}}</h2>
                <h2>{{$resource->description}}</h2>
                <h2>{{$resource->created_at}}</h2>
                <h2>{{$resource->updated_at}}</h2>
                





<!--                --><?   //=$noPage.".".$bookYear.".".$bkSize /*inhumanReadeableFormat*/.".".$bkDownloads."Downloads"?><!----><?//if($free==true){echo "Free Resource"}else{echo "Paid Resource"}?>
            </div>
            
            
            
            
            
            
                        <div class="item-buttom">                
                        </div>


        </div>

        <div class="row">
            <h3>Similar item</h3>
            <div style="float:right;">
                <select>
                    <option value="any">Filter by page count</option>
                    <option value="1-24">1-24 Pages</option>
                    <option value="25-50">25-50 Pages</option>
                    <option value="51-100">51-100 Pages</option>
                    <option value="100-*">100+ Pages</option>
                </select>
            </div>
        </div>


    </div>

    <div class="col-md-4"></div>

    <button type="button" class="btn btn-link btn-lg" data-toggle="modal" data-target="#myModal">
        preview
    </button>
@include('include.previewModal')





@endsection