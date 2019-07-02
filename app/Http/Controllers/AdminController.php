<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use Auth\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.admin');
    }

    public function store(Request $request)
    {
        Course::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'descriptions' => $request->descriptions,
            'xp' => $request->xp,
            'capacity' => $request->capacity,
        ]);

        return redirect(route('course.index'))->with([
            'status' => 'data berhasil ditambahkan'
        ]);
    }
}
