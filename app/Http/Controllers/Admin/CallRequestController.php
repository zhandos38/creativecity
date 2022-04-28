<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CallRequest;
use Illuminate\Http\Request;

class CallRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = CallRequest::latest()->get();
        return view('admin.call-requests.index', compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CallRequest  $callRequest
     * @return \Illuminate\Http\Response
     */
    public function show(CallRequest $callRequest)
    {
        return view('admin.call-requests.show', compact('callRequest'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CallRequest  $callRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(CallRequest $callRequest)
    {
        return view('admin.call-requests.edit', compact('callRequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CallRequest  $callRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CallRequest $callRequest)
    {
        $callRequest->update($request->all());

        return redirect()->route('admin.call-requests.index')->with('success', 'Успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CallRequest  $callRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(CallRequest $callRequest)
    {
        $callRequest->delete();

        return redirect()->route('admin.call-requests.index')->with('success', 'Успешно удалена!');
    }
}
