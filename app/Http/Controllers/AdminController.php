<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('admin.admindashboard');
    }

    public function showCourses()
    {
        return view('admin.course.courses');
    }

    public function AddCourse()
    {
        return view('admin.course.addcourse');
    }

    public function showNotice()
    {
        return view('admin.notice.notice');
    }

    public function postNotice()
    {
        
        $notice = new Notice;
        
        $notice->course = $request->cname; 
        $notice->notice_date = $request->n_date;
        $notice->notice = $request->notice_1;
        $notice->file_path = $fileName; 
        
        $notice->save();
        $request->session()->flash('alert-success', 'Notice is added succesfully!');
        $request = $request->semester;
        return redirect()->action('AdminController@index', ['id' => $request]);
    }
}
