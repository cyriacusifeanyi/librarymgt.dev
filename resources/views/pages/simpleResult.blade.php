@extends('master.master')

@section('page_title')

    <title>Library | Search</title>

    {{--<title>8 Search Results - Keywords(computer) - Author name(ifeanyi) - ScienceDirect</title>--}}
@endsection
@section('page_style')
    {{Html::script('assets/js/script.js')}}
@endsection



@section('content')
    <div class="container" align="center" style="margin-top: 55px">
        {{--<div class="col-md-12">--}}
        {{--<div class="container">--}}
        {{--<div class="col-md-2" ></div>--}}



        @include('include.simplesearch')

        {{--<div class="col-md-2" ></div>--}}

        {{--</div>--}}
        {{--</div>--}}

    </div>
    <div class="container " align="left" style="margin-top: 55px;min-height: 350px ">
        <div class="col-md-12">
            <div class="col-md-3 col-sm-3 {{--col-xs-3--}} hidden-xs {{--visible-lg-block visible-md-block visible-sm-block visible-xs-block--}}  ">
                <h3>lorem results</h3>
                <h3>Filter by:</h3>
                <h4>Student Class</h4>
                <ul>
                    <li class="list-group"><label class="checkbox"><input name="basic7" type="checkbox">Basic7 <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="basic8" type="checkbox">Basic8 <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="basic9" type="checkbox">Basic9 <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="basic10" type="checkbox">Basic10 <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="basic11" type="checkbox">Basic11 <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="basic12" type="checkbox">Basic12 <span class="badge">+99</span></label></li>
                </ul>

                <h4>Material Type</h4>
                <ul>
                    <li class="list-group"><label class="checkbox"><input name="video" type="checkbox">Videos <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="audio" type="checkbox">Audio-Books <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="txtBooks" type="checkbox">Textbooks <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="books" type="checkbox">Past-Questions <span class="badge">+99</span></label></li>
                </ul>

                <h4>Subject</h4>
                <ul>
                    <li class="list-group"><label class="checkbox"><input name="video" type="checkbox">Mathematics <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="audio" type="checkbox">Geography <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="txtBooks" type="checkbox">English Language <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="books" type="checkbox">Physics <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="video" type="checkbox">Chemistry <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="audio" type="checkbox">Biology <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="txtBooks" type="checkbox">Basic Science & Technology <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="books" type="checkbox">Religious Moral Values <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="video" type="checkbox">Igbo Language <span class="badge">+65</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="audio" type="checkbox">Yoruba language <span class="badge">63</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="txtBooks" type="checkbox">Hausa Language <span class="badge">30</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="books" type="checkbox">French Language <span class="badge">36</span></label></li>
                </ul>

            </div>

            <div class="col-md-8 col-sm-8 col-xs-12 {{--visible-lg-block visible-md-block visible-sm-block visible-xs-block--}} ">
                sorted by relevance&nbsp;|&nbsp;<a href="">date</a>
                <hr>



                {{--<a href="{{ route('preview') }}">New General Mathematics</a><br>--}}
                {{--<span style="color: orange">Free reading</span>&nbsp;|&nbsp;<em>Mathematics</em><br>--}}
                {{--Ifeoluwa Adeola-dada, Dr. Chuks Harvey <br>--}}
                {{--<a href="#"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>--}}
                {{--Download PDF (25 Mb)</a>--}}



                {{--                {{$video2[0]->title}}--}}
                @forelse($resources as $resource)

                    <img src="" width="100px" height="250px" alt="sdfgh" id="searchLoop" class="img-thumbnail">

                    <a href="{{ route('preview') }}">{{$resource->title}}</a><br>
                    <span style="color: orange">Free reading</span>&nbsp;|&nbsp;<em>Mathematics{{$resource->subject}}</em><br>
                    {{$resource->author}}<br>

                    <a href="" data-toggle="modal" data-target="#myModal" data-id="{{$resource->id}}">preview</a>


                    <a href="#"><span class="glyphicon glyphicon-book{{$resource->type}}" aria-hidden="true"></span>
                        Download PDF{{$resource->format}} ({{$resource->size}} Mb)</a>
                    <hr>

                @empty
                    <div class="alert alert-info">
                        <p><h4>oops :( no Record found</h4></p>
                        <p>Your Search - <em style="font-weight: bold; font-style: normal;">{{$pageData['searchBox']}}</em>  - did not match any documents.</p>

                        <p>Suggestions:</p>

                        <ul>
                            <li>Make sure all words are spelled correctly.</li>
                            <li>Try different keywords.</li>
                            <li>Try more general keywords.</li>
                            <li>Try fewer keywords.</li>
                            <li>Try checking
                                <label class="checkbox-inline">
                                    <input name="opt1" type="checkbox" checked disabled><em>All</em>
                                </label>
                                to broaden search space</li>
                        </ul>

                    </div>


                @endforelse


            </div>

        </div>
    </div>

    <button type="button" class="btn btn-link btn-lg" data-toggle="modal" data-target="#myModal">
        preview
    </button>
    @include('include.previewModal')



@endsection
