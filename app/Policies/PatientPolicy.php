<?php

namespace App\Policies;

use App\Models\User;
use App\Models\patient;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientPolicy
{
    use HandlesAuthorization;

    public function viewAllPatients(User $user)
    {
        switch ($user->role) {
            case 'Admin':
                return true;
            case 'Student':
                return false;
            case 'Patient':
                return false;
            case 'LapManamger':
                return false;
            default:
                return false;
        }
    }

    public function PatientOnly(User $user)
    {
        switch ($user->role) {
            case 'Admin':
                return false;
            case 'Student':
                return false;
            case 'Patient':
                return true;
            case 'LabManager':
                return false;
            default:
                return false;
        }
    }

}
