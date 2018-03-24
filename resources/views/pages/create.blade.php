{{--try to prevent posting outside this page like searching or leaving page--}}


@extends('master.master')

@section('page_title')
    <title>Library | Create New</title>
@endsection
@section('page_style')
    {{Html::script('assets/js/script.js')}}
@endsection


    {{--{{asset('storage/file.txt')}}--}}
    {{--<a href="{{asset('storage/file.txt')}}">click me !!</a>--}}
    {{--{{Storage::disk('local')->put('newFile.txt','hello:')}}<br />--}}
    {{--{{Storage::disk('local')->append('newFile.txt',	'Cyriacus.Ifeanyi.Valentine;')}}--}}
    {{--<br>--}}
    {{--$exists	=	Storage::disk('s3')->exists('file.jpg');--}}
    {{--if file.jpg exist it returns 1--}}
    {{--{{Storage::disk('local')->exists('newFile.txt')}}--}}
    {{--{{$contents	=	Storage::get('newFile.txt')}}--}}
    {{--{{Storage::url('newFile.txt')}}--}}
    {{--$size	=	Storage::size('file1.jpg');--}}
    {{--<br>--}}
    {{--<b>the size of newFile.txt is =  {{Storage::size('newFile.txt')}}</b><br>--}}
    {{--<b>the last Modified date of newFile.txt is =  {{Storage::lastModified('newFile.txt')}}</b>--}}
    {{--<br><br>--}}



@section('content')
    <div class="container" {{--align="center"--}} style="margin-top: 55px;">
        @include('include.simplesearch')
        <div class="col-md-12 " style="background: #E9EBEE";>
            <div style="font-size: 30px">Share your documents </div>

            <div class="center {{--maincontent--}}">

                <div class="col-md-3 ">
                    <p>
                        <span style="color: rgb(0, 85, 221);" class="glyphicon glyphicon-user bigCircleIcon"></span>
                    </p>
                    Reach more than 20 million learner

                </div>
                <div class="col-md-3 ">
                    <p>
                        <span style="color: rgb(0, 119, 68);" class="glyphicon glyphicon-upload bigCircleIcon"></span>
                    </p>
                    Upload in flash


                </div>
                <div class="col-md-3 ">
                    <p>
                        <span style="color: rgb(255, 170, 51);" class="glyphicon glyphicon-search bigCircleIcon"></span>
                    </p>
                    Automatically Index within Library and other search engines

                </div>
                <div class="col-md-3 ">
                    <p>
                        <span style="color: rgb(221, 0, 0);" class="glyphicon glyphicon-stats bigCircleIcon"></span>
                    </p>
                    Rank on the leaderboard for uploading approved content


                </div>

            </div>
            <div class="col-md-12">

                <form id="uploadForm" {{--onLoad="uploadForm()"--}} method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label for="fileTitle">Title:</label>
                        <input class="form-control" name="fileTitle" id="fileTitle" type="text" autofocus>
                        <span class="glyphicon glyphicon-info-sign"></span> Please enter an exact title for the file
                        <div>
                            <label for="fileType">File type:</label>
                            <select id="fileType" name="fileType" style="margin-top: 5px;">
                                <option value="text">Text</option>
                                <option value="audio">Audio</option>
                                <option value="video">Video</option>
                                <option value="other">Others</option>
                            </select>
                            <div style="display: inline-block">
                                <label for="category">Category:</label>
                                <select id="category" name="fileCategory" style="margin-top: 5px;">
                                    <option value="textFile">TextBook</option>
                                    <option value="audioFile">Past-Question</option>
                                    <option value="videoFile">Sheet music</option>
                                    <option value="otherFile">Others</option>
                                </select>
                            </div>

                        </div>
                    </div>


                    <div class="form-group" style="position: relative;">
                        {{--<div class="form-group-sm ">--}}
                            <label>Upload style:</label>

                            <label class="radio-inline">
                                <input id="localsource" onclick="localSource()" name="fileSource" value="localsource" type="radio" checked>Select from local
                            </label>

                            <label class="radio-inline">
                                <input id="urlsource" onclick="urlSource()" name="fileSource" value="urlsource" type="radio">Enter file's URL
                            </label>





                        <input  style="display: inline-block" name="userFile" type="file" id="localSourceInput"
                               accept="/,.zip,.pdf,.doc,,docx,.txt,.ppt,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-powerpoint"
                               class="form-control"
                               onchange="$('#fileTitle').val($(this).val().split('\\').pop().replace(/\..+$/, '').replace(/_/g, ' '))">


                        <input style="display: none" type="url" id="urlSourceInput" class="form-control"  placeholder="Enter the file's URL" >
                        {{--for url make title compulsory--}}

                    </div>

                    <fieldset class="form-group-sm">
                        <legend>File properties:</legend>
                        <div class="form-group-sm">
                            <label for="author">Author:</label>
                            <input type="text" class="form-control" name="author" id="author" placeholder="Author's names separated by a comma">
                        </div>

                        <div class="form-group-sm">
                            <label for="publisher">Publisher:</label>
                            <input type="text" class="form-control" name="publisher" id="publisher" placeholder="Name of Publisher">
                        </div>

                        <div class="form-group-sm">
                            <label for="description">Description:</label>
                            <textarea class="form-control" name="description" id="description" placeholder="Brief description of the content, which may include its use and target audience"></textarea>
                        </div>

                        <div class="form-group-sm">
                            <label for="level">Educational level:</label>
                            <select name="level" id="level">
                                <option value="1">Elementary School</option>
                                <option value="2">Primary School</option>
                                <option value="3">High School</option>
                                <option value="4">University</option>
                                {{--<option value="5">Advance</option>--}}

                            </select>

                        </div>

                        <div class="form-group-sm ">
                            <label for="support">Disability support:</label>

                            <label for="yes" class="radio-inline">
                                <input onclick="disabilityYes()" name="disability" value="Yes" type="radio">Yes
                            </label>
                            <input id="disYes" style="display: none" class="form-inline" type="text" placeholder="if yes elaborate">

                            <label class="radio-inline">
                                <input onclick="disabilityNo()"  name="disability" value="No" type="radio" checked>no
                            </label>

                        </div>

                        {{--<div class="form-group">--}}
                            {{--<label for="tags">Tags:</label>--}}
                            {{--<input id="tags" name="tags" class="form-control" type="text" placeholder="Chemistry, Law, Hip hip, Modern art,..">--}}
                        {{--</div>--}}

                        By uploading, you agree to our <a href="{{url('termsandconditions/#upload')}}">terms</a>.

                    </fieldset>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>


                    @include('include.errors')
                </form>

            </div>


        </div>
    </div>
@endsection