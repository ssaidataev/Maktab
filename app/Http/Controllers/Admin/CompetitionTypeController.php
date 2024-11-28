<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompetitionType;
use Illuminate\Http\Request;

class CompetitionTypeController extends Controller
{
    public function index()
    {
        $competitionTypes = CompetitionType::all();
        return view('admin.competition_types.index', compact('competitionTypes'));
    }

    public function create()
    {
        return view('admin.competition_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
        ]);

        CompetitionType::create($request->all());

        return redirect()->route('admin.competition_types.index')
            ->with('success', 'Competition Type created successfully.');
    }

    public function show($id)
    {
        $competitionType = CompetitionType::findOrFail($id);
        return view('admin.competition_types.show', compact('competitionType'));
    }

    public function edit($id)
    {
        $competitionType = CompetitionType::findOrFail($id);
        return view('admin.competition_types.edit', compact('competitionType'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:45',
        ]);

        $competitionType = CompetitionType::findOrFail($id);
        $competitionType->update($request->all());

        return redirect()->route('admin.competition_types.index')
            ->with('success', 'Competition Type updated successfully.');
    }

    public function destroy($id)
    {
        $competitionType = CompetitionType::findOrFail($id);
        $competitionType->delete();

        return redirect()->route('admin.competition_types.index')
            ->with('success', 'Competition Type deleted successfully.');
    }
}
