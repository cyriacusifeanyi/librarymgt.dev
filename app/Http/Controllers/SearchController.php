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

        $resources = Resource::SearchResource($optValueJoin)->where('title','like',"%$searchBox%")->orwhere('author','like',"%$searchBox%")->orwhere('description','like',"%$searchBox%")->get();
//        dd($resources);
//        $videos2=[Resource::SearchVideo()->get(),Resource::SearchText()->get(),Resource::SearchAudio()->get(), Resource::SearchOthers()->get()];
//        return view('pages.simpleResult',compact('videos'/*,'types'*/,'pageData'));

        return view('pages.simpleResult',compact('resources','pageData'));

    }

    public function advanceSearch(){
/*        $pageData =  [
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

        ];//NOT REALLY NECESSARY
        return view('pages.advance',compact('pageData'));*/
        return view('pages.advance');
    }

    public function advanceResult(/*Request $request*/){
        $data=Input::all();
        $resources = Resource::AdvanceSearchResource($data)->get();
//        dd($resources);

//        return $resources;
        return view('pages.advance',compact($resources));





//        $id = $data['id'];

//        page current state
//        $pageData =  [];

        $query=[];
        $qValue=[];
        $qFinal=[];

//            the below function  'mutation($data)'  mutate the value of search box to prepare it for SQL LIKE statement

        $mutatedValue[] = $this->mutation($data);//NOW working because function cant return array


//dd("gghhghg");

        if($data['id'] == 'all'){

            $pageData =  [
                'id' => $data['id'],
//        from all tab
                'all00' => $data['all00'],
                'all01' => $data['all01'],
                'allSearch0' => $mutatedValue[0][0],
                'all02' => $data['all02'],

                'all10' => $data['all10'],
                'all11' => $data['all11'],
                'allSearch1' => $mutatedValue[0][1],
                'all12' => $data['all12'],

                'all20' => $data['all20'],
                'all21' => $data['all21'],
                'allSearch2' => $mutatedValue[0][2],
                'all22' => $data['all22'],

                'all30' => $data['all30'],
                'all31' => $data['all31'],
                'allSearch3' => $mutatedValue[0][3],
//                'all32' => $data['all32'],
            ];
        }
        elseif ($data['id'] == 'book'){
//            $this->mutation($data);
            $pageData =  [
                'id' => $data['id'],
//        from books tab
                'book00' => $data['book00'],
                'book01' => $data['book01'],
                'bookSearch0' => $mutatedValue[0][0],
                'book02' => $data['book02'],

                'book10' => $data['book10'],
                'book11' => $data['book11'],
                'bookSearch1' => $mutatedValue[0][1],
//                'book12' => $data['book12'],
            ];
        }
        elseif($data['id'] == 'video'){
//            $this->mutation($data);
            $pageData =  [
                'id' => $data['id'],
//        from video tab
                'video00' => $data['video00'],
                'video01' => $data['video01'],
                'videoSearch0' => $mutatedValue[0][0],
                'video02' => $data['video02'],

                'video10' => $data['video10'],
                'video11' => $data['video11'],
                'videoSearch1' => $mutatedValue[0][1],
//                'video12' => $data['video12'],
            ];
        }
        elseif ($data['id'] == 'audio'){
//            $this->mutation($data);
            $pageData =  [
                'id' => $data['id'],
//        from audio tab

                'audio00' => $data['audio00'],
                'audio01' => $data['audio01'],
                'audioSearch0' => $mutatedValue[0][0],
                'audio02' => $data['audio02'],

                'audio10' => $data['audio10'],
                'audio11' => $data['audio11'],
                'audioSearch1' => $mutatedValue[0][1],
//                'audio12' => $data['audio12'],

            ];
        }


        $id = $data['id'];


        if ($id != 'all'){

            if (isset($data[$id."Search"][0])){

                $query[] = $data[$data['id']."00"]." ".$mutatedValue[0][0]." ?";
                $qValue[] = $data[$id.'02'];//OUTPUT THE LOGIC

            }
//
            if (isset($data[$id."Search"][1])){

                $query[] = $data[$data['id']."10"]." ".$mutatedValue[0][0];

            }
            $query[] = "AND type = ?";
            $qValue[] = $data['id'];

//            $qFinal = implode(" {$data[$data['id']."02"]} ",$query);
            $qFinal = implode(" ",$query);

        }

        $searchResult = Resource::whereRaw($qFinal, $qValue)->get();



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
//        dd($pageData);
//        this will visit App\Resourcesall
//        then get query for either all, video, music, others
//        the it will attach additional where statement to pin point the file you are looking for



        return view('pages.advance_result',compact(/*'resources',*/'pageData'/*, 'id'*/,'searchResult'));
    }

    public function mutation(/*array*/ $data)
    {
        $id = $data['id'];

        $mutatedValues = array();

        if ($id == 'all') {

            for ($a = 0; $a < 4/*the total values of query sentence builder is three*/; $a++) {
                if ($data[$id . $a . "1"] == 'contains') {

                    if (isset($data[$id."Search"][$a])){
                        $data[$id."Search"][$a] = "LIKE %".$data[$id."Search"][$a]."%";
                    }

//                    dd($data[$id."Search"][$a]);
                    //this will add the mutated vaalue to the array
                    $mutatedValues[] = $data[$id."Search"][$a];

                }
                elseif ($data[$id . $a . "1"] == 'exactPhrase') {
                    $data[$id."Search"][$a] = "= ".$data[$id."Search"][$a]."%";
//                    remain the same
//                    dd($data[$id."Search"][$a]);
                    //this will add the mutated vaalue to the array
                    $mutatedValues[] = $data[$id."Search"][$a];
                }
                elseif ($data[$id . $a . "1"] == 'startsWith') {
                    if (isset($data[$id."Search"][$a])){
                        $data[$id."Search"][$a] = "LIKE %".$data[$id."Search"][$a];
                    }
//                    dd($data[$id."Search"][$a]);
                    //this will add the mutated vaalue to the array
                    $mutatedValues[] = $data[$id."Search"][$a];
                }
            }
            return $mutatedValues;//this will hold all changed values
        }
        elseif($id == 'video' || $id == 'audio' || $id == 'book')
        {
            for ($a = 0; $a < 2; $a++)/* $a < 2 the total values of query sentence builder is three*/
            {
                if ($data[$id . $a . "1"] == 'contains') {
                    if (isset($data[$id."Search"][$a])){
                        $data[$id."Search"][$a] = "LIKE %".$data[$id."Search"][$a]."%";
                    }
//                    dd($data[$id."Search"][$a]);
                    $mutatedValues[] = $data[$id."Search"][$a];
                }
                elseif ($data[$id . $a . "1"] == 'exactPhrase') {
                    $data[$id."Search"][$a] = "= ".$data[$id."Search"][$a]."%";
//                    remain the same
//                    dd($data[$id."Search"][$a]);
                    $mutatedValues[] = $data[$id."Search"][$a];
                }
                elseif ($data[$id . $a . "1"] == 'startsWith') {
                    if (isset($data[$id."Search"][$a])){
                        $data[$id."Search"][$a] = "LIKE %".$data[$id."Search"][$a];
                    }
//                    dd($data[$id."Search"][$a]);
                    $mutatedValues[] = $data[$id."Search"][$a];
                }

            }
//            dd($mutatedValues);
            return $mutatedValues;//this will hold all changed values

        }


    }

}
