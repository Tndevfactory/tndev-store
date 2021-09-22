<?php

namespace App\Models;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model implements Buyable

{
    //, SoftDeletes
    use HasFactory , SoftDeletes;

     public function getBuyableIdentifier($options = null) {
        return $this->id;
    }

    public function getBuyableDescription($options = null) {
        return $this->name;
    }

    public function getBuyablePrice($options = null) {
        return $this->price;
    }


    protected $fillable =[

                    'enname',
                    'frname',
                    'arname' ,
                    'esname',
                    'itname',
                    'dename',

                    'enslug',
                    'frslug',
                    'arslug',
                    'esslug',
                    'itslug',
                    'deslug',

                    'endescription' ,
                    'frdescription',
                    'ardescription',
                    'esdescription',
                    'itdescription',
                    'dedescription',

                    "original_img",
                    "thumbnail_h300",
                    "thumbnail_h800",

                    "sub_category_id",

    ];


    public function sub_category(){
        return $this->belongsTo(SubCategory::class);
    }

     public function category(){
        return $this->belongsToThrough(Category::class, SubCategory::class);
    }

}
