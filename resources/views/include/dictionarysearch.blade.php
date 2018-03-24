<div class="col-md-12" align="center" >

    <form action="{{url('lookup')}}" method="post">
        {{csrf_field()}}

        <div class="input-group">
            {{--$search =  $request->input('search');--}}

            <input type="text" maxlength="100" placeholder="D!ctionary Search" value="{{/*searchBox*/ $pageData['searchBox'] }}" class="form-control " name="searchBox"  >
            <input type="submit" class="btn btn-primary" value="Search">

            <a href="{{url('lookup')}}">Random Word Search</a>
        </div>
    </form>
</div>