<?php

namespace App\Http\Controllers;

use App\Models\student_profile;
use App\Http\Requests\Storestudent_profileRequest;
use App\Http\Requests\Updatestudent_profileRequest;
use App\Services\StudentProfileService;
use Illuminate\Http\Request;

class StudentProfileController extends BaseController
{
    private $MyServices;
    public function __construct(StudentProfileService $MyServices)
    {
        $this->MyServices = $MyServices;
    }
    public function UpdateStudentProfile(Request $request,$id)
    {
        $Profile = $this->MyServices->UpdateStudentProfile($request,$id);
        return $this->sendResponse($Profile, 'Your Profile updated successfully');

    }

    public function ShowStudentProfile($id)
    {
        $Profile = $this->MyServices->ShowStudentProfile($id);
        return $this->sendResponse($Profile, 'This is your profile');
    }

}
