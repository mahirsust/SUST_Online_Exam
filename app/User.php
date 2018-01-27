<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\VerifyEmail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'batch', 'regno', 'user_category', 'pic_path', 'token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function question_set()
    {
        return $this->hasMany('App\Models\Question_set', 'teacher_id');
    }
   
  
    public function course()
    {
        return $this->hasMany('App\Models\Course', 't_id');
    }

    public function verified()
    {
        return $this->token === null;
    }

    public function sendVerificationEmail()
    {
        $this->notify(new VerifyEmail($user));
    }
}
