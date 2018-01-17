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
        return view('user.profile.examdesign');
    }
    public function exams()
    {
        return view('user.exam.exams', ['courses' => Course::all()]);
    }
    public function showExams($request)
    {

        $course = Course::where('id', $request)->first();
        $course = $course->t_coursename;
        $exams = Exam::where('c_id', $request)->get();
        $c_id = $request;
        return view('user.exam.examlist', compact('exams', 'course', 'c_id'));
    }
     public function startExam($request)
    {
        $que = Exam::find($request)->questions;
        $tot =  sizeof($que);
        $id = $request;
        return view('user.exam.quiz', compact('que', 'tot', 'id'));
    }
    public function calResult(Request $request)
    {
    	//return $request;
    	$que = Exam::find($request->exam_id)->questions;
    	$r = 0;
    	$w = 0;
    	foreach ($que as $key => $q) {
    		if( $request->$key == $q->answer) $r++;
    		else $w++;
    		
    	}
    	echo "correct ".$r;
    	echo " wrong ".$w;
    	
    }
}
