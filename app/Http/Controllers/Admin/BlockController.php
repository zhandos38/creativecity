<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Block;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $blocks = Block::latest()->get();
        return view('admin.blocks.index', compact('blocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.blocks.create');
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
        ]);
        Block::create($request->all());

        return redirect()->route('admin.blocks.index')->with('success', 'Успешно создана!');
    }

    /**
     * Display the specified resource.
     *
     * @param Block $block
     * @return Application|Factory|View
     */
    public function show(Block $block)
    {
        return view('admin.blocks.show', compact('block'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Block $block
     * @return Application|Factory|View
     */
    public function edit(Block $block)
    {
        return view('admin.blocks.edit', compact('block'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Block $block
     * @return RedirectResponse
     */
    public function update(Request $request, Block $block)
    {
        $request->validate([
            'title_ru' => 'required|max:255',
            'title_kz' => 'required|max:255',
            'title_en' => 'required|max:255',
            'description_ru' => 'nullable|max:1000',
            'description_kz' => 'nullable|max:1000',
            'description_en' => 'nullable|max:1000',
        ]);
        $block->update($request->all());

        return redirect()->route('admin.blocks.index')->with('success', 'Успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Block $block
     * @return RedirectResponse
     */
    public function destroy(Block $block)
    {
        $block->delete();

        return redirect()->route('admin.blocks.index')->with('success', 'Успешно удалена!');
    }

}
