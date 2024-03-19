<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_discount extends Model
{
    use HasFactory;

    protected $fillable = [
        'starting_date',
        'end_date',
        'student_id ',
        'value'
    ];
}
