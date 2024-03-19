<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'Region',
        'description',
        'rating',
        'photo',
        'student_id'
    ];

    public function Students()
    {
        return $this->belongsTo(student::class,'student_id','id');
    }

}
