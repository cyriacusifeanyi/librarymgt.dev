@extends('master.master')

@section('page_title')
    <title>Library | Home</title>
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
                    <form action="{{url('simplesearch')}}">
                        <div class="input-group">
                            <input type="text" maxlength="100" placeholder="L!brary Search" class="form-control " name="search" >
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-search"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input name="opt1" type="checkbox" checked>All
                            </label>
                            <label class="checkbox-inline">
                                <input name="opt2" type="checkbox">Books
                            </label>
                            <label class="checkbox-inline">
                                <input name="opt3" type="checkbox">Video
                            </label>
                            <label class="checkbox-inline">
                                <input name="opt4" type="checkbox">Music
                            </label>
                            <label class="checkbox-inline">
                                <input name="opt5" type="checkbox">Others
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Search">
                            <input type="submit" class="btn" value="I'm Feeling Lucky">
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
                    <div class="col-md-8">
                        <ul class="list-group">
                            <li class="list-group-item">E-Resource</li>
                            <li class="list-group-item">Staff Directory</li>
                            <li class="list-group-item">Ask Librarian</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item">E-Resource</li>
                            <li class="list-group-item">Staff Directory</li>
                            <li class="list-group-item">Ask Librarian</li>
                        </ul>
                    </div>
                </div>
            </div>
            {{--end of phase 3--}}

        </div>



    </div>


@endsection