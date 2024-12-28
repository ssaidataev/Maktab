<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentStatus;
use Illuminate\Http\Request;
class StudentStatusController extends Controller
{
    public function index()
    {
        $statuses = StudentStatus::all();
        return view('admin.student_statuses.index', compact('statuses'));
    }

    public function create()
    {
        return view('admin.student_statuses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        StudentStatus::create($request->all());
        return redirect()->route('admin.student-statuses.index')->with('success', 'Статус добавлен!');
    }

    public function show(StudentStatus $studentStatus)
    {
        return view('admin.student_statuses.show', compact('studentStatus'));
    }

    public function edit(StudentStatus $studentStatus)
    {
        return view('admin.student_statuses.edit', compact('studentStatus'));
    }

    public function update(Request $request, StudentStatus $studentStatus)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
        ]);

        $studentStatus->update($request->all());
        return redirect()->route('admin.student-statuses.index')->with('success', 'Статус обновлен!');
    }

    public function destroy(StudentStatus $studentStatus)
    {
        $studentStatus->delete();
        return redirect()->route('admin.student-statuses.index')->with('success', 'Статус удален!');
    }

}
