<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
     public function user()
    {
        return $this->belongsTo('App\User');
    }
     public function exam()
    {
        return $this->belongsTo('App\Models\Exam');
    }
}
