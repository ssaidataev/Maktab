<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EducationDate;
use App\Models\MarkType;
use Illuminate\Http\Request;

class EducationDateController extends Controller
{
    public function index()
    {
        $educationDates = EducationDate::all();
        return view('admin.education_dates.index', compact('educationDates'));
    }

    public function create()
    {
        return view('admin.education_dates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'start_year' => 'required|integer|min:2024|max:2050',
            'end_year' => 'required|integer|min:2024|max:2036',
            'is_active' => 'boolean',
        ]);

        EducationDate::create($request->all());

        return redirect()->route('admin.education_dates.index')
            ->with('success', 'Education Date created successfully.');
    }

    public function show($id)
    {
        $educationDate = EducationDate::findOrFail($id);
        return view('admin.education_dates.show', compact('educationDate'));
    }

    public function edit($id)
    {
        $educationDate = EducationDate::findOrFail($id);
        return view('admin.education_dates.edit', compact('educationDate'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            //'name' => 'required|string|max:45',
        ]);

        $educationDate = EducationDate::findOrFail($id);
        $educationDate->update($request->all());

        return redirect()->route('admin.education_dates.index')
            ->with('success', 'Education Date updated successfully.');
    }

    public function destroy($id)
    {
        $educationDate = EducationDate::findOrFail($id);
        $educationDate->delete();

        return redirect()->route('admin.education_dates.index')
            ->with('success', 'Education Date deleted successfully.');
    }
}
