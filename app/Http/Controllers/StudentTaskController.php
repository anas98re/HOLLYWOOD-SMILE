<?php

namespace App\Http\Controllers;

use App\Models\student_task;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use App\Services\StudentTaskService;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class StudentTaskController extends BaseController
{
    private $MytaskService;
    public function __construct(StudentTaskService $MytaskService)
    {
        $this->MytaskService = $MytaskService;
    }

    public function showalltasks()
    {
        $studenttask = $this->MytaskService->showalltasks();
        return $this->sendResponse($studenttask, 'All tasks has been  fetched successfully ');
    }

    public function AddTask(Request $request)
    {
    $studenttask= $this->MytaskService->AddTask($request);
    return $this->sendResponse($studenttask,'your task has been added successfully ');
    }

    public function DeleteTask($id)
    {
    $studenttask= $this->MytaskService->DeleteTask($id);
    return $this->sendResponse($studenttask,'your task has been deleted successfully ');
    }

    public function UpdateTask(Request $request,$id)
    {
        $task=$this->MytaskService->UpdateTask($request,$id);
        return $this->sendResponse($task,'your task has been updated successfully');
    }

    public function ShowSingleTask($id)

    {
        $onetask=$this->MytaskService->ShowSingleTask($id);
        return $this->sendResponse($onetask,'your task has been fetched successfully');
    }
    public function FinishTask(Request $request,$id)
    {
        $studenttask=$this->MytaskService->FinishTask($request,$id);
        return $this->sendResponse($studenttask,'your task has been finished successfully');
    }
}

