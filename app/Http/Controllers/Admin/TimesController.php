<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Time;
use Illuminate\Http\Request;
use Illuminate\Support\Timebox;


class TimesController extends Controller
{
    public function index()
    {
        $times = Time::all();
        return view('admin.times.index', compact('times'));
    }



    public function create()
    {
        return view('Admin.times.create');
    }



    public function store(Request $request)
    {
//        $request->validate([
//            'half' => 'required|max:2|min:1',
//            'start_time' => 'required|date_format:H:i',
//            'end_time' => 'required|date_format:H:i',
//            'created_at' => 'required|date',
//            'updated_at' => 'required|date',
//        ]);



        time::create($request->all());



        return redirect()->route('admin.times.index')
            ->with('success', 'times created successfully.');
    }



    public function show($id)
    {
        $times = Time::findOrFail($id);
        return view('Admin.times.show', compact('times'));
    }



    public function edit($id)
    {
        $times = Time::findOrFail($id);
        return view('Admin.times.edit', compact('times'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([


            'half' => 'required|max:2|min:1',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'created_at' => 'required|date',
            'updated_at' => 'required|date',
        ]);



        $times = Time::findOrFail($id);
        $times->update($request->all());



        return redirect()->route('admin.times.index')
            ->with('success', 'times updated successfully.');
    }



    public function destroy($id)
    {
        $times = Time::findOrFail($id);
        $times->delete();



        return redirect()->route('admin.times.index')
            ->with('success', 'times successfully.');
    }

}
