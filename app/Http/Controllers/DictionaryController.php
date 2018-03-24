<?php

namespace App\Http\Controllers;

use App\Dictionary;
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
        $results = Dictionary::RandomWord()->get();
        return view('pages.dictionary',compact('results','pageData'));
    }

    public function lookup(Request $request){
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

        $results = Dictionary::LookUp($searchBox)->get();

//        if ($results has no result)
//        {
//            $suggestions = Dictionary::Suggestions($searchBox)->get();
//            return view('pages.dictionary',compact('results','suggestions','pageData'));
//
//        }
        return view('pages.dictionary',compact('results','pageData'));
    }


    //word of the day



    //share



    //translate

}
