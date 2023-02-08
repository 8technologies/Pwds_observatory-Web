<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

trait StoreImageTrait
{
    public function verifyAndStoreImage(Request $request, String $directory, String $fieldname = 'image')
    {
        if( $request->hasFile($fieldname) ) {
            $image = $request->file($fieldname);
            $image_name = \bin2hex(\random_bytes(8)) .'.'.$image->getClientOriginalExtension(); //rename image

            //resize image
            $imgFile = Image::make($image->getRealPath());
            $path = $imgFile->resize(800, 420, function ($constraint) {
                $constraint->aspectRatio();
            })->stream();

            $save_path = "{$directory}/$image_name";
            Storage::disk('public')->put($save_path, $path);
            return $save_path;
        }

        return false;
    }
}