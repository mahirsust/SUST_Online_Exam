<?php

namespace App\Models;;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
     public function question_set()
    {
        return $this->belongsTo('App\Models\Question_set',  '	t_question_set_id');
    }
}
