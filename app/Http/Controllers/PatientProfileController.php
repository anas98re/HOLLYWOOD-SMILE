<?php

namespace App\Http\Controllers;

use App\Models\patient_profile;
use App\Http\Requests\Storepatient_profileRequest;
use App\Http\Requests\Updatepatient_profileRequest;
use App\Services\PatientProfileService;
use Illuminate\Http\Request;

class PatientProfileController extends BaseController
{
    private $MyServices;
    public function __construct(PatientProfileService $MyServices)
    {
        $this->MyServices = $MyServices;
    }

    public function UpdatePatientProfile(Request $request,$id)
    {
        $Profile = $this->MyServices->UpdatePatientProfile($request,$id);
        return $this->sendResponse($Profile, 'Your Profile updated successfully');

    }

    public function ShowPatientProfile($id)
    {
        $Profile = $this->MyServices->ShowPatientProfile($id);
        return $this->sendResponse($Profile, 'This is your profile');
    }

}
