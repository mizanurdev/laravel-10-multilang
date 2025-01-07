<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    private function handleFileUpload($file, $path)
    {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        return $file->storeAs('uploads/' . $path, $fileName, 'public');
    }

    private function handleFileDelete($filePath)
    {
        if ($filePath && Storage::exists('public/' . $filePath)) {
            Storage::delete('public/' . $filePath);
        }
    }
    public function index() {
        $teams = Team::all();
        return view('backend.admin.team.index',[
            'teams' => $teams
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'en_name' => 'required|string|max:255',
            'bn_name' => 'required|string|max:255',
            'en_designation' => 'required|string|max:255',
            'bn_designation' => 'required|string|max:255',
            'en_description' => 'nullable|string|max:255',
            'bn_description' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $team = new Team();
        $team->en_name = $request->en_name;
        $team->bn_name = $request->bn_name;
        $team->en_designation = $request->en_designation;
        $team->bn_designation = $request->bn_designation;
        $team->en_description = $request->en_description;
        $team->bn_description = $request->bn_description;
        if ($request->hasFile('image')) {
            $team->image = $this->handleFileUpload($request->file('image'), 'team/images');
        }
        $team->save();
        return redirect()->route('team.index')->with('success', 'Team created successfully.');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $this->handleFileDelete($team->image);
        $team->delete();
        return redirect()->route('team.index')->with('success', 'Team deleted successfully.');
    }
}
