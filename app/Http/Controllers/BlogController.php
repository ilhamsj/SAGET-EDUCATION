<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('blog.index')->with([
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'       => 'required',
            'title'         => 'required',
            'descriptions'  => 'required',
            'image'         => 'required|image',
        ]);

        $request->file('image')->store('images', 'public');
        
        Blog::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'descriptions' => $request->descriptions,
            'image' => $request->file('image')->hashName(),
        ]);

        return redirect(route('blog.index'))->with([
            'status' => 'data berhasil ditambahkan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Blog::find($id);
        return view('blog.show')->with(['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Blog::find($id);
        return view('admin.blog.edit')->with(['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Blog::find($id);
        $item->user_id        = $request->user_id;
        $item->title          = $request->title;
        $item->descriptions   = $request->descriptions;
        $item->save();


        return redirect(route('admin.index'))->with([
            'status' => 'data berhasil di update'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect(route('admin.index'))->with([
            'status' => 'data berhasil dihapus'
        ]);
    }
}
