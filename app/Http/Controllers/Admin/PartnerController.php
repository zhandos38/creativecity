<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    protected $path = 'public/partners';

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $partners = Partner::latest()->get();
        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.partners.create');
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
            'link' => 'required|max:255',
            'image' => 'required',
        ]);
        $input = $request->all();

        $input['image'] = $request->file('image')->store($this->path);
        Partner::create($input);

        return redirect()->route('admin.partners.index')->with('success', 'Успешно создана!');
    }

    /**
     * Display the specified resource.
     *
     * @param Partner $partner
     * @return Application|Factory|View
     */
    public function show(Partner $partner)
    {
        return view('admin.partners.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Partner $partner
     * @return Application|Factory|View
     */
    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Partner $partner
     * @return RedirectResponse
     */
    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'title_ru' => 'required|max:255',
            'title_kz' => 'required|max:255',
            'title_en' => 'required|max:255',
            'link' => 'required|max:255',
        ]);

        $input = $request->all();

        if ($request->exists('image')) {
            $input['image'] = $request->file('image')->store($this->path);
        }

        $partner->update($input);

        return redirect()->route('admin.partners.index')->with('success', 'Успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Partner $partner
     * @return RedirectResponse
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();

        return redirect()->route('admin.partners.index')->with('success', 'Успешно удалена!');
    }

}
