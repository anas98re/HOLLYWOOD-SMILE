<?php

namespace App\Policies;

use App\Models\User;
use App\Models\patient_record;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientRecordPolicy
{
    use HandlesAuthorization;

    public function StudentPatientRecord(User $user)
    {
        switch ($user->role) {
            case 'Admin':
                return false;
            case 'Student':
                return true;
            case 'Patient':
                return false;
            case 'LabManager':
                return false;
            default:
                return false;
        }
    }
}
