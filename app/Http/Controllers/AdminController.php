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
}
