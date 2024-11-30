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
        $request->validate([
            'half' => 'required|max:3|min:1',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',

        ]);



        time::create($request->all());



        return redirect()->route('admin.times.index')
            ->with('success', 'times created successfully.');
    }



    public function show($id)
    {
        $time = Time::findOrFail($id);
        return view('Admin.times.show', compact('time'));
    }



    public function edit($id)
    {
        $time= Time::findOrFail($id);
        return view('admin.times.edit', compact('time'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([


           // 'half' => 'required|max:3|min:1',
            //'start_time' => 'required|date_format:H:i',
            //'end_time' => 'required|date_format:H:i',

        ]);

        $time = Time::findOrFail($id);
        $time->update($request->all());


        return redirect()->route('admin.times.index')
            ->with('success', 'times updated successfully.');
    }



    public function destroy($id)
    {
        $time = Time::findOrFail($id);
        $time->delete();



        return redirect()->route('admin.times.index')
            ->with('success', 'times successfully.');
    }

}
