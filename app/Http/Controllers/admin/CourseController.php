<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::all();
        // $course = Course::paginate(10);
        return view('admin.course.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.course.create');
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
                $input[$image] = fileUpload($request, $image, 'course');
            }
        }

        Course::create($input);

        return redirect()->route('course.index')->with('success', 'course created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $courses = Course::all();
        // $course = Course::findOrFail($id);
        return view('admin.course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
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
            return redirect()->route('course.edit', $course)->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                if ($course->$image != '') {
                    $file = $course->$image;
                    removeFile($file);
                }
                $imageName = fileUpload($request, $image, 'course');
                $input[$image] = $imageName;
            }

            $deleteimage = 'delete' . $image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

                if ($course->$image != '') {
                    $file = $course->$image;
                    removeFile($file);
                }
                $input[$image] = null;
            }
        }
        $course->update($input);
        return redirect()->route(route: 'course.index')->with('success', 'course updated successfully');

        // if ($image = $request->file('image')) {
        //     if ($course->image && File::exists(public_path($course->image))) {
        //         File::delete(public_path($course->image));
        //     }
        //     $image = $request->image;
        //     $imageName =  time() . $image->getClientOriginalName();
        //     $path = "/images/courses/";
        //     $image->move(public_path($path), $imageName);
        //     $imagepath = $path . $imageName;
        //     $input['image'] = $imagepath;
        // }

        // $course->update($input);
        // return redirect()->route(route: 'admin.course.index')->with('success', 'course updatedapp/Http/Controllers/admin/NewController.php successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        // $course = Course::findOrFail($id);
        $course->delete();
        return redirect()->route('course.index')->with('success', 'course delete successfully');
    }
}
