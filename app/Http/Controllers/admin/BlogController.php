<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Upload file helper (moved inside controller)
     */
    private function fileUpload(Request $request, $fieldName, $folder)
    {
        if ($request->hasFile($fieldName)) {
            $file = $request->file($fieldName);
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = 'uploads/' . $folder . '/';
            $file->move(public_path($path), $fileName);
            return $path . $fileName;
        }
        return null;
    }

    /**
     * Remove file helper
     */
    private function removeFile($filePath)
    {
        if ($filePath && file_exists(public_path($filePath))) {
            unlink(public_path($filePath));
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $request->validate([
            'title' => 'required|string|min:3',
            'description' => 'required|string',
        ]);

        $input['slug'] = $input['slug'] ? $input['slug'] : make_slug($input['title']);

        $imagelist = ['image', 'image_1', 'image_2'];

        foreach ($imagelist as $image) {
            if ($request->hasFile($image)) {
                $input[$image] = $this->fileUpload($request, $image, 'blog');
            }
        }

        Blog::create($input);

        return redirect()->route('blog.index')->with('success', 'Blog created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $input = $request->all();

        $rules = [
            'title' => 'required|min:3',
            'description' => 'required|string',
        ];

        $imagelist = ['image', 'image_1', 'image_2'];

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                $rules[$image] = 'image';
            }
        }

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('blogs.edit', $blog)->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                if ($blog->$image != '') {
                    $this->removeFile($blog->$image);
                }
                $input[$image] = $this->fileUpload($request, $image, 'blog');
            }

            $deleteimage = 'delete' . $image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {
                if ($blog->$image != '') {
                    $this->removeFile($blog->$image);
                }
                $input[$image] = null;
            }
        }

        $blog->update($input);

        return redirect()->route('blog.index')->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $blog = Blog::findOrFail($id);

        // delete images if exist
        $imagelist = ['image', 'image_1', 'image_2'];
        foreach ($imagelist as $image) {
            if ($blog->$image) {
                $this->removeFile($blog->$image);
            }
        }

        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully');
    }
}
