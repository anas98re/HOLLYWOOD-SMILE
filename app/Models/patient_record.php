<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient_record extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_disease_name',
        'current_disease_name',
        'general_description',
        'patient_id',
        'student_id'
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
