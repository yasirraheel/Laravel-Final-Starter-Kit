<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.index');
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method', 'group']);
        $group = $request->input('group', 'general');

        foreach ($data as $key => $value) {
            // Skip files here, handled separately
            if ($request->hasFile($key)) {
                continue;
            }
            Setting::set($key, $value, $group);
        }

        // Handle File Uploads
        $files = ['site_logo', 'site_favicon'];
        foreach ($files as $fileKey) {
            if ($request->hasFile($fileKey)) {
                $file = $request->file($fileKey);
                $path = $file->store('settings', 'public');
                Setting::set($fileKey, $path, $group, 'image');
            }
        }

        return back()->with('success', ucfirst($group) . ' settings updated successfully.');
    }
}
