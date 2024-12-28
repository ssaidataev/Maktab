<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;
class RoomController extends Controller
{
    public function index()
    {
      
        $rooms = Room::all();
        return view('admin.rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('admin.rooms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'flloor' => 'required|string|max:5|min:1',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        Room::create($request->all());

        return redirect()->route('admin.rooms.index')
            ->with('success', 'Room created successfully.');
    }

    public function show($id)
    {
        $rooms = Room::findOrFail($id);
        return view('admin.rooms.show', compact('rooms'));
    }

    public function edit($id)
    {
        $rooms = Room::findOrFail($id);
        return view('admin.rooms.edit', compact('rooms'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'floor' => 'required|string|max:45',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]);
        $rooms = Room::findOrFail($id);
        $rooms->update($request->all());
        return redirect()->route('admin.rooms.index')
            ->with('success', 'rooms updated successfully.');
    }

    public function destroy($id)
    {
        $rooms = Room::findOrFail($id);
        $rooms->delete();

        return redirect()->route('admin.rooms.index')
            ->with('success', 'rooms deleted successfully.');
    }
}
