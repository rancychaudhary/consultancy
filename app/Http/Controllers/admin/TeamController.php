<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {

        $team = Team::all();
        // $teams = Team::paginate(10);
        return view('admin.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
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
                $input[$image] = fileUpload($request, $image, 'team');
            }
        }

        // if ($image = $request->file("image")) {
        //     $image = $request->image;
        //     $imageName = time() . $image->getClientOriginalName();
        //     $path = '/images/team/';
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

        Team::create($input);

        return redirect()->route('admin.team.index')->with('success', 'team created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return view('admin.team.show',  compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {

        $team = Team::findOrFail($id);
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $input = $request->all();
        // if ($image = $request->file('image')) {
        //     if ($team->image && File::exists(public_path($team->image))) {
        //         File::delete(public_path($team->image));
        //     }
        //     $image = $request->image;
        //     $imageName =  time() . $image->getClientOriginalName();
        //     $path = "/images/teams/";
        //     $image->move(public_path($path), $imageName);
        //     $imagepath = $path . $imageName;
        //     $input['image'] = $imagepath;
        // }

        // $team->update($input);
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
            return redirect()->route('team.edit', $team)->withInput()->withErrors($validator);
        }

        foreach ($imagelist as $image) {
            if ($request->$image != '') {
                if ($team->$image != '') {
                    $file = $team->$image;
                    removeFile($file);
                }
                $imageName = fileUpload($request, $image, 'team');
                $input[$image] = $imageName;
            }

            $deleteimage = 'delete' . $image;
            if (isset($input[$deleteimage]) && $input[$deleteimage] == 'on') {

                if ($team->$image != '') {
                    $file = $team->$image;
                    removeFile($file);
                }
                $input[$image] = null;
            }
        }
        $team->update($input);
        return redirect()->route(route: 'admin.team.index')->with('success', 'team updated successfully');
        // $input = $request->all();
        // $team->update($input);
        // return redirect()->route(route: 'admin.team.index')->with('success', 'team updatedapp/Http/Controllers/admin/NewController.php successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {


        $team = Team::findOrFail($id);
        $team->delete();
        return redirect()->route('admin.team.index')->with('success', 'team delete successfully');
    }
}
