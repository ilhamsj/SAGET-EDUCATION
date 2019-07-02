<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $courses = Course::all();
        return view('index')->with([
            'courses' => $courses
        ]);
    }
    public function index()
    {
        $courses = Course::all();
        return view('user.home')->with([
            'courses' => $courses
        ]);
    }
}
