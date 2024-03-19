<?php

namespace App\Policies;

use App\Models\User;
use App\Models\calendar;
use Illuminate\Auth\Access\HandlesAuthorization;

class CalendarPolicy
{
    use HandlesAuthorization;

    public function StudentCalendar(User $user)
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
