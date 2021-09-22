<?php

namespace App\Models;

use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Category extends Model
{
    use HasFactory;

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
    ];

    public function products(){
        return $this->hasManyThrough(Product::class, SubCategory::class);
    }

    public function subcategories(){
        return $this->hasMany(SubCategory::class);
    }

}
