<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EducationDate;
use App\Models\EducationPlan;
use App\Models\EducationLevel;
use App\Models\MarkType;
use Illuminate\Http\Request;

class EducationLevelController extends Controller
{
    public function index()
    {
        $educationLevels = EducationLevel::all();
        return view('admin.education_levels.index', compact('educationLevels'));
    }

    public function create()
    {
        return view('admin.education_levels.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'order' => 'required|integer',
            'is_active' => 'boolean',
        ]);

        EducationLevel::create($request->all());

        return redirect()->route('admin.education_levels.index')
            ->with('success', 'Education Level created successfully.');
    }

    public function show($id)
    {
        $educationLevel = EducationLevel::findOrFail($id);
        return view('admin.education_levels.show', compact('educationLevel'));
    }

    public function edit($id)
    {
        $educationLevel = EducationLevel::findOrFail($id);
        return view('admin.education_levels.edit', compact('educationLevel'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:45',
        ]);

        $educationLevel = EducationLevel::findOrFail($id);
        $educationLevel->update($request->all());

        return redirect()->route('admin.education_levels.index')
            ->with('success', 'Education Level updated successfully.');
    }

    public function destroy($id)
    {
        $educationLevel = EducationLevel::findOrFail($id);
        $educationLevel->delete();

        return redirect()->route('admin.education_levels.index')
            ->with('success', 'Education Level deleted successfully.');
    }
}
