<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Popup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PopupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $popup = Popup::all();
        // $popups = Popup::paginate(5);
        return view('admin.popup.index', compact('popup'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.popup.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $input = $request->all();


        $input['slug'] = $input['slug'] ? $input['slug'] : make_slug($input['title']);

        $imagelist = ['image', 'image_1', 'image_2'];
        // dd($input);

        foreach ($imagelist as $image) {
            if ($request->hasFile($image)) {
                $input[$image] = fileUpload($request, $image, 'popup');
            }
        }

        // if ($image = $request->file("image")) {
        //     $image = $request->image;
        //     $imageName = time() . $image->getClientOriginalName();
        //     $path = '/images/popup/';
        //     $image->move(public_path($path), $imageName);
        //     $imagepath = $path . $imageName;
        //     $input['image'] = $imagepath;
        // }



        // if ($request->hasFile('image')) {
        //     $input['image'] = fileUpload($request, 'image', 'blog');
        // }
        // if ($request->hasFile('image_1')) {
        //     $input['image_1'] = fileUpload($request, 'image_1', 'blog');
        // }
        // if ($request->hasFile('image_2')) {
        //     $input['image_2'] = fileUpload($request, 'image_2', 'blog');
        // }

        Popup::create($input);

        return redirect()->route('popup.index')->with('success', 'popup created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Popup $popup)
    {
        return view('admin.popup.show',  compact('popup'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {

        $popup = Popup::findOrFail($id);
        return view('admin.popup.edit', compact('popup'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Popup $popup)
    {
        $input = $request->all();
        // if ($image = $request->file('image')) {
        //     if ($blog->image && File::exists(public_path($blog->image))) {
        //         File::delete(public_path($blog->image));
        //     }
        //     $image = $request->image;
        //     $imageName =  time() . $image->getClientOriginalName();
        //     $path = "/images/popup/";
        //     $image->move(public_path($path), $imageName);
        //     $imagepath = $path . $imageName;
        //     $input['image'] = $imagepath;
        // }

        // $blog->update($input);
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
            return redirect()->route('popup.edit', $popup)->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                if ($popup->$image != '') {
                    $file = $popup->$image;
                    removeFile($file);
                }
                $imageName = fileUpload($request, $image, 'popup');
                $input[$image] = $imageName;
            }

            $deleteimage = 'delete' . $image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

                if ($popup->$image != '') {
                    $file = $popup->$image;
                    removeFile($file);
                }
                $input[$image] = null;
            }
        }
        $popup->update($input);
        return redirect()->route(route: 'popup.index')->with('success', 'popup updated successfully');
        // $input = $request->all();
        // $blog->update($input);
        // return redirect()->route(route: 'admin.blog.index')->with('success', 'blog updatedapp/Http/Controllers/admin/NewController.php successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Popup $popup)
    {


        $popup = Popup::all();
        $popup->delete();
        return redirect()->route('popup.index')->with('success', 'popup delete successfully');
    }
}
