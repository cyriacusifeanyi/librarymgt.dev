<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SearchController extends Controller
{
    //
    public function view(Request $request)
    {
        $search = $request->input('search');
        $opt1 = $request->input('checked');
        $opt2 = $request->input('checked');
        $opt3 = $request->input('checked');
        $opt4 = $request->input('checked');
        $opt5 = $request->input('checked');





//        dd($search);
        return view('pages.simpleResult', [
            'search' => $search,
            'opt1' => $opt1,
            'opt2' => $opt2,
            'opt3' => $opt3,
            'opt4' => $opt4,
            'opt5' => $opt5,
        ]);
    }

}
