<?php

namespace App\Policies;

use App\Models\User;
use App\Models\lab_manager;
use Illuminate\Auth\Access\HandlesAuthorization;

class LabManagerPolicy
{
    use HandlesAuthorization;

    public function labManagerOnly(User $user)
    {
        switch ($user->role) {
            case 'Admin':
                return false;
            case 'Student':
                return false;
            case 'Patient':
                return false;
            case 'LapManamger':
                return true;
            default:
                return false;
        }
    }

}
