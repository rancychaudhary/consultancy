<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Socialmedia;
use Illuminate\Http\Request;

class SocialmediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialmedia = Socialmedia::all();
        // $socialmedia = Socialmedia::paginate(10);
        return view('admin.socialmedia.index', compact('socialmedia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // $input = $request->all();
        // socialmedia::create($input);
        return view('admin.socialmedia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $input = $request->all();

        $request->validate([]);

        // $input['slug'] = $input['slug'] ? $input['slug'] : make_slug($input['title']);

        // $imagelist = ['image', 'image_1', 'image_2'];
        // // dd($input);

        // foreach ($imagelist as $image) {
        //     if ($request->hasFile($image)) {
        //         $input[$image] = fileUpload($request, $image, 'social');
        //     }
        // }


        Socialmedia::create($input);

        return redirect()->route('socialmedia.index')->with('success', 'socialmedia created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Socialmedia $socialmedia)
    {
        // return view('admin.socialmedia.show',  compact('socialmedia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Socialmedia $socialmedia)
    {

        $socialmedia = Socialmedia::all();
        return view('admin.socialmedia.edit', compact('socialmedia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Socialmedia $socialmedia)
    {
        $input = $request->all();
        // if ($image = $request->file('image')) {
        //     if ($socialmedia->image && File::exists(public_path($socialmedia->image))) {
        //         File::delete(public_path($socialmedia->image));
        //     }
        //     $image = $request->image;
        //     $imageName =  time() . $image->getClientOriginalName();
        //     $path = "/images/socialmedias/";
        //     $image->move(public_path($path), $imageName);
        //     $imagepath = $path . $imageName;
        //     $input['image'] = $imagepath;
        // }
        $socialmedia = socialmedia::all();
        // $socialmedia->update($input);
        $socialmedia->update($input);

        $rules = [

            'title' => 'nullable|min:3',
            'description' => 'nullable|string',



        ];


        // $imagelist = ['image', 'image_1', 'image_2'];

        // foreach ($imagelist as $image) {
        //     if ($request->$image != '') {
        //         $rules[$image] = 'image';
        //     }
        // }

        // $validator = Validator::make($input, $rules);

        // if ($validator->fails()) {
        //     return redirect()->route('social.edit', $socialmedia)->withInput()->withErrors($validator);
        // }

        // foreach ($imagelist as $image) {
        //     if ($request->$image != '') {
        //         if ($socialmedia->$image != '') {
        //             $file = $socialmedia->$image;
        //             removeFile($file);
        //         }
        //         $imageName = fileUpload($request, $image, 'social');
        //         $input[$image] = $imageName;
        //     }

        //     $deleteimage = 'delete' . $image;
        //     if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

        //         if ($socialmedia->$image != '') {
        //             $file = $socialmedia->$image;
        //             removeFile($file);
        //         }
        //         $input[$image] = null;
        //     }
        // }
        $socialmedia->update($input);


        return redirect()->route(route: 'socialmedia.index')->with('success', 'socialmedia updated successfully');
        // $input = $request->all();
        // $socialmedia->update($input);
        // return redirect()->route(route: 'admin.socialmedia.index')->with('success', 'socialmedia updatedapp/Http/Controllers/admin/NewController.php successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Socialmedia $socialmedia)
    {


        $socialmedia = Socialmedia::all();
        $socialmedia->delete();
        return redirect()->route('socialmedia.index')->with('success', 'socialmedia delete successfully');
    }
}
