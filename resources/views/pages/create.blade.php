@extends('master.master')

@section('page_title')
    <title>Library | Create New</title>
@endsection
@section('page_style')
    {{Html::script('assets/js/script.js')}}
@endsection

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

                <form action="{{ route('upload') }}">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label for="body">Title:</label>
                        <input class="form-control" id="body" type="text">
                        <span class="glyphicon glyphicon-info-sign"></span> Please enter an exact title for the file
                        <div>
                            <label for="body">File type:</label><select style="margin-top: 5px;">
                                <option value="textFile">Text</option>
                                <option value="audioFile">Audio</option>
                                <option value="videoFile">Video</option>
                                <option value="otherFile">Others</option>
                            </select>
                            <div style="display: inline-block">
                                <label for="body">Category:</label><select style="margin-top: 5px;">
                                    <option value="textFile">TextBook</option>
                                    <option value="audioFile">Past-Question</option>
                                    <option value="videoFile">Sheet music</option>
                                    <option value="otherFile">Others</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="form-group" style="position: relative;">

                        {{--<input class="form-control" type="file" title="" accept=".pdf,.zip,.mp3,.mp4,.doc,.epub,.mobi,.mkv" name="user_file" >--}}
                        <input type="file"
                               accept="/,.zip,.pdf,.doc,,docx,.txt,.ppt,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-powerpoint"
                               class="form-control" name="userfile"
                               onchange="$('#filetitle').val($(this).val().split('\\').pop().replace(/\..+$/, '').replace(/_/g, ' '))">
                    </div>

                    <fieldset class="form-group-sm">
                        <legend>File properties:</legend>
                        <div class="form-group-sm">
                            <label for="author">Author:</label>
                            <input type="text" class="form-control" id="author" placeholder="Author's names seprated by a comma">
                        </div>

                        <div class="form-group-sm">
                            <label for="publisher">Publisher:</label>
                            <input type="text" class="form-control" id="publisher"placeholder="Names of Publishers (in a comma separated list)">
                        </div>

                        <div class="form-group-sm">
                            <label for="description">Description:</label>
                            <textarea class="form-control" id="description" placeholder="Brief description of the content, which may include its use and target audience"></textarea>
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
                                <input onclick="disabilityYes()" name="disability" value="disYes" type="radio">Yes
                            </label>
                            <input id="disYes" style="display: none" class="form-inline" type="text" placeholder="if yes elaborate">

                            <label class="radio-inline">
                                <input onclick="disabilityNo()" name="disability" value="disNo" type="radio">no
                            </label>


                        </div>





                        <div class="form-group">
                            <label for="body">Tags:</label>
                            <input class="form-control" id="body" type="text" placeholder="Chemistry, Law, Hip hip, Modern art,..">
                        </div>

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