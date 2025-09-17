<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $testimonials = Testimonial::all();

        $testimonial = Testimonial::paginate(5);
        return view('admin.testimonial.index', compact('testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $input['slug'] = $input['slug'] ? $input['slug'] : make_slug($input['title']);

        $imagelist = ['image', 'image_1', 'image_2'];

        foreach ($imagelist as $image) {
            if ($request->hasFile($image)) {
                $input[$image] = fileUpload($request, $image, 'testimonial');
            }
        }

        testimonial::create($input);

        return redirect()->route('testimonial.index')->with('success', 'testimonial created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(testimonial $testimonial) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        // $testimonials = Testimonial::all();
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {

        $input = $request->all();
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
            return redirect()->route('testimonial.edit', $testimonial)->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                if ($testimonial->$image != '') {
                    $file = $testimonial->$image;
                    removeFile($file);
                }
                $imageName = fileUpload($request, $image, 'testimonial');
                $input[$image] = $imageName;
            }

            $deleteimage = 'delete' . $image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

                if ($testimonial->$image != '') {
                    $file = $testimonial->$image;
                    removeFile($file);
                }
                $input[$image] = null;
            }
        }
        $testimonial->update($input);
        return redirect()->route(route: 'admin.testimonial.index')->with('success', 'testimonial updated successfully');

        // if ($image = $request->file('image')) {
        //     if ($testimonial->image && File::exists(public_path($testimonial->image))) {
        //         File::delete(public_path($testimonial->image));
        //     }
        //     $image = $request->image;
        //     $imageName =  time() . $image->getClientOriginalName();
        //     $path = "storage/images/testimonial/";
        //     $image->move(public_path($path), $imageName);
        //     $imagepath = $path . $imageName;
        //     $input['image'] = $imagepath;
        // }

        // $testimonial->update($input);
        // return redirect()->route(route: 'admin.testimonial.index')->with('success', 'testimonial updatedapp/Http/Controllers/admin/NewController.php successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return redirect()->route('admin.testimonial.index')->with('success', 'testimonial delete successfully');
    }
}
