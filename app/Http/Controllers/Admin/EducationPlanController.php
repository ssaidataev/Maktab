<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EducationDate;
use App\Models\EducationPlan;
use App\Models\MarkType;
use Illuminate\Http\Request;

class EducationPlanController extends Controller
{
    public function index()
    {
        $educationPlans = EducationPlan::all();
        return view('admin.education_plans.index', compact('educationPlans'));
    }

    public function create()
    {
        return view('admin.education_plans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'is_active' => 'boolean',
        ]);

        EducationPlan::create($request->all());

        return redirect()->route('admin.education_plans.index')
            ->with('success', 'Education Plan created successfully.');
    }

    public function show($id)
    {
        $educationPlan = EducationPlan::findOrFail($id);
        return view('admin.education_plans.show', compact('educationPlan'));
    }

    public function edit($id)
    {
        $educationPlan = EducationPlan::findOrFail($id);
        return view('admin.education_plans.edit', compact('educationPlan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:45',
        ]);

        $educationPlan = EducationPlan::findOrFail($id);
        $educationPlan->update($request->all());

        return redirect()->route('admin.education_plans.index')
            ->with('success', 'Education Plan updated successfully.');
    }

    public function destroy($id)
    {
        $educationPlan = EducationPlan::findOrFail($id);
        $educationPlan->delete();

        return redirect()->route('admin.education_plans.index')
            ->with('success', 'Education Plan deleted successfully.');
    }
}
