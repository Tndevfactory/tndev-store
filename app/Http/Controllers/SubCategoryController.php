<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subcategories=SubCategory::with('category')->get();
        //dd($subcategories);
        return view('backoffice.profiles.admin.manage-products.subcategories', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

          $categories = Category::get();
        return view('backoffice.profiles.admin.manage-products.subcategory-create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //dd($request->all());
        $valid = $request->validate([
                    'enname' => ['required', 'string'],
                    'frname' => ['required', 'string'],
                    'arname' => ['required', 'string'],
                    'esname' => ['required', 'string'],
                    'itname' => ['required', 'string'],
                    'dename' => ['required', 'string'],

                    'enslug' => ['nullable', 'string'],
                    'frslug' => ['nullable', 'string'],
                    'arslug' => ['nullable', 'string'],
                    'esslug' => ['nullable', 'string'],
                    'itslug' => ['nullable', 'string'],
                    'deslug' => ['nullable', 'string'],

                    'endescription' => ['nullable', 'string'],
                    'frdescription' => ['nullable', 'string'],
                    'ardescription' => ['nullable', 'string'],
                    'esdescription' => ['nullable', 'string'],
                    'itdescription' => ['nullable', 'string'],
                    'dedescription' => ['nullable', 'string'],

                    "original_img" => ['nullable', 'string'],
                    "thumbnail_h300" => ['nullable', 'string'],
                    "thumbnail_h800" => ['nullable', 'string'],

                    "category_id" => 'required',
        ]);

        $valid['enslug']=Str::slug($valid['enname']);
        $valid['frslug']=Str::slug($valid['frname']);
        $valid['arslug']=Str::slug($valid['arname']);
        $valid['esslug']=Str::slug($valid['esname']);
        $valid['itslug']=Str::slug($valid['itname']);
        $valid['deslug']=Str::slug($valid['dename']);

        //dd($valid);
        SubCategory::create($valid);
         return redirect()->route('admin-manage-subcategories', App::getLocale())->withSuccess('created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $language)
    {
  //dd($request->id);
         //dd($request->id);
      $subcategory=SubCategory::where('id',$request->id)->first();
       //dd($category);
        $categories=Category::get();
        return view('backoffice.profiles.admin.manage-products.subcategory-edit',
         compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $language)
    {
         //dd($request->id);
         //dd($request->all());
        $subcategory=SubCategory::where('id',$request->id)->first();
        $subcategory->update($request->all());
       return redirect()->route('admin-manage-subcategories', App::getLocale())->withSuccess('updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $language)
    {
        $subcategory=SubCategory::where('id',$request->id)->first();
       $subcategory->delete();
       return redirect()->route('admin-manage-subcategories', App::getLocale())->withSuccess('deleted');
    }
}
