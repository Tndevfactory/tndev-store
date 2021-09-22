<?php

namespace App\Repository;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class ProductRepository
{
    CONST CACHE_KEY='PRODUCT';

    public static function getKey($key)
    {
        $key = strtoupper($key);
        return self::CACHE_KEY.".$key";
    }
    
    public static function all($orderby)
    {
        $key="all";
        return cache()->remember(self::getKey($key), Carbon::now()->addMinutes(5), function() use($orderby){
            return Product::orderBy($orderby)->get();
        });
    }


    public static function delete($slug)
    {
         $key="get.{$slug}";
         cache()->forget(self::getKey('all'));
         return  Product::where("slug", $slug)->delete();
        // return cache()->remember(self::getKey($key), Carbon::now()->addMinutes(5), function() use($slug, $key){
        // });
    }

    public static function restore($slug)
    {
         $key="get.{$slug}";
         cache()->forget(self::getKey('all'));
          return Product::onlyTrashed()->where("slug", $slug)->restore();
        // return  Product::where("slug", $slug)->delete();
        // return cache()->remember(self::getKey($key), Carbon::now()->addMinutes(5), function() use($slug, $key){
        // });
    }

   
}