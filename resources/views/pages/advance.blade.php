@extends('master.master')

@section('page_title')
    <title>Library | Advance Search</title>
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
                    <form action="{{url('advanceresult')}}" class="form-group">
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

                    <form action="{{url('advanceresult')}}" class="form-group">
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

                    <form action="{{url('advanceresult')}}" class="form-group">
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

        <strong>Find more articles</strong>
        <li>L!brary users: <em>Sign in</em> to find more articles</li>
        <li>Study Group: find resources for accessing articles during Group research</li>
        <br>


        <strong>Help with L!brary</strong>
        <li>Am I really searching "Everything" ?</li>
        <li>L!brary Quick Tips</li>
        <li>Ask a Librarian</li>
        <li>Report a problem</li>
        <br>


        <strong>Not available at L!brary</strong>
        <li>Visit Our Trusted-site collection :)</li>
        <br>





    </div>


@endsection







