<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'facebook_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'instagram_link' => 'nullable|url',
            'address' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:100',
        ]);

        $settings = Setting::updateOrCreate([], [
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'instagram_link' => $request->instagram_link,
            'address' => $request->address,
        ]);

        if ($request->hasFile('logo')) {
            // Delete existing logo
            if ($settings->logo) {
                $logoPath = public_path($settings->logo);
                File::delete($logoPath);
            }
    
            // Upload new logo
            $logoFile = $request->file('logo');
            $logoFileName = time() . '_' . $logoFile->getClientOriginalExtension();
            $logoFile->move(public_path('uploads/'), $logoFileName);
    
            $settings->update(['logo' => 'uploads/' . $logoFileName]);
        }

        return redirect()->route('settings.index')->with('success', 'Settings  saved successfully.');

    }
}
