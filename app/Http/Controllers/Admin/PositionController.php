<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\MarkType;
use Illuminate\Http\Request;
class MarkTypeController extends Controller
{
    public function index()
    {
        $markTypes = MarkType::all();
        return view('admin.mark_types.index', compact('markTypes'));
    }

    public function create()
    {
        return view('admin.mark_types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]);
        MarkType::create($request->all());
        return redirect()->route('admin.mark-types.index')
            ->with('success', 'Mark Type created successfully.');
    }

    public function show($id)
    {
        $markType = MarkType::findOrFail($id);
        return view('admin.mark_types.show', compact('markType'));
    }

    public function edit($id)
    {
        $markType = MarkType::findOrFail($id);
        return view('admin.mark_types.edit', compact('markType'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]);
        $markType = MarkType::findOrFail($id);
        $markType->update($request->all());
        return redirect()->route('admin.mark-types.index')
            ->with('success', 'Mark Type updated successfully.');
    }

    public function destroy($id)
    {
        $markType = MarkType::findOrFail($id);
        $markType->delete();
        return redirect()->route('admin.mark-types.index')
            ->with('success', 'Mark Type deleted successfully.');
    }
}
