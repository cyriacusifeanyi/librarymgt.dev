@extends('master.master')

@section('page_title')

    <title>Library | Search</title>

    {{--<title>8 Search Results - Keywords(computer) - Author name(ifeanyi) - ScienceDirect</title>--}}

@endsection

@section('content')
    <div class="container" align="center" style="margin-top: 55px">
        {{--<div class="col-md-12">--}}
        {{--<div class="container">--}}
        {{--<div class="col-md-2" ></div>--}}
        <div class="col-md-12" >
            <form action="#" method="get">
                <div class="input-group">
                    {{--$search =  $request->input('search');--}}

                    <input type="text" maxlength="100" placeholder="L!brary Search" value="{{$search}}" class="form-control " name="search"  >
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-search"></span>
                    </div>

                </div>
                <div class="form-group">
                    <label class="checkbox-inline">
                        <input name="opt1" type="checkbox" checked="{{$opt1}}" {{--checked--}}>All
                    </label>
                    <label class="checkbox-inline">
                        <input name="opt2" type="checkbox" checked="{{$opt2}}">Books
                    </label>
                    <label class="checkbox-inline">
                        <input name="opt3" type="checkbox" checked="{{$opt3}}">Video
                    </label>
                    <label class="checkbox-inline">
                        <input name="opt4" type="checkbox" checked="{{$opt4}}">Music
                    </label>
                    <label class="checkbox-inline">
                        <input name="opt5" type="checkbox" checked="{{$opt5}}">Others
                    </label>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Search">
                    <a target="_blank" href="{{url('advancesearch')}}">Advance Search<span style="color: orange">&nbsp;<i class="glyphicon glyphicon-new-window"></i></span></a>
                </div>

            </form>
        </div>
        {{--<div class="col-md-2" ></div>--}}

        {{--</div>--}}
    {{--</div>--}}

    </div>
    <div class="container " align="left" style="margin-top: 55px;min-height: 350px ">
        <div class="col-md-12">
            <div class="col-md-3 col-sm-3 col-xs-3 {{--visible-lg-block visible-md-block visible-sm-block visible-xs-block--}}  ">
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

            <div class="col-md-8 col-sm-8 col-xs-8 {{--visible-lg-block visible-md-block visible-sm-block visible-xs-block--}} ">
                sorted by relevance&nbsp;|&nbsp;<a href="">date</a>
                <hr>

            <a href="#">New General Mathematics</a><br>
            <span style="color: orange">Free reading</span>&nbsp;|&nbsp;<em>Mathematics</em><br>
            Ifeoluwa Adeola-dada, Dr. Chuks Harvey <br>
            <a href="#"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                Download PDF (25 Mb)</a>

        </div>

    </div>
</div>




@endsection
