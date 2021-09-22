<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Stevebauman\Location\Location;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use App\Repository\ProductRepository;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\UsersOnlineController;

class ProductController extends Controller
{

    public function getIp(){

        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR',
         'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){

            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip,
                     FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE
                     | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }

   // 36.80576265352591, 10.169752183936005  tndevfactory lat
    public function index(Request $request)
    {

        //    //$ip = '103.239.147.187'; //For static IP address get
        //    $ip = '41.224.204.19'; //For static IP address get
        //     //$ip = $this->getIp() ?? request()->ip();
        //     //$ip = request()->ip(); //Dynamic IP address get
        //     //dd($ip);
        //     $data = Location::get($ip);



        // $categories = DB::table('categories')
        // ->join('products', 'categories.id','=', 'products.category_id')
        // ->selectRaw('categories.*, COUNT(products.id) as products_by_category')
        // ->groupBy('categories.id')
        // ->get();

        $categories=Category::with('products')->get();
        // $subcategories=SubCategory::with('subproducts')->get();
        $subcategories=SubCategory::get();

        //dd($categories);
        //$products = Product::with('category')->take(9)->paginate(9);
        return view( 'welcome' , compact("categories","subcategories" ) );
    }

      public function dashboardlistProducts()
    {
        $products = ProductRepository::all('created_at');
        return view('backoffice.profiles.admin.products', compact('products'));
    }

      public function productsIndexAdmin()
    {
        $products = Product::with('sub_category')->get();
        $subcategories = SubCategory::with('category')->get();
      //  dd($subcategories[0]->category->enname);

        return view('backoffice.profiles.admin.manage-products.products', compact('products', 'subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::get();
        $subcategories = SubCategory::with('category')->get();
        //dd($subcategories);

        return view('backoffice.profiles.admin.manage-products.product-create', compact('categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $language)
    {


        //dd($img_path);

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

                    "sub_category_id" => 'required',
        ]);

        $valid['enslug']=Str::slug($valid['enname']);
        $valid['frslug']=Str::slug($valid['frname']);
        $valid['arslug']=Str::slug($valid['arname']);
        $valid['esslug']=Str::slug($valid['esname']);
        $valid['itslug']=Str::slug($valid['itname']);
        $valid['deslug']=Str::slug($valid['dename']);

        $img_path=$this->HandleImage($request);
        $valid['thumbnail_h300']=$img_path['h400'];
        $valid['thumbnail_h800']=$img_path['h800'];
        $valid['original_img']=$img_path['original'];



        //dd($valid);
        Product::create($valid);
       return redirect()->route('admin-manage-products', App::getLocale())->withSuccess('created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request )
        {


       $product = Product::where($request->language.'slug', $request->slug)->first();
       session(['lang_switcher_slug' => $product]);

       //dd($product);

        return view("products.details-product", compact("product"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $language)
    {
        // dd($request->id);
       $product=Product::where('id',$request->id)->first();
        $categories = Category::get();
        $subcategories = SubCategory::get();
       // dd($language);
        return view('backoffice.profiles.admin.manage-products.product-edit', compact('product', 'subcategories', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $language)
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

                    "sub_category_id" => 'required',
        ]);

        $valid['enslug']=Str::slug($valid['enname']);
        $valid['frslug']=Str::slug($valid['frname']);
        $valid['arslug']=Str::slug($valid['arname']);
        $valid['esslug']=Str::slug($valid['esname']);
        $valid['itslug']=Str::slug($valid['itname']);
        $valid['deslug']=Str::slug($valid['dename']);

        $img_path=$this->HandleImage($request);

        $valid['thumbnail_h300']=$img_path['h400'];
        $valid['thumbnail_h800']=$img_path['h800'];
        $valid['original_img']=$img_path['original'];


        $product=Product::where('id',$request->id)->first();

        $res=$product->update($valid);
        //dd($res);
       return redirect()->route('admin-manage-products', App::getLocale())->withSuccess('updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $language)
    {
          // dd($request->id);

        $product=Product::where('id',$request->id)->first();
        $product->delete();
       return redirect()->route('admin-manage-products', App::getLocale())->withSuccess('deleted');
    }


    /**
     * Remove the specified resource from storage but we could not restore it, gone for ever
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function forceDestroy($slug)
    {
        $product= Product::onlyTrashed()->where("slug", $slug)->forceDelete();
        return back()->with('success', 'action done');
    }

    /**
     * restore the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function viewTrashedProducts()
    {

        $productsTrashed = Product::onlyTrashed()->get();
         // Product::withTrashed()->get(); view both trashed and not trashed
       return view('backoffice.profiles.admin.trahed-products', compact('productsTrashed'));
    }
    /**
     * restore the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */

    public function restore(Request $request, $language)
    {

      $product=Product::find($request->id)->first();
       $product->delete();
       return back()->withSuccess('deleted');

       // Flight::onlyTrashed()->where('airline_id', 1)->get();
    }


    public function HandleImage($request){

       if (Str::contains(url()->current(), 'tn-devfactory.com')){
            $destination=env('VIP_ASSET_URL');
       }else{
            $destination=env('LOCAL_ASSET_URL');
       }

       $validated=$request->validate(['image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);

        if($request->hasFile('image')){

            try {

                    $imgFile_400 = Image::make($validated['image']->getRealPath());
                    $imgFile_800 = Image::make($validated['image']->getRealPath());

                    if (!file_exists($destination)) {dd($destination.' not existing'); }

                   $thumbnail_h400 = $imgFile_400->resize(null, 400, function ($constraint) {
                       $constraint->aspectRatio();
                       $constraint->upsize();
                    })->save($destination.'/'.'img-'.str_replace(' ', '', $request->enname).'-h400-'.Str::random(10).'.'.$validated['image']->getClientOriginalExtension());
                    $thumbnail_h400_path=$thumbnail_h400->dirname.'/'.$thumbnail_h400->basename;

                   $thumbnail_h800 = $imgFile_800->resize(null, 800, function ($constraint) {
                       $constraint->aspectRatio();
                       $constraint->upsize();
                    })->save($destination.'/'.'img-'.str_replace(' ', '', $request->enname).'-h800-'.Str::random(10).'.'.$validated['image']->getClientOriginalExtension());
                    $thumbnail_h800_path=$thumbnail_h800->dirname.'/'.$thumbnail_h800->basename;

                    $original_image_path = $validated['image']->storeAs($destination,'img-'.str_replace(' ', '', $request->enname).'-original-'.Str::random(10).'.'.$validated['image']->getClientOriginalExtension());


                    $thumbnail_h800=$thumbnail_h800->dirname.'/'.$thumbnail_h800->basename;
                    $images_path=   [
                        'h400' =>$thumbnail_h400_path,
                        'h800' =>$thumbnail_h800_path ,
                        'original' =>$original_image_path,
                         ];

                    return $images_path;

                } catch (Exception $e) {

                     $images_path=   [
                        'h400' => $e->getMessage(),
                        'h800' =>$e->getMessage(),
                        'original' =>$e->getMessage(),
                        ];

                    return $images_path;

                }

        }

            $info='empty file';
         return $info;

    }

}
