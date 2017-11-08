<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    //
    public function view(Request $request)
    {
        $searchBox = $request->input('searchBox');
        $opt1 = $request->input('checked');
        $opt2 = $request->input('checked');
        $opt3 = $request->input('checked');
        $opt4 = $request->input('checked');
        $opt5 = $request->input('checked');





//        dd($search);
//        return view('pages.create', [
//            'searchBox' => $searchBox,
//            'opt1' => $opt1,
//            'opt2' => $opt2,
//            'opt3' => $opt3,
//            'opt4' => $opt4,
//            'opt5' => $opt5,
//        ]);

        $pageData =  [
            'searchBox' => $searchBox,

            'opt1' => $opt1,
            'opt2' => $opt2,
            'opt3' => $opt3,
            'opt4' => $opt4,
            'opt5' => $opt5,
        ];
        return view('pages.create',compact('pageData'));
    }


    public function upload()
    {
        return view('pages.create');
        /*->"thankyou for uploading on the same page"*/
    }




}
