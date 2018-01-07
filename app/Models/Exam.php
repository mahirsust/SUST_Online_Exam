<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    //
     public function user()
    {
        return $this->belongsTo('App\User', 't_id');
    }
}
