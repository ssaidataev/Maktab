<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classes;
use App\Models\EducationDate;
use App\Models\MarkType;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    public function index()
    {
        $classes = Classes::with('education_date','teacher','room')->get();

        return view('admin.classes.index', compact('classes'));
    }

    public function create()
    {
        $classes = Classes::all();
        $education_dates = EducationDate::all();
        $teachers = Supervisor::all();
        $rooms = Room::all();
        return view('admin.classes.create', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'education_date_id' => 'required|exists:education_dates,id',
            'supervisor_id' => 'required|exists:supervisors,id',
            'room_id' => 'required|exists:rooms,id',
            'number' => 'required|integer|max:11|min:1',
            'literal' => 'required|string',
            'is_active' => 'boolean',
            'class_type' => 'required|string',
        ]);

        Classes::create($request->all());

        return redirect()->route('admin.classes.index')
            ->with('success', 'Classes created successfully.');
    }

    public function show($id)
    {
        $classes = Classes::findOrFail($id);
        return view('admin.classes.show', compact('classes'));
    }

    public function edit($id)
    {
        $classes = Classes::where('id',$id)->first();
        $education_dates = EducationDate::all();
        $teachers = Supervisor::all();
        $rooms = Room::all();
        return view('admin.classes.edit', compact('classes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'education_date_id' => 'required|exists:education_dates,id',
            'supervisor_id' => 'required|exists:supervisors,id',
            'room_id' => 'required|exists:rooms,id',
            'number' => 'required|integer|max:11|min:1',
            'literal' => 'required|string',
            'is_active' => 'boolean',
            'class_type' => 'required|string',
        ]);

        $classes = Classes::findOrFail($id);
        $classes->update($request->all());

        return redirect()->route('admin.classes.index')
            ->with('success', 'classes updated successfully.');
    }

    public function destroy($id)
    {
        $classes = Classes::findOrFail($id);
        $classes->delete();

        return redirect()->route('admin.classes.index')
            ->with('success', 'Classes deleted successfully.');
    }
}
