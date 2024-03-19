<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequestRequest;
use App\Models\patient_request;
use App\Http\Requests\Storepatient_requestRequest;
use App\Http\Requests\Updatepatient_requestRequest;
use App\Services\PatientRequestService;
use Illuminate\Http\Request;

class PatientRequestController extends BaseController
{

    private $MyServices;
    public function __construct(PatientRequestService $MyServices)
    {
        $this->MyServices = $MyServices;
    }
    public function ConsultationRequest(Request $request)
    {
        $Consultation=$this->MyServices->ConsultationRequest($request);
        return $this->sendResponse($Consultation, 'Consultation request added successfully');
    }
}
