{{--<div onchange="changeAutoGeneratedQuery()">--}}
<div id="advanceSearch" class="search {{--col-md-8--}}" style="background:#F2F2F2">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item active">
            <a class="nav-link active" data-toggle="tab" href="#all" role="tab">All</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#books" role="tab">Books</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#video" role="tab">Video</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#audio" role="tab">Audio</a>
        </li>

        <li class="nav-item navbar-right">
            <a target="_blank" href="{{url('useoflibrary')}}" >
                <span style="color:orange" class=" glyphicon glyphicon-info-sign" aria-hidden="true"></span> Search tips
            </a>
        </li>

    </ul>

    <span ></span>


    <!-- Tab panes -->

    <div id="advanceSearchTabs" class="tab-content col-md-8 " style="padding-left: 0">

        <div class="tab-pane active {{--form-group--}}" id="all" role="tabpanel">
            <form action="{{url('advanceresult')}}" method="post" class="{{--form-group--}}">
                {{ csrf_field() }}
                {{--form all--}}

                <input type="text" name="id" id="" class="form-control-static" value="all" required hidden>

                <section class="querySet">
                    <select name="properties[]" id="" class="form-control-static ">
                        <option value="title" id="scope_titleall1" selected>Title</option>
                        <option value="author" id="scope_authorall1">Author / creator</option>
                        <option value="subject" id="scope_suball1">Subject</option>
                        <option value="series" id="scope_lsr38all1">Series</option>
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                        <option value="publisher" id="scope_lsr04all1">Publisher / Producer</option>
                        <option value="isbn" id="scope_isbnall1">ISBN</option>
                        <option value="issn" id="scope_issnall1">ISSN</option>
                    </select>
                    <select name="prepositions[]" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>
                        <option value="notLike" id="">not like</option>

                    </select>

                    <input name="searchTexts[]" id="" class="form-control-static" required>


                </section>
                <section class="panel panel-default querySet form-group" style="width: max-content; width: -moz-max-content;">
                    <select name="conjunctions[]" id="" class="form-control-static">

                        <option value="and" id="" selected>AND</option>
                        <option value="or" id="">OR</option>
                        {{--<option value="NOT LIKE" id="">NOT</option>--}}
                    </select>

                    <select name="properties[]" id="" class="form-control-static ">
                        <option value="title" id="scope_titleall1" selected>Title</option>
                        <option value="author" id="scope_authorall1">Author / creator</option>
                        <option value="subject" id="scope_suball1">Subject</option>
                        <option value="series" id="scope_lsr38all1">Series</option>
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                        <option value="publisher" id="scope_lsr04all1">Publisher / Producer</option>
                        <option value="isbn" id="scope_isbnall1">ISBN</option>
                        <option value="issn" id="scope_issnall1">ISSN</option>
                    </select>
                    <select name="prepositions[]" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>
                        <option value="notLike" id="">not like</option>

                    </select>

                    <input name="searchTexts[]" id="" class="form-control-static" required>


                    <button type="button" class="btn btn-danger form-group-addon remove-query-set" aria-label="Left Align" title="remove query set">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </section>


                <button id="add" type="button" class="btn btn-success" aria-label="Left Align" title="Add more query">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>   Add
                </button>
                <button class="btn btn-default btn-primary">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                </button>
                <button type="reset" class="btn btn-default {{--btn-danger--}}">
                    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Clear
                </button>

            </form>

        </div>
        <div class="tab-pane {{--form-group--}}" id="books" role="tabpanel">
            <form action="{{url('advanceresult')}}" method="post" class="{{--form-group--}}">
                {{ csrf_field() }}
                <input {{--type="text"--}} name="id" class="form-control-static" value="book" required hidden>{{--this will send books to controller--}}
                <section class="querySet">
                    <select name="properties[]" id="" class="form-control-static ">
                        <option value="title" id="scope_titleall1" selected>Title</option>
                        <option value="author" id="scope_authorall1">Author / creator</option>
                        <option value="subject" id="scope_suball1">Subject</option>
                        <option value="series" id="scope_lsr38all1">Series</option>
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                        <option value="publisher" id="scope_lsr04all1">Publisher / Producer</option>
                        <option value="isbn" id="scope_isbnall1">ISBN</option>
                        <option value="issn" id="scope_issnall1">ISSN</option>
                    </select>
                    <select name="prepositions[]" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>
                        <option value="notLike" id="">not like</option>

                    </select>

                    <input name="searchTexts[]" id="" class="form-control-static" required>


                </section>
                <section class="panel panel-default querySet form-group" style="width: max-content; width: -moz-max-content;">
                    <select name="conjunctions[]" id="" class="form-control-static">

                        <option value="and" id="" selected>AND</option>
                        <option value="or" id="">OR</option>
                        {{--<option value="NOT LIKE" id="">NOT</option>--}}
                    </select>

                    <select name="properties[]" id="" class="form-control-static ">
                        <option value="title" id="scope_titleall1" selected>Title</option>
                        <option value="author" id="scope_authorall1">Author / creator</option>
                        <option value="subject" id="scope_suball1">Subject</option>
                        <option value="series" id="scope_lsr38all1">Series</option>
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                        <option value="publisher" id="scope_lsr04all1">Publisher / Producer</option>
                        <option value="isbn" id="scope_isbnall1">ISBN</option>
                        <option value="issn" id="scope_issnall1">ISSN</option>
                    </select>
                    <select name="prepositions[]" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>
                        <option value="notLike" id="">not like</option>

                    </select>

                    <input name="searchTexts[]" id="" class="form-control-static" required>

                    <button type="button" class="btn btn-danger form-group-addon remove-query-set" aria-label="Left Align" title="remove query set">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </section>

                <button id="add" type="button" class="btn btn-success" aria-label="Left Align" title="Add more query">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>   Add
                </button>
                <button class="btn btn-default btn-primary">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                </button>
                <button type="reset" class="btn btn-default {{--btn-danger--}}">
                    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Clear
                </button>

            </form>

        </div>

        <div class="tab-pane {{--form-group--}}" id="video" role="tabpanel">

            <form action="{{url('advanceresult')}}" method="post" class="{{--form-group--}}">
                {{ csrf_field() }}
                <input {{--type="text"--}} name="id" id="" class="form-control-static" value="video" required hidden>{{--this will send video to controller--}}
                <section class="querySet">
                    <select name="properties[]" id="" class="form-control-static ">
                        <option value="title" id="scope_titleall1" selected>Title</option>
                        <option value="author" id="scope_authorall1">Author / creator</option>
                        <option value="subject" id="scope_suball1">Subject</option>
                        <option value="series" id="scope_lsr38all1">Series</option>
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                        <option value="publisher" id="scope_lsr04all1">Publisher / Producer</option>
                        <option value="isbn" id="scope_isbnall1">ISBN</option>
                        <option value="issn" id="scope_issnall1">ISSN</option>
                    </select>
                    <select name="prepositions[]" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>
                        <option value="notLike" id="">not like</option>

                    </select>

                    <input name="searchTexts[]" id="" class="form-control-static" required>

                </section>
                <section class="panel panel-default querySet form-group" style="width: max-content; width: -moz-max-content;">
                    <select name="conjunctions[]" id="" class="form-control-static">

                        <option value="and" id="" selected>AND</option>
                        <option value="or" id="">OR</option>
                        {{--<option value="NOT LIKE" id="">NOT</option>--}}
                    </select>

                    <select name="properties[]" id="" class="form-control-static ">
                        <option value="title" id="scope_titleall1" selected>Title</option>
                        <option value="author" id="scope_authorall1">Author / creator</option>
                        <option value="subject" id="scope_suball1">Subject</option>
                        <option value="series" id="scope_lsr38all1">Series</option>
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                        <option value="publisher" id="scope_lsr04all1">Publisher / Producer</option>
                        <option value="isbn" id="scope_isbnall1">ISBN</option>
                        <option value="issn" id="scope_issnall1">ISSN</option>
                    </select>
                    <select name="prepositions[]" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>
                        <option value="notLike" id="">not like</option>

                    </select>

                    <input name="searchTexts[]" id="" class="form-control-static" required>

                    <button type="button" class="btn btn-danger form-group-addon remove-query-set" aria-label="Left Align" title="remove query set">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </section>

                <button id="add" type="button" class="btn btn-success" aria-label="Left Align" title="Add more query">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>   Add
                </button>
                <button class="btn btn-default btn-primary">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                </button>
                <button type="reset" class="btn btn-default {{--btn-danger--}}">
                    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Clear
                </button>

            </form>

        </div>

        <div class="tab-pane {{--form-group--}}" id="audio" role="tabpanel">

            <form action="{{url('advanceresult')}}" method="post" class="{{--form-group--}}">
                {{ csrf_field() }}
                <input {{--type="text"--}} name="id" id="" class="form-control-static" value="audio" required hidden>{{--this will send audio to controller--}}
                <section class="querySet">
                    <select name="properties[]" id="" class="form-control-static ">
                        <option value="title" id="scope_titleall1" selected>Title</option>
                        <option value="author" id="scope_authorall1">Author / creator</option>
                        <option value="subject" id="scope_suball1">Subject</option>
                        <option value="series" id="scope_lsr38all1">Series</option>
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                        <option value="publisher" id="scope_lsr04all1">Publisher / Producer</option>
                        <option value="isbn" id="scope_isbnall1">ISBN</option>
                        <option value="issn" id="scope_issnall1">ISSN</option>
                    </select>
                    <select name="prepositions[]" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>
                        <option value="notLike" id="">not like</option>

                    </select>

                    <input name="searchTexts[]" id="" class="form-control-static" required>


                </section>
                <section class="panel panel-default querySet form-group" style="width: max-content; width: -moz-max-content;">
                    <select name="conjunctions[]" id="" class="form-control-static">

                        <option value="and" id="" selected>AND</option>
                        <option value="or" id="">OR</option>
                        {{--<option value="NOT LIKE" id="">NOT</option>--}}
                    </select>

                    <select name="properties[]" id="" class="form-control-static ">
                        <option value="title" id="scope_titleall1" selected>Title</option>
                        <option value="author" id="scope_authorall1">Author / creator</option>
                        <option value="subject" id="scope_suball1">Subject</option>
                        <option value="series" id="scope_lsr38all1">Series</option>
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                        <option value="publisher" id="scope_lsr04all1">Publisher / Producer</option>
                        <option value="isbn" id="scope_isbnall1">ISBN</option>
                        <option value="issn" id="scope_issnall1">ISSN</option>
                    </select>
                    <select name="prepositions[]" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>
                        <option value="notLike" id="">not like</option>

                    </select>

                    <input name="searchTexts[]" id="" class="form-control-static" required>

                    <button type="button" class="btn btn-danger form-group-addon remove-query-set" aria-label="Left Align" title="remove query set">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                </section>


                <button id="add" type="button" class="btn btn-success" aria-label="Left Align" title="Add more query">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>   Add
                </button>
                <button class="btn btn-default btn-primary">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                </button>
                <button type="reset" class="btn btn-default {{--btn-danger--}}">
                    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Clear
                </button>
            </form>

        </div>
        @include('include.errors')

    </div>
    <div class="col-md-4 hidden-xs hidden-sm" style="padding-right: 0">
        <textarea class="form-control" style="float: right; width: -moz-fit-content" placeholder="Auto-generated Query" disabled name="query" id="" cols="30" rows="10"></textarea>
    </div>


</div>

{{--</div>--}}