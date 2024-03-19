<?php

namespace App\Policies;

use App\Models\User;
use App\Models\personal_work;
use Illuminate\Auth\Access\HandlesAuthorization;

class PersonalWorkPolicy
{
    use HandlesAuthorization;

    public function StudentPersonalWorkOnly(User $user)
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
