<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    protected $path = 'public/banners';

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.banners.create');
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
            'title_ru' => 'nullable|max:255',
            'title_kz' => 'nullable|max:255',
            'title_en' => 'nullable|max:255',
            'description_ru' => 'nullable|max:1000',
            'description_kz' => 'nullable|max:1000',
            'description_en' => 'nullable|max:1000',
            'button_text_ru' => 'nullable|max:50',
            'button_text_kz' => 'nullable|max:50',
            'button_text_en' => 'nullable|max:50',
            'link' => 'nullable|max:500',
            'image' => 'required',
            'bg_image' => 'required'
        ]);
        $input = $request->all();

        $input['image'] = $request->file('image')->store($this->path);
        $input['bg_image'] = $request->file('bg_image')->store($this->path);
        Banner::create($input);

        return redirect()->route('admin.banners.index')->with('success', 'Успешно создана!');
    }

    /**
     * Display the specified resource.
     *
     * @param Banner $banner
     * @return Application|Factory|View
     */
    public function show(Banner $banner)
    {
        return view('admin.banners.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Banner $banner
     * @return Application|Factory|View
     */
    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Banner $banner
     * @return RedirectResponse
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title_ru' => 'nullable|max:255',
            'title_kz' => 'nullable|max:255',
            'title_en' => 'nullable|max:255',
            'description_ru' => 'nullable|max:1000',
            'description_kz' => 'nullable|max:1000',
            'description_en' => 'nullable|max:1000',
            'button_text_ru' => 'nullable|max:50',
            'button_text_kz' => 'nullable|max:50',
            'button_text_en' => 'nullable|max:50',
            'link' => 'nullable|max:500',
        ]);

        $input = $request->all();

        if ($request->exists('image')) {
            $input['image'] = $request->file('image')->store($this->path);
        }
        if ($request->exists('bg_image')) {
            $input['bg_image'] = $request->file('bg_image')->store($this->path);
        }
        $banner->update($input);

        return redirect()->route('admin.banners.index')->with('success', 'Успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Banner $banner
     * @return RedirectResponse
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        return redirect()->route('admin.banners.index')->with('success', 'Успешно удалена!');
    }

}
