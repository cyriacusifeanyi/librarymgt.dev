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
                    return $query->where('type','book')->orWhere('9=072+9','others');
                    break;
                case '01010':
                    return $query->where('type','book')->orWhere ('type','music');
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
    public function scopeAdvanceSearchResource($query, $data)
    {
//        dd($data['id']);
        switch ($data['id'])
        {
            case 'all':
                $query->where('type','all');
                break;
            case 'books':
                $query->where('type','books');
                break;
            case 'video':
                $query->where('type','video');
                break;
            case 'audio':
                $query->where('type','audio');
                break;
            default:
                $query->where('type','all');
                break;
        }

//        $query->and()
        $counter = 0;
        foreach ($data['prepositions']as $preposition)
        {
            switch ($preposition)
            {
                case 'contains':
                    if ((isset($data['conjunctions'][$counter]) && $data['conjunctions'][$counter] == 'or') ||count($data['prepositions']))
                    {
                        $query->orwhere($data['properties'][$counter],'like','%'.$data['searchTexts'][$counter].'%');break;
                    }
                    $query->where($data['properties'][$counter],'like','%'.$data['searchTexts'][$counter].'%');break;

                case 'exactPhrase':
                    if ((isset($data['conjunctions'][$counter]) && $data['conjunctions'][$counter] == 'or') ||count($data['prepositions']))
                    {
                        $query->orwhere($data['properties'][$counter],$data['searchTexts'][$counter]);break;
                    }
                    $query->where($data['properties'][$counter],$data['searchTexts'][$counter]);break;
                case 'startsWith':
                    if ((isset($data['conjunctions'][$counter]) && $data['conjunctions'][$counter] == 'or') ||count($data['prepositions']))
                    {
                        $query->orwhere($data['properties'][$counter],'like',$data['searchTexts'][$counter].'%');break;
                    }
                    $query->where($data['properties'][$counter],'like',$data['searchTexts'][$counter].'%');break;
                case 'notLike':
                    if ((isset($data['conjunctions'][$counter]) && $data['conjunctions'][$counter] == 'or') ||count($data['prepositions']))
                    {
                        $query->orwhere($data['properties'][$counter],'not like','%'.$data['searchTexts'][$counter].'%');break;
                    }
                    $query->where($data['properties'][$counter],'not like','%'.$data['searchTexts'][$counter].'%');break;
                default://i repeated the first case statement
                    if ((isset($data['conjunctions'][$counter]) && $data['conjunctions'][$counter] == 'or') ||count($data['prepositions']))
                    {
                        $query->orwhere($data['properties'][$counter],'like','%'.$data['searchTexts'][$counter].'%');break;
                    }
                    $query->where($data['properties'][$counter],'like','%'.$data['searchTexts'][$counter].'%');break;
            }
            $counter++;

        }            /*dd($query);*/
        return $query;
    }
}



