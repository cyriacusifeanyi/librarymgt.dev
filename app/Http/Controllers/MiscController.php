<?php

namespace Library\Http\Controllers;

use Illuminate\Http\Request;
use Library\Resource;
class MiscController extends Controller
{
    public function archive(){
        return view('pages.archive');

    }
    public function itemPreview(Resource $resource){

        // return $resource;
        return view('pages.preview',compact('resource'));

    }
}
