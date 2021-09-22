<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

       protected $fillable =[
                    'enname',
                    'frname',
                    'arname' ,
                    'esname',
                    'itname',
                    'dename',


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

     public function blogs()
    {
        return $this->belongsToMany(Blog::class);
    }
}
