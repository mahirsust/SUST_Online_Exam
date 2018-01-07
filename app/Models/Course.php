<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // 
    public function user()
    {
        return $this->belongsTo('App\User', 't_id');
    }
     public function notice()
    {
        return $this->hasMany('App\Models\Notice', 'c_id');
    }
}
