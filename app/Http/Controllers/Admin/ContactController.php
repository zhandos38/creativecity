<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\ContactStoreRequest;
use App\Http\Requests\Contact\ContactUpdateRequest;
use App\Models\Contact;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ContactController extends Controller
{
    protected $path = 'public/files';

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $contacts = Contact::latest()->get();

        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ContactStoreRequest  $request
     * @return RedirectResponse
     */
    public function store(ContactStoreRequest $request)
    {
        Contact::create($request->all());

        return redirect()->route('admin.contacts.index')->with('success', 'Успешно создана!');
    }

    /**
     * Display the specified resource.
     *
     * @param Contact $contact
     * @return Application|Factory|View
     */
    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Contact $contact
     * @return Application|Factory|View
     */
    public function edit(Contact $contact)
    {
        return view('admin.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ContactUpdateRequest  $request
     * @param Contact $contact
     * @return RedirectResponse
     */
    public function update(ContactUpdateRequest $request, Contact $contact)
    {
        if($request->id == 1){
            $input = $request->all();

            if ($request->exists('content_ru')) {
                $input['content_ru'] = $request->file('content_ru')->store($this->path);
            }
            if ($request->exists('content_kz')) {
                $input['content_kz'] = $request->file('content_kz')->store($this->path);
            }
            if ($request->exists('content_en')) {
                $input['content_en'] = $request->file('content_en')->store($this->path);
            }

            $contact->update($input);
        }else{
            $contact->update($request->all());

        }

        return redirect()->route('admin.contacts.index')->with('success', 'Успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Contact $contact
     * @return RedirectResponse
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Успешно удалена!');
    }
}
