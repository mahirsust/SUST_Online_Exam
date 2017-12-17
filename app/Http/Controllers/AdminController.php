<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use App\Models\Course;
use App\Question_set;
use App\Notice;
use App\Question;
use Validator;
use File;
use Session;
use Redirect;
class AdminController extends Controller
{
    public function showDashboard()
    {
       
        return view('admin.admindashboard');
    }

    public function showCourses()
    {
        return view('admin.course.courses', ['courses' => Course::where('t_id', Auth::user()->id)->get()]);
    }

    public function AddCourse()
    {
        return view('admin.course.addcourse');
    }

    public function saveCourse(Request $request)
    {
        //return $request;
        $course = new Course;
        $course->t_id = $request->t_id;
        $course->t_coursename = $request->coursename;
        $course->t_coursecode = $request->coursecode;
        $course->t_batch = $request->batch;
        $course->save();

        $request->session()->flash('alert-success', 'Course is added succesfully!');
        
        return redirect('/course');

    }

    public function regList()
    {
        return view('admin.course.reglist');
    }

    public function noticeList()
    {
        return view('admin.notice.notice', ['courses' => Course::where('t_id', Auth::user()->id)->get()]);
    }

    public function showNotice()
    {
        return view('admin.notice.addnotice');
    }

    public function postNotice(Request $request)
    {
        return $request;
        /*$notice = new Notice;
        
        $notice->course = $request->cname; 
        $notice->notice_date = $request->n_date;
        $notice->notice = $request->notice_1;
        $notice->file_path = $fileName; 
        
        $notice->save();
        $request->session()->flash('alert-success', 'Notice is added succesfully!');
        $request = $request->semester;
        return redirect()->action('AdminController@index', ['id' => $request]);*/
        $request->session()->flash('alert-success', 'Course is added succesfully!');
        
        return redirect('/course');
    }

    public function addQuestionSet(Request $request)
    {
        
        return view('admin.questionset.addquestionset');

    }

    public function showlistQuestionSet()
    {
        return view('admin.questionset.questionset',
         ['question_sets' => Question_set::where('teacher_id', Auth::user()->id)->get()]);
    }

    public function savequestions(Request $request)
    {

        $name=$request->qsetname;   
        $teacher_id_number=$request->t_id;

        $ques_set = new Question_set;
        $ques_set->teacher_id = $teacher_id_number;
        $ques_set->t_question_set_name = $name;
        $ques_set->save();

        $data1=DB::table('question_sets')->where('teacher_id', '=', $teacher_id_number)
                                         ->where('t_question_set_name', '=', $name)
                                         ->get();
        foreach ($data1 as $data) {
            $id1=$data->id;
        }
        
        $upload= $request->file('csvfile');
        $filePath=$upload->getRealPath();
        //open and read
        $file=fopen($filePath, 'r');
        while (!feof($file) ) {
            $line = fgetcsv($file, 1024);
            //echo sizeof($line);
            $str="";
            $quesname = $line[0];
            $ans = $line[sizeof($line)-1];
            for ($x = 1; $x < sizeof($line)-1; $x++) {
            
            $str .= $line[$x].",";
            
            }

            $ques = new Question;
            $ques->t_question_set_id = $id1;
            $ques->question_name = $quesname;
            $ques->option = $str;
            $ques->answer = $ans;
            $ques->save();
        }
        fclose($file);

        //$request->session()->flash('alert-success', 'Resource is added succesfully!');
        
        return redirect('/questionset');

    }

    public function Questionslist($id)
    {
        $questions=[];
        $questions=DB::table('questions')->where('t_question_set_id', '=', $id)->get();
        foreach ($questions as $question) {
            $id1=$question->t_question_set_id;
        }
        $q_sets=[];
        $q_sets=DB::table('question_sets')->where('id', '=', $id1)->get();
        
        return view('admin.questionset.allquestions', compact('questions', 'q_sets'));
    }
}
