<?php

namespace App\Http\Controllers;


use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function productStats(Request $request){
       
       
       $productsQty = DB::table('products')
                ->join('inventories', 'inventories.id', '=', 'products.inventory_id')
                ->select('products.name', DB::raw('SUM(inventories.quantity) as quantity'))
                ->groupBy('products.id')
                ->get();

          // $keys=$products->keys();
           $product   = $productsQty->values()->pluck('name');
           $qty = $productsQty->values()->pluck('quantity');

         $productsPrice = DB::table('products')->pluck('price','name');

           $productName   = $productsPrice->keys();
           $price = $productsPrice->values();
      //dd($price);
       
        return view('backoffice.profiles.admin.stats-products', compact( 'product', 'qty', 'productName',  'price' ));

    }

    public function usersStats(){
       // dd('product stats');
       $chart='ttt';
        return view('backoffice.profiles.admin.stats-users', compact('chart'));
    }
}
