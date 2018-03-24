<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    //
    public function scopeRandomWord($query){

        $randId = (rand(1,176023));

        return $query->where('id','=',"$randId");
    }

    public function scopeLookUp($query, $searchBox)
    {
        return $query->where('word','=',"$searchBox");
    }

    public function scopeSuggestions($query, $searchBox)
    {
//        turn string to character
//        create an array
//        assuming character are 7 eg 'capopre' in number
//        get suggestion of all seven (like '# # # # # # # %') with id in ASC Order this will ensure closest suggestion |  query first three |  store into array
//        get suggestion of first six (like '# # # # # # # %') with id in ASC Order|  query first three |  store into array
//        get suggestion of first five (like '# # # # # # # %') with id in ASC Order|  query first three |  store into array
//        get suggestion of first four (like '# # # # # # # %') with id in ASC Order|  query first three |  store into array
//        get suggestion of first three (like '# # # # # # # %') with id in ASC Order|  query first three |  store into array

//        we will end suggestion at two letter words //$wordlen >=3;

//        we would a query like this#
        $wordlen = strlen($searchBox);

        for ($i = true;$wordlen >=3;$wordlen--)
        {
            $subword= substr($searchBox, 0, $wordlen);
            if ($i == true)
            {
                $i = false;
                $query =  $query->where(`word`, 'LIKE', "$subword%")->order('id','ASC')->limit(3);
                break;
            }
            $query =  $query->orwhere(`word`, 'LIKE', "$subword%")->order('id','ASC')->limit(3);
        }

//        later suggestion will be used to predict as you type

            return $query;

    }
}
