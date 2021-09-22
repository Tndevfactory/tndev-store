<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProfileClientController extends Controller
{
     public function listProducts()
    {
        $products = Product::get();
       return view('profile.employee', compact('products'));
    }
}
