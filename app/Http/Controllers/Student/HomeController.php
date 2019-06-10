<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Student;

class HomeController extends Controller
{

    protected $redirectTo = '/student/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('student.auth:student');
    }

    /**
     * Show the Student dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('student.home');
    }
    public function show(Student $student)
    {
        return view('student.show',compact('student',$student));
    }

}