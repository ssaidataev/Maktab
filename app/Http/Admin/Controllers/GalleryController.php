<?php

namespace App\Http\Admin\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.galleries.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = GalleryCategory::all();  // Получаем все категории
        return view('galleries.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gallery_category_id' =>'required|integer',
            'title' => 'required|string|max:45',
            'description' => 'nullable|string',
            'image' => 'nullable|string|max:45',
        ]);

        Gallery::create($request->all());
        return redirect()->route('galleries.index')->with('success','Gallery created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'gallery_category_id' => 'required|integer',
            'title' => 'required|string|max:45',
            'description' => 'nullable|string',
            'image' => 'nullable|string|max:45',
        ]);

        $gallery->update($request->all());
        return redirect()->route('galleries.index')->with('success', 'Gallery updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('galleries.index')->with('success', 'Gallery deleted successfully.');
    }
}
