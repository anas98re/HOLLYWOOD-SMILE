<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'disease_name',
        'description',
        'starting_date',
        'end_date',
        'patient_id',
        'student_id',
       
    ];

}
