<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal_work extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'photo',
        'subject_name',
        'student_id',
    ];
}
