<?php

namespace App\Policies;

use App\Models\User;
use App\Models\student_task;
use Illuminate\Auth\Access\HandlesAuthorization;

class StudentTaskPolicy
{
    use HandlesAuthorization;


    public function StudentTaskOnly(User $user)
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
