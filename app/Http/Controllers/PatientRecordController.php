<?php

namespace App\Http\Controllers;

use App\Models\patient_record;
use App\Http\Requests\Storepatient_recordRequest;
use App\Http\Requests\Updatepatient_recordRequest;
use App\Services\PatientRecordService;

class PatientRecordController extends BaseController
{

    private $MyServices;
    public function __construct(PatientRecordService $MyServices)
    {
        $this->MyServices = $MyServices;
    }

    public function ShowRecord($id)
    {
        $Record=$this->MyServices->ShowRecord($id);
        return $this->sendResponse($Record, 'This is your Record');
    }
}
