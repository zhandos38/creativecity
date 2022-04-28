<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    protected $path = 'public/prices';

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $prices = Price::latest()->get();
        return view('admin.prices.index', compact('prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.prices.create');
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
            'description_ru' => 'required',
            'description_kz' => 'required',
            'description_en' => 'required',
            'file' => 'required',
        ]);
        $input = $request->all();

        $input['file'] = $request->file('file')->store($this->path);
        Price::create($input);

        return redirect()->route('admin.prices.index')->with('success', 'Успешно создана!');
    }

    /**
     * Display the specified resource.
     *
     * @param Price $price
     * @return Application|Factory|View
     */
    public function show(Price $price)
    {
        return view('admin.prices.show', compact('price'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Price $price
     * @return Application|Factory|View
     */
    public function edit(Price $price)
    {
        return view('admin.prices.edit', compact('price'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Price $price
     * @return RedirectResponse
     */
    public function update(Request $request, Price $price)
    {
        $request->validate([
            'title_ru' => 'required|max:255',
            'title_kz' => 'required|max:255',
            'title_en' => 'required|max:255',
            'description_ru' => 'required',
            'description_kz' => 'required',
            'description_en' => 'required',
        ]);

        $input = $request->all();

        if ($request->exists('file')) {
            $input['file'] = $request->file('file')->store($this->path);
        }

        $price->update($input);

        return redirect()->route('admin.prices.index')->with('success', 'Успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Price $price
     * @return RedirectResponse
     */
    public function destroy(Price $price)
    {
        $price->delete();

        return redirect()->route('admin.prices.index')->with('success', 'Успешно удалена!');
    }

}
