@extends('master.master')

@section('page_title')
    <title>Library | Advance Search Result</title>
@endsection

@section('content')
    <div class="container " align="left" style="margin-top: 55px;min-height: 350px ">
        @include('include.advanceSearch')

        <hr>

        <div class="text-center">Library users: <em>Sign in</em> to find more articles</div>

        <div class="col-md-12">

                <button type="button" class="hidden-lg hidden-md btn btn-default" data-toggle="collapse" data-target="#filter" aria-expanded="false" aria-controls="navbar">
                    <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                </button>

            <div id="filter" class=" panel panel-default col-md-4 collapse in {{--navbar-collapse collapse--}}" aria-expanded="true">
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
            <div class="panel panel-default {{--col-xs-5 col-sm-2--}} col-md-8">
                <div {{--class="nv-box"--}}>
                    Result {{$searchResult->first()->id}} - {{$searchResult->count()}} of {{$searchResult/*->last()*/->count()}}{88,888,888} for All location(Everything)
                    {{--<br>--}}
                    sorted by: relevance
                    1 2
                    3
                    4
                </div>
                <hr>
                <div class="col-md-8">
                    @forelse($searchResult as $resource)

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
{{--                            <p>Your Search - <em style="font-weight: bold; font-style: normal;">1{{$pageData['searchBox']}}</em>  - did not match any documents.</p>--}}

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







