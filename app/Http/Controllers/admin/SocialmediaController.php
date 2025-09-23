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
