<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use App\Services\StudentService;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class StudentController extends BaseController
{
    private $MyServices;
    public function __construct(StudentService $MyServices)
    {
        $this->MyServices = $MyServices;
    }

    public function getAllStudents()
    {
        $students = $this->MyServices->getAllStudents();
        return $this->sendResponse($students, 'All student data has been successfully fetched');
    }

    public function patientTransfer(Request $request, $id)
    {
        $patientTransfer = $this->MyServices->patientTransfer($request, $id);
        return $this->sendResponse($patientTransfer, 'patient Transfer successfully');
    }

    public function mypatients()
    {
        $mypatients = $this->MyServices->mypatients();
        return $this->sendResponse($mypatients, 'These are your patients');
    }

    public function myConsultations()
    {
        $mypatients = $this->MyServices->myConsultations();
        return $this->sendResponse($mypatients, 'These are your Consultations');
    }

    public function addCalender($id, Request $request)
    {
        $calender = $this->MyServices->addCalender($id, $request);
        return $this->sendResponse($calender, 'added calender successfully');
    }

    public function ShowAllCalendars()
    {
        $calenders = $this->MyServices->ShowAllCalendars();
        return $this->sendResponse($calenders, 'These are your calenders');
    }
    public function getClinicalConditionsByDepartment($department)
    {
        $diseases = $this->MyServices->getClinicalConditionsByDepartment($department);
        return $this->sendResponse($diseases, 'these all Clinical Conditions By department');
    }

    public function ShowSingleCalendar($id)
    {
        $onecalendar = $this->MyServices->ShowSingleCalendar($id);
        return  $this->sendResponse($onecalendar, 'These are your calendar details');
    }
    public function DeleteFromCalendar($id)
    {
        $mycalendar = $this->MyServices->DeleteFromCalendar($id);
        return $this->sendResponse($mycalendar, 'your calendar has been deleted successfully ');
    }
    public function CreatePatientRecord(Request $request, $id)
    {
        $myPatientRecord = $this->MyServices->CreatePatientRecord($request, $id);
        return $this->sendResponse($myPatientRecord, 'added your patient record successfully');
    }
    public function EditPatientRecord(Request $request, $id)
    {
        $myPatientRecord_editing = $this->MyServices->EditPatientRecord($request, $id);
        return $this->sendResponse($myPatientRecord_editing, 'editing your patient record successfully');
    }

    public function ShowPatientRecord($id)
    {
        $record = $this->MyServices->ShowPatientRecord($id);
        return $this->sendResponse($record, 'this is your patient record');
    }

    public function MakeARequest(Request $request)
    {
        $request = $this->MyServices->MakeARequest($request);
        return $this->sendResponse($request, 'your request has been added');
    }

    public function CancelRequest($id)
    {
        $request = $this->MyServices->CancelRequest($id);
        return $this->sendResponse($request, 'your request has been deleted');
    }

    public function ViewMyRequests()
    {
        $request = $this->MyServices->ViewMyRequests();
        return $this->sendResponse($request, 'these are your requests');
    }

    public function ShowClinicalConidition($request1,$request2)
    {
        $ClinicalConidition = $this->MyServices->ShowClinicalConidition($request1,$request2);
        return $this->sendResponse($ClinicalConidition, 'this are ClinicalConiditions');
    }
}
