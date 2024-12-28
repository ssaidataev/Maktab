<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
public function index()
{
$feedbacks = Feedback::all();
return view('admin.feedbacks.index', compact('feedbacks'));
}

public function create()
{
return view('admin.feedbacks.create');
}

public function store(Request $request)
{
$request->validate([
'full_name' => 'required|string',
'text' => 'required|string',
'photo' => 'nullable|file|mimes:jpg,png,pdf,svg,gif|max:2048',
'is_active' => 'required|boolean',
]);

$feedback = new Feedback($request->all());

if ($request->hasFile('photo')) {
$photoPath = $request->file('photo')->store('feedbacks', 'public');
$feedback->photo = $photoPath;
}

$feedback->save();

return redirect()->route('admin.feedbacks.index')
->with('success', 'Feedback created successfully.');
}

public function show(Feedback $feedback)
{
return view('admin.feedbacks.show', compact('feedback'));
}

public function edit(Feedback $feedback)
{
return view('admin.feedbacks.edit', compact('feedback'));
}

public function update(Request $request, Feedback $feedback)
{
$request->validate([
'full_name' => 'required|string',
'text' => 'required|string',
'photo' => 'nullable|file|mimes:jpg,png,pdf,svg,gif|max:2048',
'is_active' => 'required|boolean',
]);


$feedback->update($request->except('photo'));

if ($request->hasFile('photo')) {
$photoPath = $request->file('photo')->store('feedbacks', 'public');
$feedback->photo = $photoPath;

$feedback->update();
}

return redirect()->route('admin.feedbacks.index')
->with('success', 'Feedback updated successfully.');
}

public function destroy(Feedback $feedback)
{
$feedback->delete();
return redirect()->route('admin.feedbacks.index')
->with('success', 'Feedback deleted successfully.');
}
}
