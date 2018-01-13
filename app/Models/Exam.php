<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    //
     public function course()
    {
        return $this->belongsTo('App\Models\Course', 'c_id');
    }

   	public function question_set()
    {
        return $this->belongsTo('App\Models\Question_set', 'q_id');
    }
}
