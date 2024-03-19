<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disease extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'specialization',
        'year',
        'Semester',
        'Department',
        'subject',
        'clinical_condition',
        'number'
    ];
}
