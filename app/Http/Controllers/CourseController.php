<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function index(){
        $courses = course::get();
        return view('courses.index',['courses' =>$courses]);
    }
}
