<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient_profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'gender',
        'patient_id',
        'phone',
        'Region',
        'photo',
        'description'
    ];

    public function Patients()
    {
        return $this->belongsTo(patient::class, 'patient_id', 'id');
    }
}
