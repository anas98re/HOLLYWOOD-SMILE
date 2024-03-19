<?php

namespace App\Policies;

use App\Models\User;
use App\Models\student;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentPolicy
{
    use HandlesAuthorization;

    public function viewAllStudents(User $user)
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

    public function patientTransfer(User $user)
    {
        switch ($user->role) {
            case 'Admin':
                return false;
            case 'Student':
                return true;
            case 'Patient':
                return false;
            case 'LapManamger':
                return false;
            default:
                return false;
        }
    }

    public function StudentOnly(User $user)
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
