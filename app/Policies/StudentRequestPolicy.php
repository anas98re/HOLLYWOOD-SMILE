<?php

namespace App\Policies;

use App\Models\User;
use App\Models\student_request;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentRequestPolicy
{
    use HandlesAuthorization;

    public function StudentRequest(User $user)
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
