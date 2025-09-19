<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    public function index()
    {

        // $sliders = Slider::all();
        $sliders = Slider::paginate(5);
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
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
                $input[$image] = fileUpload($request, $image, 'slider');
            }
        }

        // if ($image = $request->file("image")) {
        //     $image = $request->image;
        //     $imageName = time() . $image->getClientOriginalName();
        //     $path = '/images/sliders/';
        //     $image->move(public_path($path), $imageName);
        //     $imagepath = $path . $imageName;
        //     $input['image'] = $imagepath;
        // }



        // if ($request->hasFile('image')) {
        //     $input['image'] = fileUpload($request, 'image', 'slider');
        // }
        // if ($request->hasFile('image_1')) {
        //     $input['image_1'] = fileUpload($request, 'image_1', 'slider');
        // }
        // if ($request->hasFile('image_2')) {
        //     $input['image_2'] = fileUpload($request, 'image_2', 'slider');
        // }

        Slider::create($input);
        return redirect()->route('slider.index')->with('success', 'slider created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        return view('admin.slider.show',  compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {

        $slider = Slider::all();
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $input = $request->all();
        // if ($image = $request->file('image')) {
        //     if ($slider->image && File::exists(public_path($slider->image))) {
        //         File::delete(public_path($slider->image));
        //     }
        //     $image = $request->image;
        //     $imageName =  time() . $image->getClientOriginalName();
        //     $path = "/images/sliders/";
        //     $image->move(public_path($path), $imageName);
        //     $imagepath = $path . $imageName;
        //     $input['image'] = $imagepath;
        // }

        // $slider->update($input);
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
            return redirect()->route('slider.edit', $slider)->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                if ($slider->$image != '') {
                    $file = $slider->$image;
                    removeFile($file);
                }
                $imageName = fileUpload($request, $image, 'slider');
                $input[$image] = $imageName;
            }

            $deleteimage = 'delete' . $image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

                if ($slider->$image != '') {
                    $file = $slider->$image;
                    removeFile($file);
                }
                $input[$image] = null;
            }
        }
        $slider->update($input);
        return redirect()->route(route: 'slider.index')->with('success', 'slider updated successfully');
        // $input = $request->all();
        // $slider->update($input);
        // return redirect()->route(route: 'admin.slider.index')->with('success', 'slider updatedapp/Http/Controllers/admin/NewController.php successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {


        $slider = Slider::all();
        $slider->delete();
        return redirect()->route('slider.index')->with('success', 'slider delete successfully');
    }
}
