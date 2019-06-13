<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    //
    public function answers()
    {
        return $this->hasMany('App\answers');
    }
}
