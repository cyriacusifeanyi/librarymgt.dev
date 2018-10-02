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
                <h3>Refine results</h3>
                <h3>Filter by:</h3>
                <h4>Student Class</h4>
                <ul>{{--echo the various student class in database based on result--}}
                    <li class="list-group"><label class="checkbox"><input name="basic7" type="checkbox">Basic7 <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="basic8" type="checkbox">Basic8 <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="basic9" type="checkbox">Basic9 <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="basic10" type="checkbox">Basic10 <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="basic11" type="checkbox">Basic11 <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="basic12" type="checkbox">Basic12 <span class="badge">+99</span></label></li>
                </ul>

                <h4>Material Type</h4>
                <ul>{{--echo the various materiaal type in database based on result--}}
                    <li class="list-group"><label class="checkbox"><input name="video" type="checkbox">Videos <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="audio" type="checkbox">Audio-Books <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="txtBooks" type="checkbox">Textbooks <span class="badge">+99</span></label></li>
                    <li class="list-group"><label class="checkbox"><input name="books" type="checkbox">Past-Questions <span class="badge">+99</span></label></li>
                </ul>

                <h4>Subject</h4>
                <ul>{{--echo the various subject in database based on result--}}
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
                sorted by relevance&nbsp;|&nbsp;<a href="">date</a>|&nbsp;<a href="">????</a>
                <hr>



                {{--<a href="{{ route('preview') }}">New General Mathematics</a><br>--}}
                {{--<span style="color: orange">Free reading</span>&nbsp;|&nbsp;<em>Mathematics</em><br>--}}
                {{--Ifeoluwa Adeola-dada, Dr. Chuks Harvey <br>--}}
                {{--<a href="#"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>--}}
                {{--Download PDF (25 Mb)</a>--}}



                {{--                {{$video2[0]->title}}--}}
                @forelse($resources as $resource)
                    <a href="{{asset('storage/'.$resource->url)}}"><img src="{{asset('storage/'.$resource->url)}}" width="100px" height="250px" alt="sdfgh" id="searchLoop" class="img-thumbnail"></a>

                    <a href="{{url('itempreview').'/'.$resource->id}}">{{$resource->title}}</a><br>
                    <span style="color: orange">Free reading</span>&nbsp;|&nbsp;<em>{{--Mathematics--}}{{$resource->category}}</em><br>
                    {{$resource->author}}<br>

                    <a href="{{$resource->id}}" data-toggle="modal" data-target="#myModal" data-id="{{--{{$resource->id}}--}}">preview</a>


                    <a href="#"><span class="glyphicon glyphicon-book{{$resource->type}}" aria-hidden="true"></span>
                        {{$resource->extension}} ({{$resource->size}}b)</a>
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


{{--using sql limit to show output--}}
                <div class="col-sm-8">
                    <div class="dataTables_info" id="table-log_info" role="status" aria-live="polite">Showing 1 to 10 of 723 entries
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="dataTables_paginate paging_simple_numbers" id="table-log_paginate">
                        <ul class="pagination">
                            <li class="paginate_button previous disabled" aria-controls="table-log" tabindex="0" id="table-log_previous">
                                <a href="#">Previous</a>
                            </li>
                            <li class="paginate_button active" aria-controls="table-log" tabindex="0"><a href="#">1</a></li>
                            <li class="paginate_button " aria-controls="table-log" tabindex="0"><a href="#">2</a></li>
                            <li class="paginate_button " aria-controls="table-log" tabindex="0"><a href="#">3</a></li>
                            <li class="paginate_button " aria-controls="table-log" tabindex="0"><a href="#">4</a></li>
                            <li class="paginate_button " aria-controls="table-log" tabindex="0"><a href="#">5</a></li>
                            <li class="paginate_button disabled" aria-controls="table-log" tabindex="0" id="table-log_ellipsis"><a href="#">…</a></li>
                            <li class="paginate_button " aria-controls="table-log" tabindex="0"><a href="#">73</a></li>
                            <li class="paginate_button next" aria-controls="table-log" tabindex="0" id="table-log_next"><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
    @include('include.previewModal')



@endsection
