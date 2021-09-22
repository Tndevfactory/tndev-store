<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedBlog extends Model
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

        "blog_category_id",

    ];
}
