<?php

namespace App\Policies;

use App\Models\User;
use App\Models\product;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;


    public function StoreManagerOnly(User $user)
    {
        switch ($user->role) {
            case 'Admin':
                return false;
            case 'Student':
                return false;
            case 'Patient':
                return false;
            case 'LabManager':
                return false;
            default:
                return true;
        }
    }
}
