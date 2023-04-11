<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog=Blog::all();
        return view('blog.index',["blog"=>$blog]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request-> validate([
'title'=>'required',
'content'=>'required',
'pics'=>'required|image|mimes:png,jpeg,jpg|max:1024',
       ]);

       $ossy= time().'.'.$request->pics->extension();
       $request->pics->move(public_path('post'),$ossy);

       $blog=Blog::create([
        "title"=>$request->title,
        "content"=>$request->content,
        "pics"=>$ossy,
       ]);

      return redirect('/')->with('status', 'Created Succesfull');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
