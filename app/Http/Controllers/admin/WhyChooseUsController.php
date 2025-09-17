<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\WhyChooseUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class WhyChooseUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $whychooseus = WhyChooseUs::all();
        // $whychooseus = WhyChooseUs::paginate(5);
        return view('admin.whychooseus.index', compact('whychooseus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // $input = $request->all();
        // WhyChooseUs::create($input);
        return view('admin.whychooseus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $input = $request->all();

        $request->validate([
            'description' => 'required|string',
        ]);

        $input['slug'] = $input['slug'] ? $input['slug'] : make_slug($input['title']);

        $imagelist = ['image', 'image_1', 'image_2'];
        // dd($input);

        foreach ($imagelist as $image) {
            if ($request->hasFile($image)) {
                $input[$image] = fileUpload($request, $image, 'whychooseus');
            }
        }

        // if ($image = $request->file("image")) {
        //     $image = $request->image;
        //     $imageName = time() . $image->getClientOriginalName();
        //     $path = '/images/WhyChooseUss/';
        //     $image->move(public_path($path), $imageName);
        //     $imagepath = $path . $imageName;
        //     $input['image'] = $imagepath;
        // }



        // if ($request->hasFile('image')) {
        //     $input['image'] = fileUpload($request, 'image', 'WhyChooseUs');
        // }
        // if ($request->hasFile('image_1')) {
        //     $input['image_1'] = fileUpload($request, 'image_1', 'WhyChooseUs');
        // }
        // if ($request->hasFile('image_2')) {
        //     $input['image_2'] = fileUpload($request, 'image_2', 'WhyChooseUs');
        // }

        WhyChooseUs::create($input);

        return redirect()->route('whychooseus.index')->with('success', 'WhyChooseUs created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(WhyChooseUs $whychooseuss)
    {
        // return view('admin.whychooseus.show',  compact('WhyChooseUs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WhyChooseUs $whychooseus)
    {

        $whychooseus = WhyChooseUs::all();
        return view('admin.whychooseus.edit', compact('whychooseus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WhyChooseUs $whychooseus)
    {
        $input = $request->all();
        // if ($image = $request->file('image')) {
        //     if ($WhyChooseUs->image && File::exists(public_path($WhyChooseUs->image))) {
        //         File::delete(public_path($WhyChooseUs->image));
        //     }
        //     $image = $request->image;
        //     $imageName =  time() . $image->getClientOriginalName();
        //     $path = "/images/WhyChooseUss/";
        //     $image->move(public_path($path), $imageName);
        //     $imagepath = $path . $imageName;
        //     $input['image'] = $imagepath;
        // }
        $whychooseus = WhyChooseUs::all();
        // $WhyChooseUs->update($input);
        $whychooseus->update($input);

        $rules = [

            'title' => 'nullable|min:3',
            'description' => 'nullable|string',



        ];


        $imagelist = ['image', 'image_1', 'image_2'];

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('whychooseus.edit', $whychooseus)->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                if ($whychooseus->$image != '') {
                    $file = $whychooseus->$image;
                    removeFile($file);
                }
                $imageName = fileUpload($request, $image, 'whychooseus');
                $input[$image] = $imageName;
            }

            $deleteimage = 'delete' . $image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

                if ($whychooseus->$image != '') {
                    $file = $whychooseus->$image;
                    removeFile($file);
                }
                $input[$image] = null;
            }
        }
        $whychooseus->update($input);


        return redirect()->route(route: 'whychooseus.index')->with('success', 'WhyChooseUs updated successfully');
        // $input = $request->all();
        // $WhyChooseUs->update($input);
        // return redirect()->route(route: 'admin.WhyChooseUs.index')->with('success', 'WhyChooseUs updatedapp/Http/Controllers/admin/NewController.php successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WhycHooseUs $whychooseus)
    {


        $whychooseus = WhyChooseUs::all();
        $whychooseus->delete();
        return redirect()->route('whychooseus.index')->with('success', 'WhyChooseUs delete successfully');
    }
}
