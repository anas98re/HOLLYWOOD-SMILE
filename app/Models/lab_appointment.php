<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lab_appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'start_time',
        'end_time',
        'is_available',
        'is_end',
        'student_id',
        'patientName',
        'daysAvailable'
    ];

    public function Students()
    {
        return $this->belongsTo(student::class, 'student_id', 'id');
    }


}




