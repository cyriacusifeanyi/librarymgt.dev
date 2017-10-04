<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    //
//    public function scopeSearchVideo($query){
//
//        return $query->where('type','video');
//
//    }
//    public function scopeSearchAudio($query){
//
//        return $query->where('type','audio');
//
//    }
//    public function scopeSearchText($query){
//
//        return $query->where('type','text');
//
//    }
//    public function scopeSearchOthers($query){
//
//        return $query->where('type','others');
//
//    }

    public function scopeSearchResource($query, $optValueJoin)
    {
        /*  the binary numbers stands fort the values of the check box
         *  the 'all' , 'book' , 'video' , 'music' , 'others' respectively [0/1][0/1][0/1][0/1][0/1]
         *
         * */

        if ($optValueJoin >= '10000' || $optValueJoin == '01111' || $optValueJoin == '00000') {
//            return $query->get();
            return $query->where('type','book')->orWhere('type','video')->orWhere('type','music')->orWhere('type','others');
        } else {
            switch ($optValueJoin) {
                case '00001':
//                    WHERE type = video OR music;
                    return $query->where('type','others');
                    break;
                case '00010':
                    return $query->where('type','=','music');
                    break;
                case '00011':
                    return $query->where('type','music')->orWhere('type','others');
                    break;
                case '00100':
                    return $query->where('type','=','video');
                    break;
                case '00101':
                    return $query->where('type','video')->orWhere('type','others');
                    break;
                case '00110':
                    return $query->where('type','video')->orWhere('type','music');
                    break;
                case '00111':
                    return $query->where('type','video')->orWhere('type','music')->orWhere('type','others');
                    break;
                case '01000':
                    return $query->where('type','book');
                    break;
                case '01001':
                    return $query->where('type','book')->orWhere('type','others');
                    break;
                case '01010':
                    return $query->where('type','book')->orWhere('type','music');
                    break;
                case '01011':
                    return $query->where('type','book')->orWhere('type','music')->orWhere('type','others');
                    break;
                case '01100':
                    return $query->where('type','book')->orWhere('type','video');
                    break;
                case '01101':
                    return $query->where('type','book')->orWhere('type','video')->orWhere('type','other');
                    break;
                case '01110':
                    return $query->where('type','book')->orWhere('type','video')->orWhere('type','music');
                    break;
                default://hidden files
                    return $query->where('type','!=','book')->orWhere('type','!=','video')->orWhere('type','!=','music')->orWhere('type','!=','others');

            }
        }

//    write for all the permutation of (1+(4*3*2*1)
//    then add if else that test with the values of the check box
    }
//
//    public function scopeAdvanceSearchResource($query, $pageData)
//    {
//
//        $pageData->id;
//        $condition1 = $pageData->all01;
//        $condition2 = $pageData->all11;
//
//        if ($pageData->id == 'all'){
//            $condition1 = $pageData->all01;
//            $condition2 = $pageData->all11;
//
//            if ($pageData->allSearch1 == null){
//
//                if ($pageData->all01 ==)
//                return $query->where('type','book')->orWhere('type','video')->orWhere('type','music')->orWhere('type','others');
//
//            }elseif ($pageData->allSearch2 == null){
//
//            }elseif ($pageData->allSearch3 == null){
//
//            }
//
//            /*->where('title','like',"%$searchBox%")*/
//            $resources = $this::advanceQuery($condition1,$condition2,$pageData)->get();
////                contains,exactPhrase,startsWith
////                and,or,not
//
//        }
//        elseif ($pageData->id == 'book'){
//            $condition1 = $pageData->book01;
//            $condition2 = $pageData->book11;
//
//            $resources = $this::advanceQuery($condition1,$condition2,$pageData)->where('type','book')->get();
//
//        }
//        elseif ($pageData->id == 'video'){
//            $condition1 = $pageData->all01;
//            $condition2 = $pageData->all11;
//
//            $resources = $this::advanceQuery($condition1,$condition2,$pageData)->where('type','video')->get();
//
//        }
//        elseif ($pageData->id == 'audio'){
//            $condition1 = $pageData->all01;
//            $condition2 = $pageData->all11;
//
//            $resources = $this::advanceQuery($condition1,$condition2,$pageData)->where('type','audio')->get();
//
//        }
////        else{
//////            return 'error just occurred';
////        }
//
//
//    }
//
//    public function advanceQuery($condition1, $condition2,$condition3, $condition4,$condition5, $condition6,$condition7,
//$condition8,$condition9, $condition10,$condition11, $condition12,$condition13, $condition14,
//$condition15, $condition16, $pageData){
//
//if ($condition1 == 'contains')/**/{
////                contains,exactPhrase,startsWith
////                and,or,not
//return $query->where('*', 'like' ,"%.$pageData->allSearch0.%");
//
//}
//elseif($condition1 == 'contains' && $condition2 == 'or'){
//
//            return $query->where('*', 'like' ,"%.$pageData->allSearch0.%")->orWhere('type','video');
//
//        }
//        elseif($condition1 == 'contains' && $condition2 == 'not'){
//
//
//
//}
//        elseif($condition1 == 'exactPhrase' && $condition2 == 'and'){
//
//
//
//}
//        elseif($condition1 == 'exactPhrase' && $condition2 == 'or'){
//
//
//
//}
//        elseif($condition1 == 'exactPhrase' && $condition2 == 'not'){
//
//
//
//}
//        elseif($condition1 == 'startsWith' && $condition2 == 'and'){
//
//
//
//}
//        elseif($condition1 == 'startsWith' && $condition2 == 'or'){
//
//
//
//}
//        elseif($condition1 == 'startsWith' && $condition2 == 'not'){
//
//
//
//}
//
//
//    }
//
//
//



    /*
     *
     *array:15 [▼
  "all00" => "any"
  "all01" => "contains"
  "allSearch0" => "sss"
  "all02" => "and"
  "all10" => "title"
  "all11" => "contains"
  "allSearch1" => null
  "all12" => "and"
  "all20" => "creator"
  "all21" => "contains"
  "allSearch2" => null
  "all22" => "and"
  "all30" => "subject"
  "all31" => "contains"
  "allSearch3" => null
]


array:7 [▼
  "books00" => "title"
  "books01" => "contains"
  "booksSearch0" => "cccc"
  "books02" => "and"
  "books10" => "creator"
  "books11" => "contains"
  "booksSearch1" => null
]



    array:7 [▼
  "video00" => "title"
  "video01" => "contains"
  "videoSearch0" => "aaaa"
  "video02" => "and"
  "video10" => "creator"
  "video11" => "contains"
  "videoSearch1" => null
]



    array:7 [▼
  "audio00" => "title"
  "audio01" => "contains"
  "audioSearch0" => "vvvvv"
  "audio02" => "and"
  "audio10" => "creator"
  "audio11" => "contains"
  "audioSearch1" => null
]


     *
     * */







}




