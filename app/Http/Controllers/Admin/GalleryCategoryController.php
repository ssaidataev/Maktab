<?php

namespace App\Http\Controllers;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;
class GalleryCategoryController extends Controller
{
    // Отображение списка категорий
    public function index()
    {
        $categories = GalleryCategory::all();
        return view('gallery_categories.index', compact('categories'));
    }

    // Форма создания новой категории
    public function create()
    {
        return view('gallery_categories.create');
    }

    // Сохранение новой категории
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        GalleryCategory::create($request->all());
        return redirect()->route('gallery_categories.index')->with('success', 'Категория успешно создана.');
    }

    // Форма редактирования категории
    public function edit(GalleryCategory $galleryCategory)
    {
        return view('gallery_categories.edit', compact('galleryCategory'));
    }

    // Обновление категории
    public function update(Request $request, GalleryCategory $galleryCategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $galleryCategory->update($request->all());
        return redirect()->route('gallery_categories.index')->with('success', 'Категория успешно обновлена.');
    }

    // Удаление категории
    public function destroy(GalleryCategory $galleryCategory)
    {
        $galleryCategory->delete();
        return redirect()->route('gallery_categories.index')->with('success', 'Категория успешно удалена.');
    }
}


