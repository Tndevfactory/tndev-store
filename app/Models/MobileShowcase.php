<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileShowcase extends Model
{
    use HasFactory;

      protected $fillable =[


                    'endescription' ,
                    'frdescription',
                    'ardescription',
                    'esdescription',
                    'itdescription',
                    'dedescription',

                    'endescription_sub' ,
                    'frdescription_sub',
                    'ardescription_sub',
                    'esdescription_sub',
                    'itdescription_sub',
                    'dedescription_sub',

                     "original_img",
                    "thumbnail_h300",
                    "thumbnail_h800",



    ];
}
