<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calendar extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'disease_name',
        'day',
        'patient_id',
        'student_id',
        'type'
    ];

    public function Patients()
    {
        return $this->belongsTo(patient::class, 'patient_id', 'id');
    }

    public function Students()
    {
        return $this->belongsTo(student::class, 'student_id', 'id');
    }
}
