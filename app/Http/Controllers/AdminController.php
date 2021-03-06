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

    public function showProfile()
    {
        $data = [];
        $uid=Auth::user()->id;
        $data = DB::table('users')->where('id', '=', $uid)
                                     ->get();
        foreach ($data as $dat) {
            $id1=$dat->pic_path;
        }

        return view('admin.profile.showprofile', compact('id1'));
    }

    public function Change_Pic(Request $request)
    {
        //return $request;
        $fileLink=$request->file('imgfile');
        if(Auth::user()->pic_path != "-1"){

            $path=Auth::user()->pic_path;
            $destinationPath = (base_path('/public/app-assets/images/user_profile/'));
            $destinationPath = $destinationPath.$path;
            //return $destinationPath;
            File::delete($destinationPath);
        }

        if($fileLink = $request->hasFile('imgfile')){
            $file = $request->file('imgfile');
            $fileName = $file->getClientOriginalName();
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = Auth::user()->email.'.'.$fileExtension;
            $destinationPath = (base_path('/public/app-assets/images/user_profile'));
            $file->move($destinationPath, $fileName);
        }
               
        $af=DB::table('users')
            ->where('id', $request->auth_id)
            ->update(['pic_path' => $fileName]);

        return redirect('/profile');
    }

    public function Edit_Name(Request $request)
    {
        $uid=Auth::user()->id;      
        $af=DB::table('users')
            ->where('id', $uid)
            ->update(['name' => $request->editname]);

        return redirect('/profile');
    }

    public function showCourses()
    {
        
        return view('admin.course.courses', ['courses' => Course::where('t_id', Auth::user()->id)->get()]);
    }
    public function examList()
    {
        return view('admin.exam.exams', ['courses' => Course::where('t_id', Auth::user()->id)->get()]);
    }
    public function showExams($request)
    {
        $course = Course::where('id', $request)->first();
        $course = $course->t_coursename;
        $exams = Exam::where('c_id', $request)->get();
        $c_id = $request;
        return view('admin.exam.examlist', compact('exams', 'course', 'c_id'));
    }
     public function editExam($request)
    {
        $exam = Exam::where('id', $request)->first();
         $set = Question_set::where('teacher_id', Auth::user()->id)->get();
        return view('admin.exam.editexam', compact('exam', 'set'));
    }
    public function AddCourse()
    {
        return view('admin.course.addcourse');
    }
    public function EditCourse($request)
    {
        $course = Course::find($request);
        return view('admin.course.editcourse', compact('course'));
    }
     public function CreateExam($request)
    {
        $set = Question_set::where('teacher_id', Auth::user()->id)->get();
        $c_id = $request;
        return view('admin.exam.addexam', compact('set', 'c_id'));
    }
    public function saveCourse(Request $request)
    {
        //return $request;
        $course = new Course();
        $course->t_id = $request->t_id;
        $course->t_coursename = $request->coursename;
        $course->t_coursecode = $request->coursecode;
        $course->t_batch = $request->batch;
        $course->save();
        $request->session()->flash('alert-success', 'Course is added succesfully!');
        
        return redirect('/course');
    }
     public function saveCourse1(Request $request)
    {
        //return $request;
        $course = Course::find($request->id);
        $course->t_coursename = $request->coursename;
        $course->t_coursecode = $request->coursecode;
        $course->t_batch = $request->batch;
        $course->save();

        $request->session()->flash('alert-success', 'Course is edited succesfully!');
        
        return redirect('/examlist');

    }

    public function saveExam(Request $request)
    {
        //return $request;
        $e = new Exam();
        $e->c_id = $request->c_id;
        $e->q_id = $request->q_id;
        $e->name = $request->name;
        $e->duration = $request->duration;
        $e->start_time = $request->date . ' ' . $request->time;
        $e->save();
        $request->session()->flash('alert-success', 'Exam is created succesfully!');
        
        return redirect('/exam/'.$request->c_id);
    }

     public function saveExam1(Request $request)
    {
        //return $request;
        $e = Exam::find($request->id);
        $e->q_id = $request->q_id;
        $e->name = $request->name;
        $e->duration = $request->duration;
        $e->start_time = $request->date . ' ' . $request->time;
        $e->save();
        $request->session()->flash('alert-success', 'Exam is edited succesfully!');
        
        return redirect('/exam/'.$request->c_id);

    }


    public function regList()
    {
        return view('admin.course.reglist');
    }
    public function noticeList()
    {
        return view('admin.notice.notice', ['courses' => Course::where('t_id', Auth::user()->id)->get()]);
    }
    
    public function showNotice($request)
    {
        
        try {
        // Validate, then create if valid
        $coursenotice=[];
        $coursenotice=DB::table('notices')->where('c_id', '=', $request)
                                          ->orderBy('id','desc')
                                          ->paginate(2);
        $cid_number=$request;
        } catch(\Exception $e){
            //back to form with errors
            
            return Redirect::to('/noticelist')
                ->withErrors( $e->getErrors() )
                ->withInput();
        }
        
        return view('admin.notice.shownotice', compact('coursenotice', 'cid_number'));
    }
    public function AddNotice($request)
    {
         
        return view('admin.notice.addnotice', compact('request'));
    }
    public function postNotice(Request $request)
    {
        // Start transaction!
        DB::beginTransaction();

        try {
            // Validate, then create if valid
            $notice = new Notice();
        
            $notice->c_id = $request->course_id;
            $notice->t_notice_title = $request->ntitle;
            $notice->t_notice = $request->ndescription;
            $notice->save();

        } catch(\Exception $e){
            // Rollback and then redirect
            // back to form with errors
            DB::rollback();
            return Redirect::to('/CreateNotice/'.$request->course_id)
                ->withErrors( $e->getErrors() )
                ->withInput();
        }
        
        // If we reach here, then
        // data is valid and working.
        // Commit the queries!
        DB::commit();
        $request = $request->course_id;

        return redirect('/notice/'.$request);
    }
    public function updateNotice(Request $request)
    {
        //return $request;
        
        $edit_notice_data = Notice::find($request->notic_id);
        $edit_notice_data->t_notice_title = $request->edit_title;
        $edit_notice_data->t_notice = $request->edit_description;
        $edit_notice_data->save();
        $request = $request->cours_id;
        return redirect('/notice/'.$request);
    }
    public function removeNotice(Request $request)
    {
        //return $request;
        $delete_data = Notice::find($request->notic_id);
        $delete_data->delete();
        
        $request = $request->cours_id;
        return redirect('/notice/'.$request);
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
        $ques_set = new Question_set();
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
            
            if($x==(sizeof($line)-2)) $str .= $line[$x];
            else $str .= $line[$x].",";
            
            }
            $ques = new Question();
            $ques->t_question_set_id = $id1;
            $ques->question_name = $quesname;
            $ques->option = $str;
            $ques->answer = $ans;
            $ques->save();
        }
        fclose($file);
        //$request->session()->flash('alert-success', 'Resource is added succesfully!');
        
        return redirect('/question_set');
    }
    public function Questionslist($request)
    {
        $questions=[];
        $questions=DB::table('questions')->where('t_question_set_id', '=', $request)->get();
        foreach ($questions as $question) {
            $id1=$question->t_question_set_id;
        }
        $q_sets=[];
        $q_sets=DB::table('question_sets')->where('id', '=', $id1)->get();
        
        return view('admin.questionset.allquestions', compact('questions', 'q_sets'));
    }

     public function rcourse($request)
    {
        $course = Course::where('id', $request)->first();
        $course = $course->t_coursename;
        $exams = Exam::where('c_id', $request)->get();
        $c_id = $request;
        return view('admin.result.rcourse', compact('exams', 'course', 'c_id'));
    }
    public function rlist()
    {
        return view('admin.result.rlist', ['courses' => Course::where('t_id', Auth::user()->id)->get()]);  
    }
     public function showResults($request)
    {
        $res = Result::where('exam_id', $request)->with('user:id,name,regno', 'exam:id,name') ->get();
        
        return view('admin.result.results', compact('res'));
    }
}