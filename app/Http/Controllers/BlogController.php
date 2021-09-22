<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        //dd($blogs);
        return view('blog.blogs', compact('blogs'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blogsIndexAdmin()
    {
        $blogs = Blog::all();
        //dd($blogs);
        return view('backoffice.profiles.admin.manage-blogs.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.profiles.admin.manage-blogs.blog-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        //  dd($request->language);
        //dd($request->slug);

          $blog = Blog::where($request->language.'slug', $request->slug)->first();



       session(['lang_switcher_slug' => $blog]);

       //dd($blog);

      // dd(session('lang_switcher_slug'));
        return view('blog.blog-detail', compact('blog'));
    }

    public function showCategory(Request $request)
    {

        //  dd($request->language);
        //dd($request->slug);

          $blog = Blog::where($request->language.'slug', $request->slug)->first();



       session(['lang_switcher_slug' => $blog]);

       //dd($blog);

      // dd(session('lang_switcher_slug'));
        return view('blog.blog-detail', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('backoffice.profiles.admin.manage-blogs.blog-edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
