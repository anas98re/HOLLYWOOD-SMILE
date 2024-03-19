<?php

namespace App\Http\Controllers;

use App\Models\student_request;
use App\Http\Requests\Storestudent_requestRequest;
use App\Http\Requests\Updatestudent_requestRequest;

class StudentRequestController extends Controller
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
     * @param  \App\Http\Requests\Storestudent_requestRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storestudent_requestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student_request  $student_request
     * @return \Illuminate\Http\Response
     */
    public function show(student_request $student_request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student_request  $student_request
     * @return \Illuminate\Http\Response
     */
    public function edit(student_request $student_request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatestudent_requestRequest  $request
     * @param  \App\Models\student_request  $student_request
     * @return \Illuminate\Http\Response
     */
    public function update(Updatestudent_requestRequest $request, student_request $student_request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student_request  $student_request
     * @return \Illuminate\Http\Response
     */
    public function destroy(student_request $student_request)
    {
        //
    }
}
