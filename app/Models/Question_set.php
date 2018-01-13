<?php

namespace App\Models;;

use Illuminate\Database\Eloquent\Model;

class Question_set extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User', 'teacher_id');
    }
    public function questions()
    {
        return $this->hasMany('App\Models\Question', '	t_question_set_id');
    }
     public function exam()
    {
        return $this->hasOne('App\Models\Exam', 'q_id');
    }
}
