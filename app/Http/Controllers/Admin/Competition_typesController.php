<?php



namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\Models\Competition_types;
use Illuminate\Http\Request;



class Competition_typesController extends Controller
{
    public function index()
    {
        $competition_types = Competition_types::all();
        return view('admin.competition_types.index', compact('competition_types'));
    }



    public function create()
    {
        return view('admin.competition_types.create');
    }



    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]);



        Competition_types::create($request->all());



        return redirect()->route('admin.competition_types.index')
            ->with('success', 'Competition Type created successfully.');
    }



    public function show($id)
    {
        $competition_types = Competition_types::findOrFail($id);
        return view('admin.competition_types.show', compact('competition_types'));
    }



    public function edit($id)
    {
        $competition_types = Competition_types::findOrFail($id);
        return view('admin.competition_types.edit', compact('competition_types'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([


            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'is_active' => 'required|boolean',
        ]);



        $competition_types = Competition_types::findOrFail($id);
        $competition_types->update($request->all());



        return redirect()->route('admin.competition_types.index')
            ->with('success', 'Competition Type updated successfully.');
    }



    public function destroy($id)
    {
        $competition_types = Competition_types::findOrFail($id);
        $competition_types->delete();



        return redirect()->route('admin.competition_types.index')
            ->with('success', 'Competition Type deleted successfully.');
    }
}
