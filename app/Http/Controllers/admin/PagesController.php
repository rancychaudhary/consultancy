<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function index()
    {
        // $pages = Pages::all();
        $pagess = Pages::paginate(10);
        return view('admin.pages.index', compact('pagess'));
    }



    public function create()
    {
        return view('admin.pages.create');
    }



    public function store(Request $request)
    {
        $input = $request->all();

        $input['slug'] = $input['slug'] ? $input['slug'] : make_slug($input['title']);

        $imagelist = ['image', 'image_1', 'image_2'];

        foreach ($imagelist as $image) {
            if ($request->hasFile($image)) {
                $input[$image] = fileUpload($request, $image, 'pages');
            }
        }

        Pages::create($input);

        return redirect()->route('pages.index')->with('success', 'pages created successfully');
    }


    public function show(Pages $pagess) {}


    public function edit(string $id)
    {
        // $pages = Pages::all();
        $pagess = Pages::findOrFail($id);
        return view('admin.pages.edit', compact('pagess'));
    }


    public function update(Request $request, string $id)
    {
        $pages = Pages::findOrFail($id);
        $input = $request->all();
        $input['slug'] = $input['slug'] ? make_slug($input['slug']) : make_slug($input['title']);
        $rules = [

            'title' => 'required|min:3',

        ];


        $imagelist = ['image', 'image_1', 'image_2'];

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('pages.edit', $pages)->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                if ($pages->$image != '') {
                    $file = $pages->$image;
                    removeFile($file);
                }
                $imageName = fileUpload($request, $image, 'pages');
                $input[$image] = $imageName;
            }

            $deleteimage = 'delete' . $image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

                if ($pages->$image != '') {
                    $file = $pages->$image;
                    removeFile($file);
                }
                $input[$image] = null;
            }
        }
        $pages->update($input);

        return redirect()->route(route: 'pages.index')->with('success', 'pages updated successfully');



        // if ($image = $request->file('image')) {
        //     if ($pages->image && File::exists(public_path($pages->image))) {
        //         File::delete(public_path($pages->image));
        //     }
        //     $image = $request->image;
        //     $imageName =  time() . $image->getClientOriginalName();
        //     $path = "storage/images/pages/";
        //     $image->move(public_path($path), $imageName);
        //     $imagepath = $path . $imageName;
        //     $input['image'] = $imagepath;
        // }

        // $pages->update($input);
        // return redirect()->route(route: 'admin.pages.index')->with('success', 'pages updatedapp/Http/Controllers/admin/NewController.php successfully');
    }

    public function destroy(string $id)
    {
        $pages = Pages::findOrFail($id);
        $pages->delete();
        return redirect()->route('pages.index')->with('success', 'pages delete successfully');
    }
}
