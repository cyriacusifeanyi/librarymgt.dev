<div class="col-md-12" align="center" >

    <form action="{{url('simplesearch')}}" method="get">

        <div class="input-group">
            {{--$search =  $request->input('search');--}}

            <input type="text" maxlength="100" placeholder="L!brary Search" value="{{/*searchBox*/ $pageData['searchBox'] }}" class="form-control " name="searchBox"  >
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-search"></span>
            </div>

        </div>
        <div class="form-group">
            <label class="checkbox-inline">
                <input name="opt1" type="checkbox" onclick="allCheck()" id="checkAll" {{/*opt1*/ $pageData['opt1']}} {{--checked--}}>All
            </label>
            <label class="checkbox-inline">
                <input name="opt2" type="checkbox" onclick="checkControl(event)" id="checkBooks" {{/*opt2*/ $pageData['opt2']}} >Books
            </label>
            <label class="checkbox-inline">
                <input name="opt3" type="checkbox" onclick="checkControl(event)" id="checkVideo" {{/*opt3*/ $pageData['opt3']}} >Video
            </label>
            <label class="checkbox-inline">
                <input name="opt4" type="checkbox" onclick="checkControl(event)" id="checkAudio" {{/*opt4*/ $pageData['opt4']}} >Audio
            </label>
            <label class="checkbox-inline">
                <input name="opt5" type="checkbox" onclick="checkControl(event)" id="checkOthers" {{/*opt5*/ $pageData['opt5']}}> Others
            </label>

        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Search">
            <a target="_blank" href="{{url('advancesearch')}}">Advance Search<span style="color: orange">&nbsp;<i class="glyphicon glyphicon-new-window"></i></span></a>
        </div>
    </form>
</div>