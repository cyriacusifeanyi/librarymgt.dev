<?php

namespace Library\Http\Controllers;

use Illuminate\Http\Request;

class MiscController extends Controller
{
    //
    public function itemPreview(){
        return view('pages.preview');

    }

    public function archive(){
        return view('pages.archive');

    }

}
