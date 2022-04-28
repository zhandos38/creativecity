<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Point;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PointController extends Controller
{
    protected $path = 'public/points';

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $points = Point::all();
        return view('admin.points.index', compact('points'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.points.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_ru' => 'required|max:255',
            'title_kz' => 'required|max:255',
            'title_en' => 'required|max:255',
            'description_ru' => 'nullable|max:1000',
            'description_kz' => 'nullable|max:1000',
            'description_en' => 'nullable|max:1000',
            'lang' => 'required|max:255',
            'lat' => 'required|max:255',
            'number' => 'nullable|integer',
            'image' => 'required',
            'direction' => 'required|max:255',
            'format' => 'required|integer',
            'width' => 'required|string',
            'height' => 'required|string',
        ]);
        $input = $request->all();

        $input['image'] = $request->file('image')->store($this->path);
        Point::create($input);

        return redirect()->route('admin.points.index')->with('success', 'Успешно создана!');
    }

    /**
     * Display the specified resource.
     *
     * @param Point $point
     * @return Application|Factory|View
     */
    public function show(Point $point)
    {
        return view('admin.points.show', compact('point'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Point $point
     * @return Application|Factory|View
     */
    public function edit(Point $point)
    {
        return view('admin.points.edit', compact('point'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Point $point
     * @return RedirectResponse
     */
    public function update(Request $request, Point $point)
    {
        $request->validate([
            'title_ru' => 'required|max:255',
            'title_kz' => 'required|max:255',
            'title_en' => 'required|max:255',
            'description_ru' => 'nullable|max:1000',
            'description_kz' => 'nullable|max:1000',
            'description_en' => 'nullable|max:1000',
            'lang' => 'required|max:255',
            'lat' => 'required|max:255',
            'number' => 'nullable|integer',
            'direction' => 'required|max:255',
            'format' => 'required|integer',
            'width' => 'required|string',
            'height' => 'required|string',
        ]);

        $input = $request->all();

        if ($request->exists('image')) {
            $input['image'] = $request->file('image')->store($this->path);
        }

        $point->update($input);

        return redirect()->route('admin.points.index')->with('success', 'Успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Point $point
     * @return RedirectResponse
     */
    public function destroy(Point $point)
    {
        $point->delete();

        return redirect()->route('admin.points.index')->with('success', 'Успешно удалена!');
    }

}
