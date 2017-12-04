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
}
