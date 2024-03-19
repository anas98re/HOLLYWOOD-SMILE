<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'disease_name',
        'day',
        'patient_id',
        'student_id',
        'is_end'
    ];
}
