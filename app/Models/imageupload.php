<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class imageupload extends Model
{
    public static function any_upload($file,$path)
    {   
        $extension  = $file->getClientOriginalExtension();
        $fileName   = rand(11111,99999).'.'.$extension;
        $result     = $file->move($path,$fileName);
        $filename   = $fileName;
        return $filename;
    }
}
