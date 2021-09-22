<?php

namespace App\Http\Controllers;

use App\Models\FeaturedBlog;
use Illuminate\Http\Request;

class FeaturedBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view(''); front controller
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blogsFeaturedIndexAdmin()
    {
        $featuredBlogs=FeaturedBlog::get();
        return view('backoffice.profiles.admin.manage-blogs.featured-blogs', compact('featuredBlogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.profiles.admin.manage-blogs.featured-blogs-create');
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
     * @param  \App\Models\FeaturedBlog  $featuredBlog
     * @return \Illuminate\Http\Response
     */
    public function show(FeaturedBlog $featuredBlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeaturedBlog  $featuredBlog
     * @return \Illuminate\Http\Response
     */
    public function edit(FeaturedBlog $featuredBlog)
    {
        return view('backoffice.profiles.admin.manage-blogs.featured-blogs-edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeaturedBlog  $featuredBlog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeaturedBlog $featuredBlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeaturedBlog  $featuredBlog
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeaturedBlog $featuredBlog)
    {
        //
    }
}
