<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
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


        "category_id",
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
