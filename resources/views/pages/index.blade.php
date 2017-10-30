@extends('master.master')

@section('page_title')
    <title>Library | Home</title>
@endsection

@section('page_style')
    {{Html::script('assets/js/script.js')}}
@endsection

@section('content')
    <div class="container col-md-12" align="center" style="margin-top: 120px">
        {{--beginning of phase1--}}
        <div {{--class="container"--}}>
            <div class="container">

                <img class="image" src="{{url('assets/images/books.gif')}}" alt="Library Logo">
                <h1>The Scholar Bay</h1>
                {{--end of phase 1--}}


                {{--beginning of phase2--}}

                <div class="col-md-2" ></div>
                <div class="col-md-8" >
                    <form id="searchForm" action="{{url('simplesearch/')}}">
                        <div class="input-group">
                            <input id="searchBox" maxlength="100" placeholder="L!brary Search" class="form-control " name="searchBox" >
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-search"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input name="opt1" onchange="allCheck()" class="check-non" id="checkAll" type="checkbox" checked>All
                            </label>
                            <label class="checkbox-inline">
                                <input name="opt2" onchange="checkControl()" class="check-non" id="checkBooks" type="checkbox">Books
                            </label>
                            <label class="checkbox-inline">
                                <input name="opt3" onchange="checkControl()" class="check-non" id="checkVideo" type="checkbox">Video
                            </label>
                            <label class="checkbox-inline">
                                <input name="opt4" onchange="checkControl()" class="check-non" id="checkAudio" type="checkbox">Audio
                            </label>
                            <label class="checkbox-inline">
                                <input name="opt5" onchange="checkControl()" class="check-non" id="checkOthers" type="checkbox">Others
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Search">
                            <input type="submit" onclick="changeFormMethod()" class="btn" value="I'm Feeling Lucky">
                        </div>

                        <a {{--target="_blank"--}} href="{{url('advancesearch')}}">Advance Search<span style="color: orange">&nbsp;<i class="glyphicon glyphicon-new-window"></i></span></a> |
                        <a href="{{url('useoflibrary')}}">Use of L<span style="color: orange">!</span>brary 101</a>
                    </form>
                </div>
                <div class="col-md-2" ></div>
            </div>
                {{--end of phase 2--}}

            {{--beginning of phase3--}}
            <div {{--class="container"--}} style="padding-top: 80px" >
                <hr class="hr-divider">
                <div class="row">

                    {{--<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">--}}
                        {{--<div class="carousel-inner" role="listbox">--}}
                            {{--<div class="carousel-item active">--}}
                                {{--<img class="d-block img-fluid" src="assets/images/night.jpg" alt="First slide">--}}
                            {{--</div>--}}
                            {{--<div class="carousel-item">--}}
                                {{--<img class="d-block img-fluid" src="assets/images/night.jpg" alt="Second slide">--}}
                            {{--</div>--}}
                            {{--<div class="carousel-item">--}}
                                {{--<img class="d-block img-fluid" src="assets/images/night.jpg" alt="Third slide">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}

{{----}}
{{----}}
                    {{----}}
                    {{--<div id="carousel-example-generic" class="carousel slide col-md-8 --}}{{--col-md-offset-8--}}{{-- col-xs-12" data-ride="carousel">--}}
                        {{--<!-- Indicators -->--}}
                        {{--<ol class="carousel-indicators">--}}
                            {{--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>--}}
                            {{--<li data-target="#carousel-example-generic" data-slide-to="1"></li>--}}
                            {{--<li data-target="#carousel-example-generic" data-slide-to="2"></li>--}}
                            {{--<li data-target="#carousel-example-generic" data-slide-to="3"></li>--}}
                        {{--</ol>--}}

                        {{--<!-- Wrapper for slides -->--}}
                        {{--<div class="carousel-inner" role="listbox">--}}
                            {{--<div class="item active">--}}
                                {{--<img src="assets/images/night.jpg" alt="...">--}}
                                {{--<div class="carousel-caption">--}}
                                    {{--...HELLO--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="item">--}}
                                {{--<img src="assets/images/Library-inwords_sm.gif" alt="...">--}}
                                {{--<div class="carousel-caption">--}}
                                    {{--...HOWDY--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="item">--}}
                                {{--<img src="assets/images/night.jpg" alt="...">--}}
                                {{--<div class="carousel-caption">--}}
                                    {{--...OK--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="item">--}}
                                {{--<img src="assets/images/night.jpg" alt="...">--}}
                                {{--<div class="carousel-caption">--}}
                                    {{--...hmmm--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--...Dedicated to serve--}}
                        {{--</div>--}}

                        {{--<!-- Controls -->--}}
                        {{--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">--}}
                            {{--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
                            {{--<span class="sr-only">Previous</span>--}}
                        {{--</a>--}}
                        {{--<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">--}}
                            {{--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
                            {{--<span class="sr-only">Next</span>--}}
                        {{--</a>--}}
                    {{--</div>--}}




                    {{--<div class="col-md-8">--}}
                        {{--<ul class="list-group">--}}
                            {{--<li class="list-group-item">E-Resource</li>--}}
                            {{--<li class="list-group-item">Staff Directory</li>--}}
                            {{--<li class="list-group-item">Ask Librarian</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-4">--}}
                        {{--<ul class="list-group">--}}
                            {{--<li class="list-group-item">E-Resource</li>--}}
                            {{--<li class="list-group-item">Staff Directory</li>--}}
                            {{--<li class="list-group-item">Ask Librarian</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                </div>
            </div>
            {{--end of phase 3--}}

        </div>



    </div>


@endsection