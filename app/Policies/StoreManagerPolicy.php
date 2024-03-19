<?php

namespace App\Policies;

use App\Models\User;
use App\Models\store_manager;
use Illuminate\Auth\Access\HandlesAuthorization;

class StoreManagerPolicy
{
    use HandlesAuthorization;
}
