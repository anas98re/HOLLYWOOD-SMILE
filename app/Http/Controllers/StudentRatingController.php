<?php

namespace App\Http\Controllers;

use App\Models\student_rating;
use App\Http\Requests\Storestudent_ratingRequest;
use App\Http\Requests\Updatestudent_ratingRequest;

class StudentRatingController extends Controller
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
     * @param  \App\Http\Requests\Storestudent_ratingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storestudent_ratingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student_rating  $student_rating
     * @return \Illuminate\Http\Response
     */
    public function show(student_rating $student_rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student_rating  $student_rating
     * @return \Illuminate\Http\Response
     */
    public function edit(student_rating $student_rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatestudent_ratingRequest  $request
     * @param  \App\Models\student_rating  $student_rating
     * @return \Illuminate\Http\Response
     */
    public function update(Updatestudent_ratingRequest $request, student_rating $student_rating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student_rating  $student_rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(student_rating $student_rating)
    {
        //
    }
}
