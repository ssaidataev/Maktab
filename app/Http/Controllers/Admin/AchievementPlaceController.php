<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AchievementPlace;
use Illuminate\Http\Request;



class AchievementPlaceController extends Controller
{
    public function index()
    {
        $achievementPlaces = AchievementPlace::all();
        return view('admin.achievement_places.index', compact('achievementPlaces'));
    }



    public function create()
    {
        return view('admin.achievement_places.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'is_active' => 'boolean',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:4000',

        ]);

        //dd($request->all());

       $achievementPlace = new AchievementPlace($request->all());

       if ($request->hasFile('icon')) {
           $iconPath = $request->file('icon')->store('achievement_place_icon', 'public');
           $achievementPlace->icon = $iconPath;
       }

      // dd($achievementPlace->attributesToArray());
        AchievementPlace::create($achievementPlace->toArray());



        return redirect()->route('admin.achievement_places.index')
            ->with('success', 'Achievement Places created successfully.');
    }



    public function show($id)
    {
        $achievementPlace = AchievementPlace::findOrFail($id);
        return view('admin.achievement_places.show', compact('achievementPlace'));
    }



    public function edit($id)
    {
        $achievementPlace = AchievementPlace::findOrFail($id);
        return view('admin.achievement_places.edit', compact('achievementPlace'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
           'name' => 'required|string|max:45',
            'description' => 'required|string',
            'icon' => 'nullable|file|image|mimes:jpeg,png,jpg,gif,svg|max:4000',
        ]);

        $achievementPlace = AchievementPlace::findOrFail($id);


        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('achievement_place_icon', 'public');
            $achievementPlace->icon = $iconPath;
        }
        $achievementPlace->update($request->except('icon'));
        return redirect()->route('admin.achievement_places.index')
            ->with('success', 'Achievement Place updated successfully.');
    }

    public function destroy($id)
    {
        $achievementPlace = AchievementPlace::findOrFail($id);
        $achievementPlace->delete();



        return redirect()->route('admin.achievement_places.index')
            ->with('success', 'Achievement Place deleted successfully.');
    }
}
