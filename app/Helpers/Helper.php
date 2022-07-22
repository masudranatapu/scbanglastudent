<?php 

namespace App\Helpers;

class Helper {
    public static function make_slug($slug)
    {
        return preg_replace('/\s+/u', '-', trim($slug));
    }
    public static function upload_image($image_name)
    {
        $imageName = time().rand().'-'.$image_name->getClientOriginalName();
        $destinationPath = public_path('/uploads/');
        $image_name->move($destinationPath, $imageName);
        return $imageName;
    }
}