<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmployeeContact;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmployeeContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $employee_contacts = EmployeeContact::latest()->get();
        return view('admin.employee-contacts.index', compact('employee_contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.employee-contacts.create');
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
            'full_name_ru' => 'required|max:255',
            'full_name_kz' => 'required|max:255',
            'full_name_en' => 'required|max:255',
            'position_ru' => 'required|max:255',
            'position_kz' => 'required|max:255',
            'position_en' => 'required|max:255',
            'phone' => 'nullable|max:50',
            'email' => 'nullable|max:50',
        ]);
        EmployeeContact::create($request->all());

        return redirect()->route('admin.employee-contacts.index')->with('success', 'Успешно создана!');
    }

    /**
     * Display the specified resource.
     *
     * @param EmployeeContact $employee_contact
     * @return Application|Factory|View
     */
    public function show(EmployeeContact $employee_contact)
    {
        return view('admin.employee-contacts.show', compact('employee_contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param EmployeeContact $employee_contact
     * @return Application|Factory|View
     */
    public function edit(EmployeeContact $employee_contact)
    {
        return view('admin.employee-contacts.edit', compact('employee_contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param EmployeeContact $employee_contact
     * @return RedirectResponse
     */
    public function update(Request $request, EmployeeContact $employee_contact)
    {
        $request->validate([
            'full_name_ru' => 'required|max:255',
            'full_name_kz' => 'required|max:255',
            'full_name_en' => 'required|max:255',
            'position_ru' => 'required|max:255',
            'position_kz' => 'required|max:255',
            'position_en' => 'required|max:255',
            'phone' => 'nullable|max:50',
            'email' => 'nullable|max:50',
        ]);


        $employee_contact->update($request->all());

        return redirect()->route('admin.employee-contacts.index')->with('success', 'Успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param EmployeeContact $employee_contact
     * @return RedirectResponse
     */
    public function destroy(EmployeeContact $employee_contact)
    {
        $employee_contact->delete();

        return redirect()->route('admin.employee-contacts.index')->with('success', 'Успешно удалена!');
    }

}
