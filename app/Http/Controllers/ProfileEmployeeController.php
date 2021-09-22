<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProfileEmployeeController extends Controller
{

    
    public function listProducts(Product $product)
    {

        // try {

        //      $this->authorize('viewAny', $product);

        // } catch (\Exception $e) {

        //    return $e->getMessage();

        // }
       

      if(auth()->user()->can('viewAny', $product)) {
            
            // or with middleware('can:viewAny.product')
            // or with $this->authorize('viewAny', $product)

            $products = Product::get();

        }else{

            $products=[];
        }
       
        //$products = Product::get();
       return view('backoffice.profiles.employee.products', compact('products'));
    }
}
