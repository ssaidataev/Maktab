<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AchievementLevel;
use Illuminate\Http\Request;



class AchievementLevelController extends Controller
{
    public function index()
    {
        $achievementLevels = AchievementLevel::all();
        return view('admin.achievement_levels.index', compact('achievementLevels'));
    }



    public function create()
    {
        return view('admin.achievement_levels.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',

        ]);



        AchievementLevel::create($request->all());



        return redirect()->route('admin.achievement_levels.index')
            ->with('success', 'Achievement Level created successfully.');
    }



    public function show($id)
    {
        $achievementLevel = AchievementLevel::findOrFail($id);
        return view('admin.achievement_levels.show', compact('achievementLevel'));
    }



    public function edit($id)
    {
        $achievementLevel = AchievementLevel::findOrFail($id);
        return view('admin.achievement_levels.edit', compact('achievementLevel'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([


            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]);



        $achievementLevel = AchievementLevel::findOrFail($id);
        $achievementLevel->update($request->all());



        return redirect()->route('admin.achievement_levels.index')
            ->with('success', 'Achievement Level updated successfully.');
    }



    public function destroy($id)
    {
        $achievementLevel = AchievementLevel::findOrFail($id);
        $achievementLevel->delete();



        return redirect()->route('admin.achievement_levels.index')
            ->with('success', 'Achievement Level deleted successfully.');
    }
}
