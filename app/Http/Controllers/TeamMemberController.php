<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::orderBy('serial_number')->get();
        return view('admin.team_members.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('admin.team_members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'facebook_link' => 'nullable|url',
            'twitter_link' => 'nullable|url',
            'serial_number' => 'required|integer',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:1024', // Max size 1MB
        ]);

        $data = [
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'facebook_link' => $request->input('facebook_link'),
            'twitter_link' => $request->input('twitter_link'),
            'serial_number' => $request->input('serial_number'),
        ];

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            $destination = 'uploads/team_members/';
            $file = $request->file('profile_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move($destination, $filename);
            $data['profile_image'] = $destination . $filename;
        }

        // Save the new Team Member
        TeamMember::create($data);

        return redirect()->route('team-members.index')->with('success', 'Team Member created successfully.');
    }

    public function edit($id)
    {
        $teamMember = TeamMember::findOrFail($id);

        return view('admin.team_members.edit', compact('teamMember'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'facebook_link' => 'nullable|string|max:255',
            'twitter_link' => 'nullable|string|max:255',
            'serial_number' => 'nullable|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:102400', // max size 100KB
        ]);

        $teamMember = TeamMember::findOrFail($id);

        $teamMember->update([
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'facebook_link' => $request->input('facebook_link'),
            'twitter_link' => $request->input('twitter_link'),
            'serial_number' => $request->input('serial_number'),
            // ... other attributes ...

        ]);

        // Handle profile image update
        if ($request->hasFile('profile_image')) {
            // Delete existing profile image
            if ($teamMember->profile_image) {
                // Add logic to delete the existing image file
            }

            // Upload new profile image
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $teamMember->update(['profile_image' => $imagePath]);
        }

        return redirect()->route('team-members.index')->with('success', 'Team Member updated successfully');
    }


    public function destroy($id)
    {
        $teamMember = TeamMember::findOrFail($id);

        // Delete profile image if it exists
        if ($teamMember->profile_image) {
            Storage::disk('public')->delete('uploads/team_members/' . $teamMember->profile_image);
        }

        $teamMember->delete();

        return redirect()->route('team-members.index')->with('success', 'Team Member deleted successfully');
    }

}
