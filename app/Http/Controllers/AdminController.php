<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

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
}
