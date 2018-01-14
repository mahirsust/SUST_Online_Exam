<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use App\Models\Course;
use App\Models\Question_set;
use App\Models\Notice;
use App\Models\Question;
use App\Models\Exam;
use Validator;
use File;
use Session;
use Redirect;

class StudentController extends Controller
{
    public function showDashboard()
    {
       
        return view('user.userdashboard');
    }

    public function showProfile()
    {
       
        return view('user.profile.showprofile');
    }
}
