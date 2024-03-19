<?php

namespace App\Http\Controllers;

use App\Models\prescription;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use App\Services\PrescriptionService;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;


class PrescriptionController extends BaseController
{
    private $PrescriptionService;
    public function __construct(PrescriptionService $PrescriptionService)
    {
        $this->PrescriptionService = $PrescriptionService;
    }

    public function AddPrescription($id,Request $request)
    {
        $prescription=$this->PrescriptionService->AddPrescription($id,$request);
        return $this->sendResponse($prescription,'your prescription has been added successfully ');
    }
/*
    public function ShowAllPrescriptions()
    {
        $myprescriptions = $this->PrescriptionService->ShowAllPrescriptions();
        return $this->sendResponse($myprescriptions, 'All prescriptions has been  fetched successfully ');
    }
*/

    public function ShowSinglePrescription($id)

    {
        $oneprescription=$this->PrescriptionService->ShowSinglePrescription($id);
        return $this->sendResponse($oneprescription,'your prescription has been fetched successfully');
    }

    public function DeletePrescription($id)
    {
    $myprescription= $this->PrescriptionService->DeletePrescription($id);
    return $this->sendResponse($myprescription,'your prescription has been deleted successfully ');
    }

}
