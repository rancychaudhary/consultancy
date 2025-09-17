<?php

use App\Models\Setting;
use App\Models\Settings;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;



if (!function_exists('updatesettingmedia')) {
    function updatesettingmedia($request, $name, $filename)
    {


        $image = $request->file($name);
        if ($image) {
            $imageName = time() . '-' . rand(0, 99)  . '-' . $image->getClientOriginalName();
            $image->move(public_path('storage/setting/'), $imageName);

            $image = '/storage/setting/' . $imageName;
            return $image;
        } else {
            return null;
        }
    }
}

if (!function_exists('deletesettingmedia')) {
    function deletesettingmedia($image, $old_image, $image_name, $siteSetting, $siteSettings)
    {
        if ($image) {
            removeFile($old_image);
            $siteSetting[$image_name] = $image;
        } else {
            $siteSetting[$image_name] = $siteSettings[$image_name];
        }
        return $siteSetting[$image_name];
    }
}

if (!function_exists('make_slug')) {
    function make_slug($string)
    {
        return Str::slug($string);
    }
}

if (!function_exists('fileUpload')) {
    function fileUpload($request, $name, $foldername)
    {
        $image = '';
        if ($image = $request->file($name)) {

            $image = $request->$name;
            $imageName = time() . $image->getClientOriginalName();
            $path = "storage/images/" . $foldername . "/";
            $image->move(public_path($path), $imageName);


            return $path . $imageName;
        }
    }
}

if (!function_exists('fileUpload1')) {
    function fileUpload1($request, $name, $foldername)
    {
        $image = '';
        if ($imageFile = $request->file($name)) {
            // Create folder if it doesn't exist
            $folderPath = public_path('storage/' . $foldername);
            if (!file_exists($folderPath)) {
                mkdir($folderPath, 0777, true);  // Create folder and subfolders
            }

            $imageNewName = $name . '-' . date('YmdHis') . '.' . $imageFile->getClientOriginalExtension();
            $imageFile->move($folderPath, $imageNewName); // Move the file to the folder

            // Return the relative image path to store in database
            return $foldername . '/' . $imageNewName;
        }
        return null;
    }
}

if (!function_exists('galleryfileUpload')) {
    function galleryfileUpload($request, $name, $foldername)
    {
        $image = '';
        if ($image = $request->file($name)) {

            $image = $request->$name;
            $imageName = time() . '-' . rand(0, 99)  . '-' . $image->getClientOriginalName();
            $path = "storage/images/" . $foldername . "/";
            $image->move(public_path($path), $imageName);

            return $path . $imageName;
        }
    }
}


if (!function_exists('fileUploadgallery')) {
    function fileUploadgallery($file, $foldername)
    {
        // Get original filename without extension
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

        // Generate unique filename using original name + unique ID
        $image_new_name = $originalName . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

        // Move the file
        $file->move(public_path('storage/' . $foldername), $image_new_name);

        return '/storage/' . $foldername . '/' . $image_new_name;
    }
}


if (!function_exists('removeFile')) {
    function removeFile($file)
    {
        if (File::exists(public_path($file))) {
            File::delete(public_path($file));
        }
    }
}
if (!function_exists('removeFile1')) {
    function removeFile1($file)
    {
        $filePath = public_path($file);

        if (File::exists($filePath)) {
            File::delete($filePath);
        }
    }
}

if (!function_exists('stripLetters')) {
    function stripLetters($text, $number, $last = "")
    {
        if (!empty($text)) {
            return substr(strip_tags(html_entity_decode($text)), 0, $number) . $last;
        }
    }
}

if (!function_exists('formatBlogDate')) {

    function formatBlogDate($dateString)
    {
        $date = Carbon::parse($dateString);
        $formattedDate = $date->format('F d Y');

        return $formattedDate;
    }
}
if (!function_exists('get_setting')) {
    function get_setting($key, $default = null)
    {
        return Settings::where('key', $key)->value('value') ?? $default;
    }
}
// if (!function_exists('setting')) {
//     function setting($key)
//     {
//         return Setting::where('key', $key)->value('value');
//     }
// }
