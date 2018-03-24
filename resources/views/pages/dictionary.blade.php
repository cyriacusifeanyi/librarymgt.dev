@extends('master.master')

@section('page_title')
    <title>Library | Dictionary</title>
@endsection
@section('page_style')
    {{Html::script('assets/js/script.js')}}
@endsection

{{--i want dictionary to utilize one view with tabs like (Result, history, word of the day, settings, etc)--}}
@section('content')
    <div class="container" {{--align="center"--}} style="margin-top: 55px;">
        @include('include.dictionarysearch')

        <div class="container" {{--align="center"--}} style="margin-top: 55px;">

            @forelse($results as $result)
                {{$result->id}}<br>
                {{$result->word}} <br>
                {{$result->wordtype}}<br>
                {{$result->definition}}<br>
                <hr>





            @empty
                <div class="alert alert-info">
                    <p><h4>oops :( word not found</h4></p>
                    <p>Your Search - <em style="font-weight: bold; font-style: normal;">{{$pageData['searchBox']}}</em>  - did not match any documents.</p>

                    <p>Suggestions:</p>

                    <ul>
                        <li>Make sure the word is spelled correctly.</li>
                        <li>Try different keywords.</li>

                    </ul>
                </div>

                {{--@forelse($suggestions as $suggestion)--}}
                    {{--{{$suggestion->word}}<br>--}}
                {{--@empty--}}
                    {{--try :--}}
                    {{--<ul>--}}
                        {{--<li>apple</li>--}}
                        {{--<li>jug</li>--}}
                        {{--<li>happy</li>--}}
                        {{--<li>duck</li>--}}
                        {{--<li>not</li>--}}
                        {{--<li>OK</li>--}}
                    {{--</ul>--}}


                {{--@endforelse--}}
            @endforelse





        </div>




















    </div>
@endsection