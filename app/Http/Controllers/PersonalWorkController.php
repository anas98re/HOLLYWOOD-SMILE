<?php

namespace App\Http\Controllers;
use App\Services\StudentPersonalWorksService;
use App\Models\personal_work;
use App\Http\Requests\Storepersonal_workRequest;
use App\Http\Requests\Updatepersonal_workRequest;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class PersonalWorkController extends BaseController
{
    private $MyWorkService;

    public function __construct(StudentPersonalWorksService $MyWorkService)
    {
        $this->MyWorkService = $MyWorkService;
    }
    public function AddToMyPersonalWorks(Request $request)
    {
        $myPersonalWorks=$this->MyWorkService->AddToMyPersonalWorks($request);
        return $this->sendResponse($myPersonalWorks, 'added your peronal works successfully');

    }

    public function DeleteFromMyWorks($id)
    {
        $MyWorks=$this->MyWorkService->DeleteFromMyWorks($id);
        return $this->sendResponse($MyWorks,'your personal works deleted successfully');
    }

    public function ShowMyWorks()
    {
        $my_Works=$this->MyWorkService->ShowMyWorks();
        return $this->sendResponse($my_Works,'these are your personal works');
    }

    public function SearchForMyWorks($request)
    {
        $works=$this->MyWorkService->SearchForMyWorks($request);
        return $this->sendResponse($works,'these are your works');
    }

}
