<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

//use App\Video;

class SearchController extends Controller
{
    //
    public function simpleSearch(Request $request)
    {
        $searchBox = $request->input('searchBox');
        $opt1 = $request->input('opt1');
        $opt2 = $request->input('opt2');
        $opt3 = $request->input('opt3');
        $opt4 = $request->input('opt4');
        $opt5 = $request->input('opt5');

//        dd($opt4);

        $optValue1=0;$optValue2=0;$optValue3=0;$optValue4=0;$optValue5=0;
        if ($opt1 == "on"){
            $opt1 = "checked";
            $optValue1 = 1;
        }
        if ($opt2 == "on"){
            $opt2 = "checked";
            $optValue2 = 1;
        }
        if ($opt3 == "on"){
            $opt3 = "checked";
            $optValue3 = 1;
        }
        if ($opt4 == "on"){
            $opt4 = "checked";
            $optValue4 = 1;
        }
        if ($opt5 == "on"){
            $opt5 = "checked";
            $optValue5 = 1;
        }

        $optValueJoin =$optValue1.$optValue2.$optValue3.$optValue4.$optValue5;
//        this is to make sure that display always check a value after every search
        if ($optValueJoin == 0000){
            $opt1 = "checked";
        }
        $pageData =  [
            'searchBox' => $searchBox,

            'opt1' => $opt1,
            'opt2' => $opt2,
            'opt3' => $opt3,
            'opt4' => $opt4,
            'opt5' => $opt5,
        ];
//        $videos = Video::where('title','like',"%$searchBox%")->orderBy('id','asc')->get();
//        dd($videos);
//        i need 4 methods :
//        one with 1 argument, another with two, another with three, another 4
//        i will create a collection that
//        $videos=Resource::SearchVideo()->where('title','like',"%$searchBox%")->get();


        $resources = Resource::SearchResource($optValueJoin)/*->where('title','like',"%$searchBox%")*/->get();

//        $videos2=[Resource::SearchVideo()->get(),Resource::SearchText()->get(),Resource::SearchAudio()->get(), Resource::SearchOthers()->get()];
//        return view('pages.simpleResult',compact('videos'/*,'types'*/,'pageData'));

        return view('pages.simpleResult',compact('resources','pageData'));

    }

    public function advanceSearch(){
        $pageData =  [
//        from all tab
            'all00' => "",
            'all01' => "",
            'allSearch0' => "",
            'all02' => "",

            'all10' => "",
            'all11' => "",
            'allSearch1' => "",
            'all12' => "",

            'all20' => "",
            'all21' => "",
            'allSearch2' => "",
            'all22' => "",

            'all30' => "",
            'all31' => "",
            'allSearch3' => "",
//            'all32' => "",

//        from books tab
            'books00' => "",
            'books01' => "",
            'booksSearch0' => "",
            'books02' => "",

            'books10' => "",
            'books11' => "",
            'booksSearch1' => "",
//            'books12' => "",

//        from video tab
            'video00' => "",
            'video01' => "",
            'videoSearch0' => "",
            'video02' => "",

            'video10' => "",
            'video11' => "",
            'videoSearch1' => "",
//            'video12' => "",

//        from audio tab
            'audio00' => "",
            'audio01' => "",
            'audioSearch0' => "",
            'audio02' => "",

            'audio10' => "",
            'audio11' => "",
            'audioSearch1' => "",
//            'audio12' => "",

        ];
        return view('pages.advance',compact('pageData'));
    }

    public function advanceResult(Request $request){
        $data=Input::all();
        dd($data);

        $id = $data['id'];

//        page current state
        $pageData =  [];

        $query=[];
        $qValue=[];
//        $qFinal=[];


        if($id == 'all'){
            $pageData =  [
                'id' => $id,
//        from all tab
                'all00' => $data['all00'],
                'all01' => $data['all01'],
                'allSearch0' => $data['allSearch0'],
                'all02' => $data['all02'],

                'all10' => $data['all10'],
                'all11' => $data['all11'],
                'allSearch1' => $data['allSearch1'],
                'all12' => $data['all12'],

                'all20' => $data['all20'],
                'all21' => $data['all21'],
                'allSearch2' => $data['allSearch2'],
                'all22' => $data['all22'],

                'all30' => $data['all30'],
                'all31' => $data['all31'],
                'allSearch3' => $data['allSearch3'],
//                'all32' => $data['all32'],
            ];

        }
        elseif ($id == 'book'){
            $pageData =  [
                'id' => $id,
//        from books tab
                'book00' => $data['book00'],
                'book01' => $data['book01'],
                'bookSearch0' => $data['bookSearch0'],
                'book02' => $data['book02'],

                'book10' => $data['book10'],
                'book11' => $data['book11'],
                'bookSearch1' => $data['bookSearch1'],
//                'book12' => $data['book12'],
            ];
        }
        elseif($id == 'video'){
            $pageData =  [
                'id' => $id,
//        from video tab
                'video00' => $data['video00'],
                'video01' => $data['video01'],
                'videoSearch0' => $data['videoSearch0'],
                'video02' => $data['video02'],

                'video10' => $data['video10'],
                'video11' => $data['video11'],
                'videoSearch1' => $data['videoSearch1'],
//                'video12' => $data['video12'],
            ];
        }
        elseif ($id == 'audio'){
            $pageData =  [
                'id' => $id,
//        from audio tab

                'audio00' => $data['audio00'],
                'audio01' => $data['audio01'],
                'audioSearch0' => $data['audioSearch0'],
                'audio02' => $data['audio02'],

                'audio10' => $data['audio10'],
                'audio11' => $data['audio11'],
                'audioSearch1' => $data['audioSearch1'],
//                'audio12' => $data['audio12'],

            ];
        }

        if ($id != 'all'){

            if (isset($data[$id."Search0"])){

                $query[] = $data[$id."00"]." ".'like'/*$data[$id."01"]*/." ?";
                $qValue[] = $data[$id."Search0"];
            }
//
            if (isset($data[$id."Search1"])){

                $query[] = $data[$id."10"]." ".'like'/*$data[$id."11"]*/." ?";
                $qValue[] = $data[$id."Search1"];

            }
            $query[] = "type = ?";
            $qValue[] = $id;

            $qFinal = implode(" {$data[$id."02"]} ",$query);


        }
//        elseif ($id = 'all')
//        {
//
//            if (isset($data[$id."Search0"])){
//
//                $query[] = $data[$id."00"]." ".$data[$id."01"]." ?";
//                $qValue[] = $data[$id."Search0"];
//            }
////
//            if (isset($data[$id."Search1"])){
//
//                $query[] = $data[$id."10"]." ".$data[$id."11"]." ?";
//                $qValue[] = $data[$id."Search1"];
//
//            }
//            if (isset($data[$id."Search2"])){
//
//                $query[] = $data[$id."20"]." ".$data[$id."21"]." ?";
//                $qValue[] = $data[$id."Search2"];
//
//            }
//            if (isset($data[$id."Search3"])){
//
//                $query[] = $data[$id."30"]." ".$data[$id."31"]." ?";
//                $qValue[] = $data[$id."Search3"];
//
//            }
//
////            $query[] = "type = ?";
////            $qValue[] = $id;
//
//            $qFinal = implode(" {$data[$id."02"]} ",$query);
//
//        }


//        dd($qFinal);

        $searchResult = Resource::whereRaw($qFinal, $qValue)->get();

//dd($searchResult);


        /*

                $i=0;
                for (;$i<20;$i++){

                    echo $searchResult[$i];
                    echo "<br><br><br><br><br>";
                }
        */



//        for ($i=0; $i <=0; $id++)
//        {
//
//        }

//        if (isset($data["$id.Search.$i"])){
//
//            $query[] = $data[$id.$i."0"]." ".$data[$id.$i."1"]." ?";
//            $qValue[] = $data["$id.Search".$i];
//
//        }
//        $query[] = "type = ?";
//        $qValue[] = $id;

//        transferring page state to multi-dimensional array


//        $resources = Resource::AdvanceSearchResource($pageData)->get();

        dd($pageData);

        //this will visit App\Resourcesall
        //then get query for either all, video, music, others
        //the it will attach additional where statement to pin point the file you are looking for




        return view('pages.advance_result',compact('resources','pageData', 'id'));
    }

}
