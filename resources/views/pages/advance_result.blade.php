@extends('master.master')

@section('page_title')
    <title>Library | Advance Search Result</title>
@endsection

@section('content')
    <div class="container " align="left" style="margin-top: 55px;min-height: 350px ">

        @include('include.advancesearch')

        <hr>

        <div class="text-center">Library users: <em>Sign in</em> to find more articles</div>

        <div class="col-md-12">
            <div class="panel panel-default col-md-4">
                <div class="panel-heading">Show only</div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class=""><a href="#">Nursery Materials <?php /*print 2+3; */?><span class="badge">...</span></a></li>
                        <li class=""><a href="#">Primary Materials<span class="badge">...</span></a></li>
                        <li class=""><a href="#">High-School Materials<span class="badge">...</span></a></li>
                        <li class=""><a href="#">College Materials<span class="badge">...</span></a></li>
                        <li class=""><a href="#">Research Works<span class="badge">...</span></a></li>
                    </ul>
                </div>

                <div class="panel-heading">Refine My Results</div>
                <div class="panel-heading">Date</div>
                <div class="panel-body">
                    from <input max="4" type="text" name="" id=""> To <input max="4" type="text" name="" id=""> <input type="submit"
                                                                                                       value="Refine">
                    <input type="range" name="" id="" min="-500" max="2017">


                </div>
                <div class="panel-heading">Resource Type</div>
                <div class="panel-body">
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>

                </div>

                <div class="panel-heading">Subject</div>
                <div class="panel-body">
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>

                </div>

                <div class="panel-heading">Language</div>
                <div class="panel-body">
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>
                    <li>lorem</li>

                </div>

                <div class="panel-heading"><em>* + Add page to My Research</em></div>


            </div>
            <div class="panel panel-default {{--col-xs-5 col-sm-2 col-md-2--}}">
                <div class="nv-box">
                    Result 1 - 30 of 88,888,888 for All location(Everything)
                    sorted by: relevance
                    1 2
                    3
                    4
                </div>

                <div>
                    <ul>
                        <li>aaaaaaaaaaa</li>
                        <li>aaaaaaaaaaa</li>
                        <li>aaaaaaaaaaa</li>
                        <li>aaaaaaaaaaa</li>
                    </ul>
                </div>

                {{--@foreach()--}}
                <div class="col-md-8 row">
                    <div class="col-xs-6 col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="..." alt="...">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, eaque iure! Ab, aliquid
                            cumque expedita harum ipsam laboriosam laborum magnam magni minima modi mollitia,
                            perspiciatis rerum vitae voluptas voluptate, voluptatum.
                        </div>

                    </div>
                </div>


            </div>


        </div>
        {{--        <div class="" id="searchresult" >
                    <div class=" col-md-12">
                        <div class="col-md-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci commodi deleniti dolores dolorum, exercitationem impedit itaque nisi rem repellat repellendus tenetur? Consequuntur cupiditate non optio quo vero? Ipsum, porro.
                        </div>
                        <div class="col-md-8">

                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima praesentium reprehenderit sapiente sint sunt. Asperiores consequatur deleniti facilis magnam modi nisi numquam praesentium quasi quos tenetur. Amet at quod tenetur!
                        </div>

                    </div>

                </div>--}}

    </div>
    <a href="" data-toggle="modal" data-target="#myModal">preview</a>
    @include('include.previewModal')
@endsection







