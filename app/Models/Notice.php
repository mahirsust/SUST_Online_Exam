<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    //
     public function user()
    {
        return $this->belongsTo('App\Models\Course', 'c_id');
    }
}
