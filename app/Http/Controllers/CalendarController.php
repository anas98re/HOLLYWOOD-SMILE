<?php

namespace App\Http\Controllers;

use App\Models\calendar;
use App\Http\Requests\StorecalendarRequest;
use App\Http\Requests\UpdatecalendarRequest;

class CalendarController extends Controller
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
     * @param  \App\Http\Requests\StorecalendarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecalendarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function show(calendar $calendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function edit(calendar $calendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecalendarRequest  $request
     * @param  \App\Models\calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecalendarRequest $request, calendar $calendar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\calendar  $calendar
     * @return \Illuminate\Http\Response
     */
    public function destroy(calendar $calendar)
    {
        //
    }
}
