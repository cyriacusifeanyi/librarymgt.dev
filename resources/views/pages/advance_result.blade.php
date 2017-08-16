@extends('master.master')

@section('page_title')
    <title>Library | Advance Search Result</title>
@endsection

@section('content')
    <div class="container " align="left" style="margin-top: 55px;min-height: 350px ">

        <div class="search" style="background:#F2F2F2">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link active" data-toggle="tab" href="#all" role="tab">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#books" role="tab">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#audios" role="tab">Audio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#videos" role="tab">Videos</a>
                </li>
                <li class="nav-item navbar-right">
                    <a target="_blank" href="{{--Search tips--}}" >
                        <span style="color:orange" class=" glyphicon glyphicon-info-sign" aria-hidden="true"></span> Search tips
                    </a>
                </li>

            </ul>
            <span >

                </span>


            <!-- Tab panes -->

            <div class="tab-content">

                <div class="tab-pane active form-group" id="all" role="tabpanel">
                    <form action="" class="form-group">
                        {{ csrf_field() }}
                        {{--form all--}}
                        <div class="form-group">
                            <select name="" id="" class="form-control-static ">
                                <option value="any" id="scope_anyall1" selected>Keywords anywhere</option>
                                <option value="title" id="scope_titleall1">Title</option>
                                <option value="creator" id="scope_creatorall1">Author / creator</option>
                                <option value="subject" id="scope_suball1">Subject</option>
                                <option value="series" id="scope_lsr38all1">Series</option>
                                <option value="genre" id="scope_lsr30all1">genre</option>
                                <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                                <option value="publisher" id="scope_lsr04all1">Publisher</option>
                                <option value="isbn" id="scope_isbnall1">ISBN</option>
                                <option value="issn" id="scope_issnall1">ISSN</option>
                            </select>
                            <select name="" id="" class="form-control-static">
                                <option value="contains" id="" selected>contains</option>
                                <option value="exact phrase" id="">exact phrase</option>
                                <option value="startwith" id="">starts with</option>

                            </select>

                            <input type="text" name="" id="" class="form-control-static" required>

                            <select name="" id="" class="form-control-static">

                                <option value="any" id="" selected>AND</option>
                                <option value="title" id="">OR</option>
                                <option value="creator" id="">NOT</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select name="" id="" class="form-control-static">
                                <option value="any" id="scope_anyall1" >Keywords anywhere</option>
                                <option value="title" id="scope_titleall1" selected>Title</option>
                                <option value="creator" id="scope_creatorall1">Author / creator</option>
                                <option value="subject" id="scope_suball1">Subject</option>
                                <option value="series" id="scope_lsr38all1">Series</option>
                                <option value="genre" id="scope_lsr30all1">genre</option>
                                <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                                <option value="publisher" id="scope_lsr04all1">Publisher</option>
                                <option value="isbn" id="scope_isbnall1">ISBN</option>
                                <option value="issn" id="scope_issnall1">ISSN</option>
                            </select>
                            <select name="" id="" class="form-control-static">
                                <option value="contains" id="" selected>contains</option>
                                <option value="exact phrase" id="">exact phrase</option>
                                <option value="startwith" id="">starts with</option>

                            </select>

                            <input type="text" name="" id="" class="form-control-static">

                            <select name="" id="" class="form-control-static">

                                <option value="any" id="" selected>AND</option>
                                <option value="title" id="">OR</option>
                                <option value="creator" id="">NOT</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select name="" id="" class="form-control-static">
                                <option value="any" id="scope_anyall1">Keywords anywhere</option>
                                <option value="title" id="scope_titleall1">Title</option>
                                <option value="creator" id="scope_creatorall1" selected>Author / creator</option>
                                <option value="subject" id="scope_suball1">Subject</option>
                                <option value="series" id="scope_lsr38all1">Series</option>
                                <option value="genre" id="scope_lsr30all1">genre</option>
                                <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                                <option value="publisher" id="scope_lsr04all1">Publisher</option>
                                <option value="isbn" id="scope_isbnall1">ISBN</option>
                                <option value="issn" id="scope_issnall1">ISSN</option>
                            </select>
                            <select name="" id="" class="form-control-static">
                                <option value="contains" id="" selected>contains</option>
                                <option value="exact phrase" id="">exact phrase</option>
                                <option value="startwith" id="">starts with</option>

                            </select>

                            <input type="text" name="" id="" class="form-control-static">

                            <select name="" id="" class="form-control-static">

                                <option value="any" id="" selected>AND</option>
                                <option value="title" id="">OR</option>
                                <option value="creator" id="">NOT</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select name="" id="" class="form-control-static">
                                <option value="any" id="scope_anyall1" selected>Keywords anywhere</option>
                                <option value="title" id="scope_titleall1">Title</option>
                                <option value="creator" id="scope_creatorall1">Author / creator</option>
                                <option value="subject" id="scope_suball1" selected>Subject</option>
                                <option value="series" id="scope_lsr38all1">Series</option>
                                <option value="genre" id="scope_lsr30all1">genre</option>
                                <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                                <option value="publisher" id="scope_lsr04all1">Publisher</option>
                                <option value="isbn" id="scope_isbnall1">ISBN</option>
                                <option value="issn" id="scope_issnall1">ISSN</option>
                            </select>
                            <select name="" id="" class="form-control-static">
                                <option value="contains" id="" selected>contains</option>
                                <option value="exact phrase" id="">exact phrase</option>
                                <option value="startwith" id="">starts with</option>

                            </select>

                            <input type="text" name="" id="" class="form-control-static">

                            <select name="" id="" class="form-control-static">

                                <option value="any" id="" selected>AND</option>
                                <option value="title" id="">OR</option>
                                <option value="creator" id="">NOT</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-default{{-- btn-primary--}}">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                        </button>
                        <button type="reset" class="btn btn-default {{--btn-danger--}}">
                            <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Clear
                        </button>

                    </form>

                </div>
                <div class="tab-pane form-group" id="books" role="tabpanel">
                    <form action="" class="form-group">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <select name="" id="" class="form-control-static ">
                                <option value="title" id="scope_titleall1" selected>Title</option>
                                <option value="creator" id="scope_creatorall1">Author / creator</option>
                                <option value="subject" id="scope_suball1">Subject</option>
                                <option value="series" id="scope_lsr38all1">Series</option>
                                <option value="genre" id="scope_lsr30all1">genre</option>
                                <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                                <option value="publisher" id="scope_lsr04all1">Publisher</option>
                                <option value="isbn" id="scope_isbnall1">ISBN</option>
                                <option value="issn" id="scope_issnall1">ISSN</option>
                            </select>
                            <select name="" id="" class="form-control-static">
                                <option value="contains" id="" selected>contains</option>
                                <option value="exact phrase" id="">exact phrase</option>
                                <option value="startwith" id="">starts with</option>

                            </select>

                            <input type="text" name="" id="" class="form-control-static" required>

                            <select name="" id="" class="form-control-static">

                                <option value="any" id="" selected>AND</option>
                                <option value="title" id="">OR</option>
                                <option value="creator" id="">NOT</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select name="" id="" class="form-control-static">
                                <option value="title" id="scope_titleall1" >Title</option>
                                <option value="creator" id="scope_creatorall1" selected>Author / creator</option>
                                <option value="subject" id="scope_suball1">Subject</option>
                                <option value="series" id="scope_lsr38all1">Series</option>
                                <option value="genre" id="scope_lsr30all1">genre</option>
                                <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                                <option value="publisher" id="scope_lsr04all1">Publisher</option>
                                <option value="isbn" id="scope_isbnall1">ISBN</option>
                                <option value="issn" id="scope_issnall1">ISSN</option>
                            </select>
                            <select name="" id="" class="form-control-static">
                                <option value="contains" id="" selected>contains</option>
                                <option value="exact phrase" id="">exact phrase</option>
                                <option value="startwith" id="">starts with</option>

                            </select>

                            <input type="text" name="" id="" class="form-control-static">

                            <select name="" id="" class="form-control-static">

                                <option value="any" id="" selected>AND</option>
                                <option value="title" id="">OR</option>
                                <option value="creator" id="">NOT</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default{{-- btn-primary--}}">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                        </button>
                    </form>

                </div>
                <div class="tab-pane form-group" id="audios" role="tabpanel">

                    <form action="" class="form-group">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <select name="" id="" class="form-control-static ">
                                <option value="title" id="scope_titleall1" selected>Title</option>
                                <option value="creator" id="scope_creatorall1">Author / creator</option>
                                <option value="creator" id="scope_creatorall1">Composer</option>
                                <option value="series" id="scope_lsr38all1">Album</option>
                                <option value="genre" id="scope_lsr30all1">Genre</option>
                                <option value="publisher" id="scope_lsr04all1">Producer</option>
                            </select>
                            <select name="" id="" class="form-control-static">
                                <option value="contains" id="" selected>contains</option>
                                <option value="exact phrase" id="">exact phrase</option>
                                <option value="startwith" id="">starts with</option>

                            </select>

                            <input type="text" name="" id="" class="form-control-static" required>

                            <select name="" id="" class="form-control-static">

                                <option value="any" id="" selected>AND</option>
                                <option value="title" id="">OR</option>
                                <option value="creator" id="">NOT</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select name="" id="" class="form-control-static ">
                                <option value="title" id="scope_titleall1">Title</option>
                                <option value="creator" id="scope_creatorall1" selected>Author / creator</option>
                                <option value="creator" id="scope_creatorall1">Composer</option>
                                <option value="series" id="scope_lsr38all1">Album</option>
                                <option value="genre" id="scope_lsr30all1">Genre</option>
                                <option value="publisher" id="scope_lsr04all1">Producer</option>
                            </select>
                            <select name="" id="" class="form-control-static">
                                <option value="contains" id="" selected>contains</option>
                                <option value="exact phrase" id="">exact phrase</option>
                                <option value="startwith" id="">starts with</option>

                            </select>

                            <input type="text" name="" id="" class="form-control-static">

                            <select name="" id="" class="form-control-static">

                                <option value="any" id="" selected>AND</option>
                                <option value="title" id="">OR</option>
                                <option value="creator" id="">NOT</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default{{-- btn-primary--}}">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                        </button>
                    </form>

                </div>
                <div class="tab-pane form-group" id="videos" role="tabpanel">

                    <form action="" class="form-group">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <select name="" id="" class="form-control-static">
                                <option value="title" id="scope_titleall1" selected>Title</option>
                                <option value="creator" id="scope_creatorall1">Author / creator</option>
                                <option value="series" id="scope_lsr38all1">Series</option>
                                <option value="genre" id="scope_lsr30all1">genre</option>
                                <option value="publisher" id="scope_lsr04all1">Producer</option>
                            </select>
                            <select name="" id="" class="form-control-static">
                                <option value="contains" id="" selected>contains</option>
                                <option value="exact phrase" id="">exact phrase</option>
                                <option value="startwith" id="">starts with</option>

                            </select>

                            <input type="text" name="" id="" class="form-control-static" required>

                            <select name="" id="" class="form-control-static">

                                <option value="any" id="" selected>AND</option>
                                <option value="title" id="">OR</option>
                                <option value="creator" id="">NOT</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select name="" id="" class="form-control-static">
                                <option value="title" id="scope_titleall1" >Title</option>
                                <option value="creator" id="scope_creatorall1"selected>Author / creator</option>
                                <option value="series" id="scope_lsr38all1">Series</option>
                                <option value="genre" id="scope_lsr30all1">genre</option>
                                <option value="publisher" id="scope_lsr04all1">Producer</option>
                            </select>
                            <select name="" id="" class="form-control-static">
                                <option value="contains" id="" selected>contains</option>
                                <option value="exact phrase" id="">exact phrase</option>
                                <option value="startwith" id="">starts with</option>

                            </select>

                            <input type="text" name="" id="" class="form-control-static">

                            <select name="" id="" class="form-control-static">

                                <option value="any" id="" selected>AND</option>
                                <option value="title" id="">OR</option>
                                <option value="creator" id="">NOT</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default{{-- btn-primary--}}">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                        </button>
                    </form>

                </div>

            </div>
        </div>

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


@endsection







