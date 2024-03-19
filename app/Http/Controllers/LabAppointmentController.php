<?php

namespace App\Http\Controllers;

use App\Models\lab_appointment;
use App\Http\Requests\Storelab_appointmentRequest;
use App\Http\Requests\Updatelab_appointmentRequest;
use App\Services\labManagerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Services\lab_appointmentsService;

class LabAppointmentController extends BaseController
{
    private $MyServices;
    public function __construct(labManagerService $MyServices)
    {
        $this->MyServices = $MyServices;
    }
    public function ViewAvailableAppointments()
    {
        if (auth('sanctum')->user()->role == 'LabManager'  || auth('sanctum')->user()->role == 'Student') {
            $availableAppointments  = $this->MyServices->ViewAvailableAppointments();
            return $this->sendResponse($availableAppointments, 'These are the Available Appointments');
        } else {
            return $this->sendError('you have no permision');
        }
    }

    public function AddAvailableAppointment(Request $request)
    {
        if (auth('sanctum')->user()->role == 'LabManager') {
            $availableAppointments  = $this->MyServices->AddAvailableAppointment($request);
            return $this->sendResponse($availableAppointments, 'Added Done');
        } else {
            return $this->sendError('you have no permision');
        }
    }

    public function bookAppointment(Request $request, $id)
    {
        $Appointment  = $this->MyServices->bookAppointment($request, $id);
        return $this->sendResponse($Appointment, 'Booked an appointment Done');
    }

    public function viewBookedAppointments()
    {
        if (auth('sanctum')->user()->role == 'LabManager') {
            $BookedAppointments  = $this->MyServices->viewBookedAppointments();
            return $this->sendResponse($BookedAppointments, 'These are the booked Appointments');
        } else {
            return $this->sendError('you have no permision');
        }
    }

    public function SendPhotoToStudent(Request $request, $id)
    {
        return $this->sendResponse('That photo', $this->MyServices->SendPhotoToStudent($request, $id));
    }
}
