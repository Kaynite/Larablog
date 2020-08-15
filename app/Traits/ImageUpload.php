<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait ImageUpload
{
    protected function handleImageUpload(Request $request, $input_name, $path)
    {
        if ($request->hasFile($input_name)) {
            $fullFileName = $request->file($input_name)->getClientOriginalName();
            $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
            $extension = $request->file($input_name)->getClientOriginalExtension();
            $fileNameToStore = $fileName . "_" . time() .".$extension";
            $request->file($input_name)->storeAs($path, $fileNameToStore);
            return $fileNameToStore;
        } else {
            return Null;
        }

    }
}
