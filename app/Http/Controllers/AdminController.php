<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Auth\User;
use App\Course;
use App\Blog;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $courses = Course::all();
        $blogs = Blog::all();
        $users = User::all();

        return view('admin.admin')->with([
            'courses' => $courses,
            'blogs' => $blogs,
            'users' => $users,
        ]);
    }

    public function create()
    {
        return view('admin.course.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'       => 'required',
            'title'         => 'required',
            'descriptions'  => 'required',
            'xp'            => 'required',
            'capacity'      => 'required',
            'image'         => 'required|image',
        ]);

        $request->file('image')->store('images', 'public');
        
        Course::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'descriptions' => $request->descriptions,
            'xp' => $request->xp,
            'capacity' => $request->capacity,
            'image' => $request->file('image')->hashName(),
        ]);

        return redirect(route('admin.index'))->with([
            'status' => 'data berhasil ditambahkan'
        ]);
    }

    public function edit($id)
    {
        $item = Course::find($id);
        return view('admin.course.edit')->with(['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->user_id        = $request->user_id;
        $course->title          = $request->title;
        $course->descriptions   = $request->descriptions;
        $course->xp             = $request->xp;
        $course->capacity       = $request->capacity;
        $course->save();

        // $course = Course::firstOrNew(
        //     ['user_id' => $request->user_id],
        //     ['title' => $request->user_title],
        //     ['descriptions' => $request->descriptions],
        //     ['xp' => $request->xp],
        //     ['capacity' => $request->capacity]
        // );

        return redirect(route('admin.index'))->with([
            'status' => 'data berhasil ditambahkan'
        ]);
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return redirect(route('admin.index'))->with([
            'status' => 'data berhasil dihapus'
        ]);
    }
}
