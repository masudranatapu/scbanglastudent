<?php 
use Illuminate\Support\Str;

//highlights the selected navigation on admin panel
if (! function_exists('make_slug')) {
    function make_slug($slug)
    {
        return Str::slug($slug);
    }
}

if (!function_exists('upload_image')) {
    function upload_image($image_name)
    {
        $imageName = time().rand().'-'.$image_name->getClientOriginalName();
        $destinationPath = public_path('/uploads/');
        $image_name->move($destinationPath, $imageName);
        return $imageName;
    }
}



?>