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
use App\Models\Result;
use App\User;
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
        $data = [];
        $uid=Auth::user()->id;
        $data = DB::table('users')->where('id', '=', $uid)
                                     ->get();
        foreach ($data as $dat) {
            $id1=$dat->pic_path;
        }

        return view('user.profile.result');
        //return view('user.profile.showprofile', compact('id1'));
    }

    public function Change_Pic(Request $request)
    {
    	//return $request;
        $fileLink=$request->file('imgfile1');
        if(Auth::user()->pic_path != "-1"){

            $path=Auth::user()->pic_path;
            $destinationPath = (base_path('/public/app-assets/images/user_profile/'));
            $destinationPath = $destinationPath.$path;
            //return $destinationPath;
            File::delete($destinationPath);
        }

        if($fileLink = $request->hasFile('imgfile1')){
            $file = $request->file('imgfile1');
            $fileName = $file->getClientOriginalName();
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = Auth::user()->email.'.'.$fileExtension;
            $destinationPath = (base_path('/public/app-assets/images/user_profile'));
            $file->move($destinationPath, $fileName);
        }
               
        $af=DB::table('users')
            ->where('id', $request->auth_id)
            ->update(['pic_path' => $fileName]);

        return redirect('/userprofile');
    }

    public function Edit_Name(Request $request)
    {
        $uid=Auth::user()->id;      
        $af=DB::table('users')
            ->where('id', $uid)
            ->update(['name' => $request->editname]);

        return redirect('/userprofile');
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
    	$res = new Result();
    	$res->user_id = Auth::user()->id;
    	$res->exam_id = $request->exam_id;
    	$res->marks = $r;
    	$res->total = $request->total;
    	$res->save();

    	return redirect('/uresult');
    	
    }
    public function showResults()
    {
    	$res = Result::where('user_id', Auth::user()->id)->with('exam.course:id,t_coursename') ->get();

        return view('user.results', compact('res'));
    }
}