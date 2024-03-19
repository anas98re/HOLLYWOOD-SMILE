<?php

namespace App\Http\Controllers;

use App\Models\patient;
use App\Services\PatientService;
use Illuminate\Http\Request;

class PatientController extends BaseController
{
    private $MyServices;
    public function __construct(PatientService $MyServices)
    {
        $this->MyServices = $MyServices;
    }

    public function getAllPatients()
    {
        $patients = $this->MyServices->getAllPatients();
        return $this->sendResponse($patients, 'All patients data has been successfully fetched');
    }

    public function cancelAppointment($id)
    {
        return $this->MyServices->cancelAppointment($id);
    }

    public function myAppointment()
    {
        return $this->MyServices->myAppointment();
    }

    public function addRating(Request $request, $id)
    {
        return $this->MyServices->addRating($request, $id);
    }

    public function myPrescriptions()
    {
        $myPrescription = $this->MyServices->myPrescriptions();
        return $this->sendResponse($myPrescription, 'these are All your Prescriptions');
    }

    public function myOnePrescription($id)
    {
        $myOnePrescription = $this->MyServices->myOnePrescription($id);
        return $this->sendResponse($myOnePrescription, 'this is your Prescriptions');
    }

    public function FindOutMyStudentID()
    {
        $StudentID = $this->MyServices->FindOutMyStudentID();
        return $this->sendResponse($StudentID, 'this is the Student Id');
    }
}
