<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsCategory;

class NewsCategoriesController extends Controller
{
    public function index()
    {
        $news_categories = NewsCategory::all();
        return view('admin.news_categories.index', compact('news_categories'));
    }

    public function create()
    {
        return view('admin.news_categories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:news_categories|max:255',
        ]);

        NewsCategory::create($validatedData);
        return redirect()->route('admin.news_categories.index');
    }

    public function show(NewsCategory $news_categories)
    {
        return view('admin.news_categories.show', compact('news_categories'));
    }

    public function edit(NewsCategory $news_categories)
    {
        return view('admin.news_categories.edit', compact('news_categories'));
    }

    public function update(Request $request, NewsCategory $news_categories)
    {
        $news_categories->update($request->all());
        return redirect()->route('admin.news_categories.index');
    }

    public function destroy(NewsCategory $news_categories)
    {
        $news_categories->delete();
        return redirect()->route('admin.news_categories.index');
}
}
