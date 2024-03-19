<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'patient_id',
        'student_id'
    ];
}
