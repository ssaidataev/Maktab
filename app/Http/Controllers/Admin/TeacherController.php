<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EducationLevel;
use App\Models\positions;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }
    public function create()
    {
        $positions = Positions::all();
        $education_levels = EducationLevel::all();

        return view('admin.teachers.create', compact('positions', 'education_levels'));
    }

    public function store(Request $request)
    {
        $validated_data =  $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'username'=> ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender' => ['nullable'],
            'phone' => ['nullable'],
            'birthday' => ['nullable', 'date', 'before:01.01.2018'],
            'address' => ['nullable', 'string', 'max:500'],
            'position_id' => ['required','exists:positions,id'],
            'education_level_id' => ['required','exists:education_levels,id'],

        ]);
    }
    public function show($id)
    {
        $teachers = Teacher::findOrFail($id);
        return view('admin.teachers.show', compact('teachers'));
    }
    public function edit($id)
    {
        $teachers = Teacher::findOrFail($id);
        return view('admin.teachers.edit', compact('teachers'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'position_id' => 'required',
            'education_level_id' => 'required',
        ]);
        $teachers = Teacher::findOrFail($id);
        $teachers->update($request->all());
        return redirect()->route('admin.teachers.index')
            ->with('success', 'Teacher information updated successfully.');
    }
    public function destroy($id)
    {
        $teachers = Teacher::findOrFail($id);
        $teachers->delete();
        return redirect()->route('admin.teachers.index')
            ->with('success', 'Teacher deleted successfully.');
    }
}
