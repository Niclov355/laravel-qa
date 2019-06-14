<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function votes()
    {
        return $this->hasMany('App\Vote');
    }

    public function question()
    {
        return $this->belongsTo('App\Question');
    }
}
