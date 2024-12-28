<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AchievementLevel;
use App\Models\AchievementPlace;
use App\Models\AchievementScore;
use App\Models\Competition;
use Illuminate\Http\Request;

class AchievementScoreController extends Controller
{
    public function index()
    {
        $achievementScores = AchievementScore::with('achievementLevel','achievementPlace','competition')->get();
        return view('admin.achievement_scores.index', compact('achievementScores'));
    }

    public function create()
    {
        $achievementScores = AchievementScore::all();
        $achievementLevels = AchievementLevel::all();
        $achievementPlaces = AchievementPlace::all();
        $competitions = Competition::all();
        return view('admin.achievement_scores.create', compact('achievementScores', 'competitions','achievementLevels', 'achievementPlaces'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'achievement_level_id' => 'required|exists:achievement_levels,id',
            'achievement_place_id' => 'required|exists:achievement_places,id',
            'competition_id' => 'required|exists:competitions,id',
            'score' => 'required',


        ]);


        AchievementScore::create($request->all());

        return redirect()->route('admin.achievement_scores.index')
            ->with('success', 'AchievementScore created successfully.');
    }

    public function show($id)
    {
        $achievementScore = AchievementScore::findOrFail($id);
        return view('admin.achievement_scores.show', compact('achievementScore'));
    }

    public function edit($id)
    {
        $achievementScore = AchievementScore::where('id', $id)->first();
        $achievementLevels = AchievementLevel::all();
        $achievementPlaces = AchievementPlace::all();
        $competitions = Competition::all();

        return view('admin.achievement_scores.edit', compact('achievementScore','id', 'competitions','achievementLevels', 'achievementPlaces'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'achievement_level_id' => 'required|exists:achievement_levels,id',
            'achievement_place_id' => 'required|exists:achievement_places,id',
            'competition_id' => 'required|exists:competitions,id',
            'score' => 'required',

        ]);
        $achievementScore = AchievementScore::findOrFail($id);
        $achievementScore->update($request->all());
        return redirect()->route('admin.achievement_scores.index')
            ->with('success', 'AchievementScore updated successfully.');
    }


    public function destroy($id)
    {
        $achievementScore =AchievementScore::findOrFail($id);
        $achievementScore->delete();

        return redirect()->route('admin.achievement_scores.index')
            ->with('success', 'Competition deleted successfully.');
    }
}
