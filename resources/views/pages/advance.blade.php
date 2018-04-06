@extends('master.master')

@section('page_title')
    <title>Library | Advance Search</title>
@endsection
@section('page_style')
    {{Html::script('assets/js/script.js')}}
@endsection
@section('content')
    <div class="container " align="left" style="margin-top: 55px;min-height: 350px ">

        @include('include.advanceSearch')

        <div class="col-md-12">
            <span class="pull-right">
                <span data-toggle="collapse" data-target="#advanceSearch" class="btn btn-success btn-xs glyphicon glyphicon-arrow-down" title="show query set">show</span>
                <span data-toggle="collapse" data-target="#advanceSearch" class="btn btn-danger btn-xs glyphicon glyphicon-arrow-up" title="hide query set">hide</span>
            </span>

            <hr width=95%>


            <section class= "alert alert-info alert-dismissible" title="tips">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Find more articles</strong>
                <li>L!brary users: <a href="" class="alert-link"><em>Sign in</em></a>< to find more articles</li>
                <li>Study Group: find resources for accessing articles during Group research</li>
                <br>


                <strong>Help with L!brary</strong>
                <li>Am I really searching "Everything Everything" ?</li>
                <li>L!brary Quick Tips</li>
                <li>Ask a Librarian</li>
                <li>Report a problem</li>
                <br>


                <strong>Not available at L!brary</strong>
                <li>Visit Our Trusted-site collection :)</li>
                <br>
            </section>


        </div>






    </div>


@endsection







