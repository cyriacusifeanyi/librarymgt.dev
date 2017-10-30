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
            <a class="nav-link" data-toggle="tab" href="#video" role="tab">Video</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#audio" role="tab">Audio</a>
        </li>

        <li class="nav-item navbar-right">
            <a target="_blank" href="{{--Search tips--}}" >
                <span style="color:orange" class=" glyphicon glyphicon-info-sign" aria-hidden="true"></span> Search tips
            </a>
        </li>

    </ul>

    <span ></span>


    <!-- Tab panes -->

    <div class="tab-content">

        <div class="tab-pane active {{--form-group--}}" id="all" role="tabpanel">
            <form action="{{url('advanceresult')}}" class="{{--form-group--}}">
                {{ csrf_field() }}
                {{--form all--}}

                <input {{--type="text"--}} name="id" id="" class="form-control-static" value="all" required hidden>

                <div class={{--"form-group"--}}>
                    <select name="all00" id="" class="form-control-static ">
                        {{--<option name="key" value="any" id="scope_anyall1" selected>Keywords anywhere</option>--}}
                        <option value="title" id="scope_titleall1" selected>Title</option>
                        <option value="author" id="scope_authorall1">Author / creator</option>
                        <option value="subject" id="scope_suball1">Subject</option>
                        {{--<option value="series" id="scope_lsr38all1">Series</option>--}}
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                        <option value="publisher" id="scope_lsr04all1">Publisher</option>
                        <option value="isbn" id="scope_isbnall1">ISBN</option>
                        <option value="issn" id="scope_issnall1">ISSN</option>
                    </select>
                    <select name="all01" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>
                    </select>

                    <input name="allSearch[]" id="" class="form-control-static" required>

                    <select name="all02" id="" class="form-control-static">

                        <option value="and" id="" selected>AND</option>
                        <option value="or" id="">OR</option>
                        <option value="NOT LIKE" id="">NOT</option>
                    </select>
                </div>

                <div class="{{--form-group--}}">
                    <select name="all10" id="" class="form-control-static">
                        {{--<option value="any" id="scope_anyall1" >Keywords anywhere</option>--}}
                        <option value="title" id="scope_titleall1" >Title</option>
                        <option value="author" id="scope_authorall1" selected>Author / creator</option>
                        <option value="subject" id="scope_suball1">Subject</option>
                        {{--<option value="series" id="scope_lsr38all1">Series</option>--}}
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                        <option value="publisher" id="scope_lsr04all1">Publisher</option>
                        <option value="isbn" id="scope_isbnall1">ISBN</option>
                        <option value="issn" id="scope_issnall1">ISSN</option>
                    </select>
                    <select name="all11" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>

                    </select>

                    <input name="allSearch[]" id="" class="form-control-static">

                    <select name="all12" id="" class="form-control-static">

                        <option value="and" id="" selected>AND</option>
                        <option value="or" id="">OR</option>
                        <option value="NOT LIKE" id="">NOT</option>
                    </select>
                </div>

                <div class="{{--form-group--}}">
                    <select name="all20" id="" class="form-control-static">
                        {{--<option value="any" id="scope_anyall1">Keywords anywhere</option>--}}
                        <option value="title" id="scope_titleall1">Title</option>
                        <option value="author" id="scope_authorall1" >Author / creator</option>
                        <option value="subject" id="scope_suball1" selected>Subject</option>
                        {{--<option value="series" id="scope_lsr38all1">Series</option>--}}
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                        <option value="publisher" id="scope_lsr04all1">Publisher</option>
                        <option value="isbn" id="scope_isbnall1">ISBN</option>
                        <option value="issn" id="scope_issnall1">ISSN</option>
                    </select>
                    <select name="all21" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>

                    </select>

                    <input name="allSearch[]" id="" class="form-control-static">

                    <select name="all22" id="" class="form-control-static">

                        <option value="and" id="" selected>AND</option>
                        <option value="or" id="">OR</option>
                        <option value="NOT LIKE" id="">NOT</option>
                    </select>
                </div>

                <div class="{{--form-group--}}">
                    <select name="all30" id="" class="form-control-static">
                        {{--<option value="any" id="scope_anyall1" selected>Keywords anywhere</option>--}}
                        <option value="title" id="scope_titleall1">Title</option>
                        <option value="author" id="scope_authorall1">Author / creator</option>
                        <option value="subject" id="scope_suball1" selected>Subject</option>
                        {{--<option value="series" id="scope_lsr38all1">Series</option>--}}
                        <option value="genre" id="scope_lsr30all1" selected>genre</option>
                        <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                        <option value="publisher" id="scope_lsr04all1">Publisher</option>
                        <option value="isbn" id="scope_isbnall1">ISBN</option>
                        <option value="issn" id="scope_issnall1">ISSN</option>
                    </select>
                    <select name="all31" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>

                    </select>

                    <input name="allSearch[]" id="" class="form-control-static">

                    {{--<select name="all32" id="" class="form-control-static">--}}
                        {{--<option value="and" id="" selected>AND</option>--}}
                        {{--<option value="or" id="">OR</option>--}}
                        {{--<option value="NOT LIKE" id="">NOT</option>--}}
                    {{--</select>--}}
                </div>
                <button class="btn btn-default btn-primary">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                </button>
                <button type="reset" class="btn btn-default {{--btn-danger--}}">
                    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Clear
                </button>

            </form>

        </div>
        <div class="tab-pane {{--form-group--}}" id="books" role="tabpanel">
            <form action="{{url('advanceresult')}}" class="{{--form-group--}}">
                {{ csrf_field() }}
                <input {{--type="text"--}} name="id" id="" class="form-control-static" value="book" required hidden>{{--this will send books to controller--}}
                <div class="{{--form-group--}}">
                    <select name="book00" id="" class="form-control-static ">
                        <option value="title" id="scope_titleall1" selected>Title</option>
                        <option value="author" id="scope_authorall1">Author / creator</option>
                        <option value="subject" id="scope_suball1">Subject</option>
                        <option value="series" id="scope_lsr38all1">Series</option>
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                        <option value="publisher" id="scope_lsr04all1">Publisher</option>
                        <option value="isbn" id="scope_isbnall1">ISBN</option>
                        <option value="issn" id="scope_issnall1">ISSN</option>
                    </select>
                    <select name="book01" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>

                    </select>

                    <input name="bookSearch[]" id="" class="form-control-static" required>

                    <select name="book02" id="" class="form-control-static">

                        <option value="and" id="" selected>AND</option>
                        <option value="or" id="">OR</option>
                        <option value="NOT LIKE" id="">NOT</option>
                    </select>
                </div>

                <div class="{{--form-group--}}">
                    <select name="book10" id="" class="form-control-static">
                        <option value="title" id="scope_titleall1" >Title</option>
                        <option value="author" id="scope_authorall1" selected>Author / creator</option>
                        <option value="subject" id="scope_suball1">Subject</option>
                        <option value="series" id="scope_lsr38all1">Series</option>
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="p_o_publication" id="scope_lsr05all1">Place of publication</option>
                        <option value="publisher" id="scope_lsr04all1">Publisher</option>
                        <option value="isbn" id="scope_isbnall1">ISBN</option>
                        <option value="issn" id="scope_issnall1">ISSN</option>
                    </select>
                    <select name="book11" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>

                    </select>

                    <input name="bookSearch[]" id="" class="form-control-static">

                    {{--<select name="book12" id="" class="form-control-static">--}}
                        {{--<option value="and" id="" selected>AND</option>--}}
                        {{--<option value="or" id="">OR</option>--}}
                        {{--<option value="NOT LIKE" id="">NOT</option>--}}
                    {{--</select>--}}
                    <button class="btn btn-default form-control-static btn-primary">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                    </button>
                </div>
                {{--<button class="btn btn-default--}}{{-- btn-primary--}}{{--">--}}
                    {{--<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search--}}
                {{--</button>--}}
            </form>

        </div>

        <div class="tab-pane {{--form-group--}}" id="video" role="tabpanel">

            <form action="{{url('advanceresult')}}" class="{{--form-group--}}">
                {{ csrf_field() }}
                <input {{--type="text"--}} name="id" id="" class="form-control-static" value="video" required hidden>{{--this will send video to controller--}}
                <div class="{{--form-group--}}">
                    <select name="video00" id="" class="form-control-static">
                        <option value="title" id="scope_titleall1" selected>Title</option>
                        <option value="author" id="scope_authorall1">Author / creator</option>
                        {{--<option value="series" id="scope_lsr38all1">Series</option>--}}
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="publisher" id="scope_lsr04all1">Producer</option>
                    </select>
                    <select name="video01" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>

                    </select>

                    <input name="videoSearch[]" id="" class="form-control-static" required>

                    <select name="video02" id="" class="form-control-static">
                        <option value="contains" id="" selected>AND</option>
                        <option value="exactPhrase" id="">OR</option>
                        <option value="startsWith" id="">NOT</option>
                    </select>
                </div>

                <div class="{{--form-group--}}">
                    <select name="video10" id="" class="form-control-static">
                        <option value="title" id="scope_titleall1" >Title</option>
                        <option value="author" id="scope_authorall1"selected>Author / creator</option>
                        {{--<option value="series" id="scope_lsr38all1">Series</option>--}}
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="publisher" id="scope_lsr04all1">Producer</option>
                    </select>
                    <select name="video11" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>
                    </select>

                    <input name="videoSearch[]" id="" class="form-control-static">

                    {{--<select name="video12" id="" class="form-control-static">--}}
                        {{--<option value="and" id="" selected>AND</option>--}}
                        {{--<option value="or" id="">OR</option>--}}
                        {{--<option value="NOT LIKE" id="">NOT</option>--}}
                    {{--</select>--}}
                    <button class="btn btn-default form-control-static btn-primary">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                    </button>
                </div>
                {{--<button class="btn btn-default--}}{{-- btn-primary--}}{{--">--}}
                    {{--<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search--}}
                {{--</button>--}}
            </form>

        </div>

        <div class="tab-pane {{--form-group--}}" id="audio" role="tabpanel">

            <form action="{{url('advanceresult')}}" class="{{--form-group--}}">
                {{ csrf_field() }}
                <input {{--type="text"--}} name="id" id="" class="form-control-static" value="audio" required hidden>{{--this will send audio to controller--}}
                <div class="{{--form-group--}}">
                    <select name="audio00" id="" class="form-control-static ">
                        <option value="title" id="scope_titleall1" selected>Title</option>
                        <option value="author" id="scope_authorall1">Author / creator</option>
                        {{--<option value="author" id="scope_creatorall1">Composer</option>--}}
                        <option value="series" id="scope_lsr38all1">Album</option>
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="publisher" id="scope_lsr04all1">Producer</option>
                    </select>
                    <select name="audio01" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>
                    </select>

                    <input name="audioSearch[]" id="" class="form-control-static" required>

                    <select name="audio02" id="" class="form-control-static">

                        <option value="AND" id="" selected>AND</option>
                        <option value="OR" id="">OR</option>
                        <option value="NOT LIKE" id="">NOT</option>
                    </select>

                </div>

                <div class="{{--form-group--}}">
                    <select name="audio10" id="" class="form-control-static ">
                        <option value="title" id="scope_titleall1">Title</option>
                        <option value="author" id="scope_authorall1" selected>Author / creator</option>
                        {{--<option value="author" id="scope_authorall1">Composer</option>--}}
                        <option value="series" id="scope_lsr38all1">Album</option>
                        <option value="genre" id="scope_lsr30all1">genre</option>
                        <option value="publisher" id="scope_lsr04all1">Producer</option>
                    </select>
                    <select name="audio11" id="" class="form-control-static">
                        <option value="contains" id="" selected>contains</option>
                        <option value="exactPhrase" id="">exact phrase</option>
                        <option value="startsWith" id="">starts with</option>

                    </select>

                    <input name="audioSearch[]" id="" class="form-control-static">

                    {{--<select name="audio12" id="" class="form-control-static">--}}

                        {{--<option value="and" id="" selected>AND</option>--}}
                        {{--<option value="or" id="">OR</option>--}}
                        {{--<option value="NOT LIKE" id="">NOT</option>--}}
                    {{--</select>--}}

                    <button class="btn btn-default form-control-static btn-primary">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                    </button>
                </div>
                {{--<button class="btn btn-default form-control-static btn-primary">--}}
                    {{--<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search--}}
                {{--</button>--}}


                {{--<input type="checkbox" name="chek[]" value="rice">--}}
                {{--<input type="checkbox" name="chek[]" value="beans">--}}
                {{--<input type="checkbox" name="chek[]" value="garri">--}}
            </form>

        </div>
    </div>
</div>