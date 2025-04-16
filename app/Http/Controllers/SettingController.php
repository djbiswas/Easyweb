<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $siteName = Setting::getValue('site_name');
        $logo = Setting::getValue('logo');

        return view('admin.settings.index', compact('siteName', 'logo'));
    }

    public function update(Request $request)
    {
        Setting::setValue('site_name', $request->input('site_name'));

        // For logo you might use Spatie MediaLibrary or basic file upload
        Setting::setValue('logo', [
            'light' => $request->input('logo_light'),
            'dark' => $request->input('logo_dark'),
        ]);

        return back()->with('success', 'Settings updated.');
    }
}
