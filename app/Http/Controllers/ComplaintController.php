<?php

namespace App\Http\Controllers;

use App\Models\complaint;
use App\Http\Requests\StorecomplaintRequest;
use App\Http\Requests\UpdatecomplaintRequest;

class ComplaintController extends Controller
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
     * @param  \App\Http\Requests\StorecomplaintRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecomplaintRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function show(complaint $complaint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function edit(complaint $complaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecomplaintRequest  $request
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecomplaintRequest $request, complaint $complaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function destroy(complaint $complaint)
    {
        //
    }
}
