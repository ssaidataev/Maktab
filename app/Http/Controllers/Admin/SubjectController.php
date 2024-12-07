<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\MarkType;
use App\Models\positions;
use App\Models\Subject;
use Illuminate\Http\Request;
class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('admin.subjects.index', compact('subjects'));
    }
    public function create()
    {
        return view('admin.subjects.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]);
        Subject::create($request->all());
        return redirect()->route('admin.subjects.index')
            ->with('success', 'subjects created successfully.');
    }
    public function show($id)
    {
        $subjects = Subject::findOrFail($id);
        return view('admin.subjects.show', compact('subjects'));
    }
    public function edit($id)
    {
        $subjects = Subject::findOrFail($id);
        return view('admin.subjects.edit', compact('subjects'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]);
        $subjects = Subject::findOrFail($id);
        $subjects->update($request->all());
        return redirect()->route('admin.subjects.index')
            ->with('success', 'subjects updated successfully.');
    }
    public function destroy($id)
    {
        $subjects = Subject::findOrFail($id);
        $subjects->delete();
        return redirect()->route('admin.subjects.index')
            ->with('success', 'subjects deleted successfully.');
    }
}
