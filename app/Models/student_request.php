<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_request extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'is_done',
        'subject',
        'priority',
        'number',
        'disease_name_id',
        'student_id',
        'specializations',
        'year'
    ];


    public function HavingBigestNumber($StudentRequestdisease_name_id)
    {
        return $this->where('is_done', 0)->where('disease_name_id', $StudentRequestdisease_name_id)->orderBy('number', 'desc')->whereNotNull('number')
            ->first();
    }
    public function getStudentRequests()
    {
        return $this->where('is_done', 0)
            ->orderByRaw('CAST(number AS UNSIGNED) ASC') //'CAST(number AS UNSIGNED) ASC' because number is String
            ->get();
    }



    public function diseases()
    {
        return $this->belongsTo(disease::class, 'disease_name_id', 'id');
    }

    public function Students()
    {
        return $this->belongsTo(student::class, 'student_id', 'id');
    }
}
