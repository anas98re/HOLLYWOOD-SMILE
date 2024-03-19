<?php

namespace App\Http\Controllers;

use App\Models\lab_manager;
use App\Http\Requests\Storelab_managerRequest;
use App\Http\Requests\Updatelab_managerRequest;

class LabManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storelab_managerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storelab_managerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lab_manager  $lab_manager
     * @return \Illuminate\Http\Response
     */
    public function show(lab_manager $lab_manager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lab_manager  $lab_manager
     * @return \Illuminate\Http\Response
     */
    public function edit(lab_manager $lab_manager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatelab_managerRequest  $request
     * @param  \App\Models\lab_manager  $lab_manager
     * @return \Illuminate\Http\Response
     */
    public function update(Updatelab_managerRequest $request, lab_manager $lab_manager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lab_manager  $lab_manager
     * @return \Illuminate\Http\Response
     */
    public function destroy(lab_manager $lab_manager)
    {
        //
    }
}
