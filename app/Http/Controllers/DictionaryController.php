<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DictionaryController extends Controller
{
    //search

    //random word
    public function randomWord(Request $request){
        $searchBox = $request->input('searchBox');
        $opt1 = $request->input('opt1');
        $opt2 = $request->input('opt2');
        $opt3 = $request->input('opt3');
        $opt4 = $request->input('opt4');
        $opt5 = $request->input('opt5');

        $pageData =  [
            'searchBox' => $searchBox,

            'opt1' => $opt1,
            'opt2' => $opt2,
            'opt3' => $opt3,
            'opt4' => $opt4,
            'opt5' => $opt5,
        ];
        return view('pages.dictionary',compact('pageData'));
    }

    public function lookup(){





        return view('pages.dictionary',compact('pageData'));
    }


    //word of the day



    //share



    //translate

}
