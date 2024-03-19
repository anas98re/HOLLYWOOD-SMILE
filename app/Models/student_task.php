<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_name',
        'description',
        'number',
        'starting_date',
        'end_date',
        'task_status',
        'student_id'
    ];

}
