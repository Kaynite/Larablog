<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

trait ImageUpload
{
    protected function handleImageUpload(Request $request, $input_name, $path)
    {
        if ($request->hasFile($input_name)) {
            $extension = $request->file($input_name)->getClientOriginalExtension();
            $fileNameToStore = "image" . "_" . time() . ".$extension";
            $request->file($input_name)->storeAs($path, $fileNameToStore);
            return $fileNameToStore;
        } else {
            return Null;
        }

    }
}
