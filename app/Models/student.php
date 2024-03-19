<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'type',
        'year',
        'specializations',
        'university_card',
        'description',
        'numberOfConsultations'
    ];

    public function studentsWhoDoneMatchingWithAPatient($StudentRequest)
    {
        return $this->find($StudentRequest)->id;
    }

    public function GetUsersFromUserIdInStudentModel($ids)
    {
        return User::whereIn('id', $this->whereIn('id', $ids)->pluck('user_id'))->get();
    }

    public function MasterStudentWhoDoneMatchingWithAPatientConsulation($StudentRequest)
    {
        return User::find($StudentRequest);
    }
}
