<?php

namespace App\Http\Controllers\Admin;

use App\Models\CompetitionType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CompetitionTypeController extends Controller
{
    /**
     * Отобразить список типов соревнований.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $competitionTypes = CompetitionType::all();
        return response()->json($competitionTypes);
    }

    /**
     * Показать форму для создания нового типа соревнования.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.competition_types.create');
    }

    /**
     * Сохранить новый тип соревнования в базе данных.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'is_active' => 'boolean',
        ]);

        $competitionType = new CompetitionType([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'is_active' => $request->get('is_active', true),
        ]);

        $competitionType->save();

        return redirect('/admin/competition_types')->with('success', 'Тип соревнования создан!');
    }

    /**
     * Отобразить указанный тип соревнования.
     *
     * @param  CompetitionType  $competitionType
     * @return JsonResponse
     */
    public function show(CompetitionType $competitionType): JsonResponse
    {
        return response()->json($competitionType);
    }

    /**
     * Показать форму для редактирования указанного типа соревнования.
     *
     * @param  CompetitionType  $competitionType
     * @return View
     */
    public function edit(CompetitionType $competitionType): View
    {
        return view('admin.competition_types.edit', compact('competitionType'));
    }

    /**
     * Обновить указанный тип соревнования в базе данных.
     *
     * @param  Request  $request
     * @param  CompetitionType  $competitionType
     * @return RedirectResponse
     */
    public function update(Request $request, CompetitionType $competitionType): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:45',
            'description' => 'required|string',
            'is_active' => 'boolean',
        ]);

        $competitionType->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'is_active' => $request->get('is_active', true),
        ]);

        return redirect('/admin/competition_types')->with('success', 'Тип соревнования обновлен!');
    }

    /**
     * Удалить указанный тип соревнования из базы данных.
     *
     * @param  CompetitionType  $competitionType
     * @return RedirectResponse
     */
    public function destroy(CompetitionType $competitionType): RedirectResponse
    {
        $competitionType->delete();

        return redirect('/admin/competition_types')->with('success', 'Тип соревнования удален!');
    }
}
