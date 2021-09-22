<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class LabController extends Controller
{
    public function uploadImage(Request $request){

        //dd($request->all());
        //dd($request->hasFile('image'));

        $validated= $request->validate([
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        if($request->hasFile('image')){

                $category_slug='web-app';
                $subcategory_slug='laravel';

                // only intervene needs the full path
                $destination_thumbnail_h300=storage_path().'/app/public/img/'.$category_slug.'/'.$subcategory_slug.'/thumbnail_h300';
                $destination_thumbnail_h800=storage_path().'/app/public/img/'.$category_slug.'/'.$subcategory_slug.'/thumbnail_h800';
                $destination_original='public/img/'.$category_slug.'/'.$subcategory_slug.'/original_img';

                $filename = 'img-'.time().'.'.$validated['image']->getClientOriginalExtension();

                try {
                    // store image thumbnail

                    $imgFile_300 = Image::make($validated['image']->getRealPath());
                    $imgFile_800 = Image::make($validated['image']->getRealPath());

                    if (!file_exists($destination_thumbnail_h300)) {
                                dd($destination_thumbnail_h300.' not existing');
                       }
                    if (!file_exists($destination_thumbnail_h800)) {
                                dd($destination_thumbnail_h800.' not existing');
                       }
                  // $thumbnail=$imgFile->resize(1000, 800, function ($constraint) { $constraint->aspectRatio();})->save($destination_thumbnail.'/'.$filename);

                   //get the height to 300 exactly and the width constraint it
                   $thumbnail_h300 = $imgFile_300->resize(null, 300, function ($constraint) {
                       $constraint->aspectRatio();
                       $constraint->upsize();
                    })->save($destination_thumbnail_h300.'/'.$filename);

                   //get the height to 800 exactly and the width constraint it
                   $thumbnail_h800 = $imgFile_800->resize(null, 800, function ($constraint) {
                       $constraint->aspectRatio();
                       $constraint->upsize();
                    })->save($destination_thumbnail_h800.'/'.$filename);

                    // strict radical
                    //  $thumbnail=$imgFile->resize(1000, 800)->save($destination_thumbnail.'/'.$filename);

                    // store original image

                    $path_original_image = $validated['image']->storeAs($destination_original,$filename);
                    $path_original_image = str_replace('public', 'storage', $path_original_image);

                    // store path to db
                    // Product::create(['img_original' => $path_original_image]);
                    //dd($path_original_image);

                    $path_thumbnail_h300 = 'storage/img/'.$category_slug.'/'.$subcategory_slug.'/'.'thumbnail_h300/'.$thumbnail_h300->basename;
                    $path_thumbnail_h800 = 'storage/img/'.$category_slug.'/'.$subcategory_slug.'/'.'thumbnail_h800/'.$thumbnail_h800->basename;

                    // Product::create(['img_thumbnail_h300' => $path_thumbnail_h300 ]);
                    // Product::create(['img_thumbnail_h800' => $path_thumbnail_h800 ]);

                    //dd($path_thumbnail);
                    return back()->withSuccess('file has been uploaded successfuly');

                } catch (Exception $e) {

                    return back()->withSuccess($e->getMessage());

                }


        }

         return back()->withSuccess('empty file');



    }

    # composer require symfony/process
    public function runPythonFunc(){
        $process = new Process(['python', 'pythonpy.py']);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
    }
    # composer require symfony/process
    public function runNodeFunc(){
        $process = new Process(['node', 'nodejs.js']);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
    }

    # composer require symfony/process
    public function runPwdFunc(){
        $process = new Process(['sh', './script.sh']);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
    }
    # composer require symfony/process
    public function installNodeFunc(){
        $process = new Process(['sh', './install.sh']);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
    }
}
