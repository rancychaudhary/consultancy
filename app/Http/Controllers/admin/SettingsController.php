<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Settings $settings)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Settings $settings)
    {
        //
        $settings = Settings::pluck('value', 'key');
        return view('admin.settings.edit', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Settings $settings)
    {
        //
        $siteSettings = Settings::pluck('value', 'key');

        $siteSetting = $request->all();

        $settingmedias = ['site_main_logo', 'site_fav_icon', 'site_footer_logo', 'site_contact_image'];

        foreach ($settingmedias as $media) {
            ${$media} = updatesettingmedia($request, $media, $media);

            $siteSetting[$media] = deletesettingmedia(${$media}, $siteSettings[$media], $media, $siteSetting, $siteSettings);
        }

        foreach ($siteSetting as $key => $value) {

            if (!is_array($value)) {
                $value = [$value];
            }

            $value = implode(',', $value);

            $settings->updateOrCreate(['key' => $key,], [
                'key' => $key,
                'value' => $value,
            ]);
        }

        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
