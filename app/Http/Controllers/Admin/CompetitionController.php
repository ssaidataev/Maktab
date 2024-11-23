<?php

namespace App\Http\Controllers\Admin;

use App\Models\Competition;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CompetitionController extends Controller
{
    /**
     * Отобразить список соревнований.
     *
     * @return View
     */
    public function index(): View
    {
        $competitions = Competition::all();
        return view('admin.competitions.index', compact('competitions'));
    }

    /**
     * Показать форму для создания нового соревнования.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.competitions.create');
    }

    /**
     * Сохранить новое соревнование в базе данных.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'competition_type_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'logo' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'document' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        $competition = new Competition([
            'competition_type_id' => $request->get('competition_type_id'),
            'name' => $request->get('name'),
            'logo' => $request->get('logo'),
            'description' => $request->get('description'),
            'document' => $request->get('document'),
            'is_active' => $request->get('is_active', false),
        ]);

        $competition->save();

        return redirect('/admin/competitions')->with('success', 'Соревнование создано!');
    }

    /**
     * Отобразить указанное соревнование.
     *
     * @param  Competition  $competition
     * @return View
     */
    public function show(Competition $competition): View
    {
        return view('admin.competitions.show', compact('competition'));
    }

    /**
     * Показать форму для редактирования указанного соревнования.
     *
     * @param  Competition  $competition
     * @return View
     */
    public function edit(Competition $competition): View
    {
        return view('admin.competitions.edit', compact('competition'));
    }

    /**
     * Обновить указанное соревнование в базе данных.
     *
     * @param  Request  $request
     * @param  Competition  $competition
     * @return RedirectResponse
     */
    public function update(Request $request, Competition $competition): RedirectResponse
    {
        $request->validate([
            'competition_type_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'logo' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'document' => 'nullable|string|max:255',
            'is_active' => 'boolean',
        ]);

        $competition->update([
            'competition_type_id' => $request->get('competition_type_id'),
            'name' => $request->get('name'),
            'logo' => $request->get('logo'),
            'description' => $request->get('description'),
            'document' => $request->get('document'),
            'is_active' => $request->get('is_active', false),
        ]);

        return redirect('/admin/competitions')->with('success', 'Соревнование обновлено!');
    }

    /**
     * Удалить указанное соревнование из базы данных.
     *
     * @param  Competition  $competition
     * @return RedirectResponse
     */
    public function destroy(Competition $competition): RedirectResponse
    {
        $competition->delete();

        return redirect('/admin/competitions')->with('success', 'Соревнование удалено!');
    }
}
