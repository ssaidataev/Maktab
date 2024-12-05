<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\CompetitionType;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index()
    {
        $competitions = Competition::with('competitionType')->get();
        return view('admin.competitions.index', compact('competitions'));
    }

    public function create()
    {
        $competitionTypes = CompetitionType::all();
        return view('admin.competitions.create', compact('competitionTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'competition_type_id' => 'required',
            'name' => 'required|min:3',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'nullable|min:3',
            'document' => 'nullable|mimes:pdf,doc,docx',
            'is_active' => 'nullable|boolean',
        ]);

        $competition = new Competition($request->all());

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $competition->logo = $logoPath;
        }

        if ($request->hasFile('document')) {
            $documentPath = $request->file('document')->store('documents', 'public');
            $competition->document = $documentPath;
        }

        $competition->save();

        return redirect()->route('admin.competitions.index')
            ->with('success', 'Competition created successfully.');
    }

    public function show($id)
    {
        $competition = Competition::findOrFail($id);
        return view('admin.competitions.show', compact('competition'));
    }

    public function edit($id)
    {
        $competition = Competition::findOrFail($id);
        $competitionTypes = CompetitionType::all();
        return view('admin.competitions.edit', compact('competition', 'competitionTypes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'competition_type_id' => 'required',
            'name' => 'required|min:3',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'nullable|min:3',
            'document' => 'nullable|mimes:pdf,doc,docx',
            'is_active' => 'nullable|boolean',
        ]);

        $competition = Competition::findOrFail($id);
        $competition->fill($request->all());

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $competition->logo = $logoPath;
        }

        if ($request->hasFile('document')) {
            $documentPath = $request->file('document')->store('documents', 'public');
            $competition->document = $documentPath;
        }

        $competition->save();

        return redirect()->route('admin.competitions.index')
            ->with('success', 'Competition updated successfully.');
    }


    public function destroy($id)
    {
        $competition = Competition::findOrFail($id);
        $competition->delete();

        return redirect()->route('admin.competitions.index')
            ->with('success', 'Competition deleted successfully.');
    }
}
