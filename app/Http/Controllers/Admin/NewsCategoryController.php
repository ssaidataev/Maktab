<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MarkType;
use App\Models\NewsCategories;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $newsCategories = NewsCategories::all();
        return view('admin.news_categories.index', compact('newsCategories'));
    }

    public function create()
    {
        return view('admin.news_categories.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        NewsCategories::create($request->all());

        return redirect()->route('admin.news-category.index')
            ->with('success','News Category created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:45',
        ]);

        $newsCategories = NewsCategories::findOrFail($id);
        $newsCategories->update($request->all());

        return redirect()->route('admin.news-category.index')
            ->with('success', 'News Category updated successfully.');
    }

    public function show($id)
    {
        $newsCategories = NewsCategories::findOrFail($id);
        return view('admin.news_categories.show', compact('newsCategories'));
    }

    public function edit($id)
    {
        $newsCategories = NewsCategories::findOrFail($id);
        return view('admin.news_categories.edit', compact('newsCategories'));
    }



    public function destroy($id)
    {
        $newsCategories = NewsCategories::findOrFail($id);
        $newsCategories->delete();

        return redirect()->route('admin.news-category.index')
            ->with('success','News Category deleted successfully.');
    }

}
