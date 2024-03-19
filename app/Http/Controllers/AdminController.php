<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Http\Requests\StoreadminRequest;
use App\Http\Requests\UpdateadminRequest;
use App\Services\AdminService;
use Illuminate\Http\Request;

class AdminController extends BaseController
{
    private $MyServices;
    public function __construct(AdminService $MyServices)
    {
        $this->MyServices = $MyServices;
    }
    public function getAllPatientRequests()
    {
        $PatintRequests = $this->MyServices->getAllPatientRequests();
        return $this->sendResponse($PatintRequests, 'These are all patint requests');
    }
    public function getAllStudentRequests()
    {
        $PatintRequests = $this->MyServices->getAllStudentRequests();
        return $this->sendResponse($PatintRequests, 'These are all student requests');
    }

    public function matching()
    {
        $matching=$this->MyServices->matching();
        return $this->sendResponse($matching, 'Matching process is done');
    }

    public function getAllPatientConsultations()
    {
        $PatientConsultations = $this->MyServices->getAllPatientConsultations();
        return $this->sendResponse($PatientConsultations, 'These are all patint Consultation');
    }

    public function matchingWithMasterStudent()
    {
        $matchingWithMasterStudent=$this->MyServices->matchingWithMasterStudent();
        return $this->sendResponse($matchingWithMasterStudent, 'matchingWithMasterStudent process is done');
    }

    public function deletePatient($id)
    {
        $this->MyServices->deletePatient($id);
        return $this->sendResponse('true','deleted done');
    }

    public function deleteStudent($id)
    {
        $this->MyServices->deleteStudent($id);
        return $this->sendResponse('true','deleted done');
    }
    public function addClinicalCondition(Request $request)
    {
        $this->MyServices->addClinicalCondition($request);
        return $this->sendResponse('true','added Clinical Condition done');
    }

    //statistics
    public function totalMasterStudentsStatistics()
    {
        return $this->MyServices->totalMasterStudentsStatistics();
    }

    public function totalBachelorDegreeStudentsStatistics()
    {
        return $this->MyServices->totalBachelorDegreeStudentsStatistics();
    }

    public function totalPatientsStatistics()
    {
        return $this->MyServices->totalPatientsStatistics();
    }

    public function NameOfTheMostRatedStudent()
    {
        return $this->MyServices->NameOfTheMostRatedStudent();
    }

    public function TheMostPatientWhoInteractsWithTheApplication()
    {
        return $this->MyServices->TheMostPatientWhoInteractsWithTheApplication();
    }

    public function MoreStudentMasterWhoDoingConsulting()
    {
        return $this->MyServices->MoreStudentMasterWhoDoingConsulting();
    }

    public function TheClinicalConditionThatHasMoreTreatments()
    {
        return $this->MyServices->TheClinicalConditionThatHasMoreTreatments();
    }
}
