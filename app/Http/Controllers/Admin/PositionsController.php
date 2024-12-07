<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\MarkType;
use App\Models\positions;
use Illuminate\Http\Request;
class PositionsController extends Controller
{
    public function index()
    {
        $positions = Positions::all();
        return view('admin.positions.index', compact('positions'));
    }
    public function create()
    {
        return view('admin.positions.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]);
        Positions::create($request->all());
        return redirect()->route('admin.positions.index')
            ->with('success', 'Positions created successfully.');
    }
    public function show($id)
    {
        $positions = Positions::findOrFail($id);
        return view('admin.positions.show', compact('positions'));
    }
    public function edit($id)
    {
        $positions = Positions::findOrFail($id);
        return view('admin.mark_types.edit', compact('positions'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]);
        $positions = Positions::findOrFail($id);
        $positions->update($request->all());
        return redirect()->route('admin.positions.index')
            ->with('success', 'Positions updated successfully.');
    }
    public function destroy($id)
    {
        $positions = positions::findOrFail($id);
        $positions->delete();
        return redirect()->route('admin.positions.index')
            ->with('success', 'positions deleted successfully.');
    }
}
