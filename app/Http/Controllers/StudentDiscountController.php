<?php

namespace App\Http\Controllers;

use App\Models\student_discount;
use App\Http\Requests\Storestudent_discountRequest;
use App\Http\Requests\Updatestudent_discountRequest;

class StudentDiscountController extends Controller
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
     * @param  \App\Http\Requests\Storestudent_discountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storestudent_discountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student_discount  $student_discount
     * @return \Illuminate\Http\Response
     */
    public function show(student_discount $student_discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student_discount  $student_discount
     * @return \Illuminate\Http\Response
     */
    public function edit(student_discount $student_discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatestudent_discountRequest  $request
     * @param  \App\Models\student_discount  $student_discount
     * @return \Illuminate\Http\Response
     */
    public function update(Updatestudent_discountRequest $request, student_discount $student_discount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student_discount  $student_discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(student_discount $student_discount)
    {
        //
    }
}
