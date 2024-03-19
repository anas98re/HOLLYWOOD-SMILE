<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient_request extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'disease_name_id',
        'description',
        'title',
        'patient_id',
        'phoneNumber',
        'is_done'
    ];

    public function getDistinctDiseaseIds()
{
    $distinctDiseaseIds = $this->distinct('disease_name_id')->where('is_done',1)->pluck('disease_name_id');

    return $distinctDiseaseIds;
}
    public function areAllRequestsDone($disease_name_id)
    {
        $allRequestsDone = $this->whereIn('disease_name_id', $disease_name_id)
            ->where('is_done', 0)
            ->get();
        return $allRequestsDone;
    }

    public function getPatientRequestsThatRequestIsTypeAndIsDoneIsZero()
    {
        return $this->where('type', 'request')
            ->where('is_done', 0)
            ->get();
    }

    public function ThePatientwhoSubmittedTheFirstRequest($studentRequest_disease_name_id)
    {
        return $this->where('disease_name_id', $studentRequest_disease_name_id)
            ->where('is_done', 0)
            ->orderBy('id', 'desc')
            ->first();
    }


    public function diseases()
    {
        return $this->belongsTo(disease::class, 'disease_name_id', 'id');
    }
    public function Patients()
    {
        return $this->belongsTo(patient::class, 'patient_id', 'id');
    }
}
