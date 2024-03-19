<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\LabAppointmentController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PatientProfileController;
use App\Http\Controllers\PatientRecordController;
use App\Http\Controllers\PatientRequestController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentTaskController;
use App\Http\Controllers\StudentProfileController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\PersonalWorkController;
use App\Http\Controllers\ProductController;
use App\Models\patient;
use App\Models\student;
use App\Models\patient_record;
use App\Models\student_task;
use App\Models\personal_work;
use App\Models\calendar;
use App\Models\lab_appointment;
use App\Models\prescription;
use App\Models\product;
use App\Models\store_manager;
use App\Models\student_request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [RegisterController::class, 'signin']);
Route::post('register', [RegisterController::class, 'signup']);

Route::post('Patientregister', [RegisterController::class, 'PatientSignup']);
Route::post('Studentregister', [RegisterController::class, 'StudentSignup']);
Route::post('addAllDisease', [DiseaseController::class, 'addAllDisease']);


Route::middleware('auth:sanctum')->group(function () {
    //logout
    Route::post('/logout', [RegisterController::class, 'logout']);

    Route::post('/refresh', [RegisterController::class, 'refresh']);

    //Students
    Route::get('getAllStudents', [StudentController::class, 'getAllStudents'])->can('viewAllStudents', student::class);
    Route::post('patientTransfer/{id}', [StudentController::class, 'patientTransfer'])->can('patientTransfer', student::class);
    Route::post('UpdateStudentProfile/{id}', [StudentProfileController::class, 'UpdateStudentProfile'])->can('StudentOnly', student::class);
    Route::get('ShowStudentProfile/{id}', [StudentProfileController::class, 'ShowStudentProfile'])->can('StudentOnly', student::class);
    Route::get('mypatients', [StudentController::class, 'mypatients'])->can('StudentOnly', student::class);

    Route::get('getClinicalConditionsByDepartment/{department}', [StudentController::class, 'getClinicalConditionsByDepartment'])->can('StudentOnly', student::class);
    Route::get('myConsultations', [StudentController::class, 'myConsultations'])->can('StudentOnly', student::class);

    //student calendar
    Route::post('addCalender/{id}', [StudentController::class, 'addCalender'])->can('StudentOnly', student::class);
    Route::get('ShowAllCalendars', [StudentController::class, 'ShowAllCalendars'])->can('StudentOnly', student::class);
    Route::get('ShowSingleCalendar/{id}', [StudentController::class, 'ShowSingleCalendar'])->can('StudentOnly', student::class);
    Route::delete('DeleteFromCalendar/{id}', [StudentController::class, 'DeleteFromCalendar'])->can('StudentOnly', student::class);
    Route::get('SearchInCalendar/{request}', [StudentController::class, 'SearchInCalendar'])->can('StudentOnly', student::class);

    //Student/Prescription
    Route::post('AddPrescription/{id}', [PrescriptionController::class, 'AddPrescription'])->can('StudentOnly', student::class);
    Route::get('ShowSinglePrescription/{id}', [PrescriptionController::class, 'ShowSinglePrescription'])->can('StudentOnly', student::class);
    // Route::get('ShowAllPrescriptions', [PrescriptionController::class, 'ShowAllPrescriptions'])->can('StudentPrescription',prescription::class);
    Route::delete('DeletePrescription/{id}', [PrescriptionController::class, 'DeletePrescription'])->can('StudentOnly', student::class);

    //student/task
    Route::get('showalltasks', [StudentTaskController::class, 'showalltasks'])->can('StudentOnly', student::class);
    Route::post('AddTask', [StudentTaskController::class, 'AddTask'])->can('StudentOnly', student::class);
    Route::delete('DeleteTask/{id}', [StudentTaskController::class, 'DeleteTask']);
    Route::post('UpdateTask/{id}', [StudentTaskController::class, 'UpdateTask'])->can('StudentOnly', student::class);
    Route::get('ShowSingleTask/{id}', [StudentTaskController::class, 'ShowSingleTask'])->can('StudentTaskOnly', student_task::class);
    Route::post('FinishTask/{id}', [StudentTaskController::class, 'FinishTask'])->can('StudentTaskOnly', student_task::class);


    //Student//personal works
    Route::post('AddToMyPersonalWorks', [PersonalWorkController::class, 'AddToMyPersonalWorks'])->can('StudentOnly', student::class);
    Route::get('ShowMyWorks', [PersonalWorkController::class, 'ShowMyWorks'])->can('StudentOnly', student::class);
    Route::delete('DeleteFromMyWorks/{id}', [PersonalWorkController::class, 'DeleteFromMyWorks'])->can('StudentOnly', student::class);
    Route::get('SearchForMyWorks/{request}', [PersonalWorkController::class, 'SearchForMyWorks'])->can('StudentOnly', student::class);

    // Route::post('UploadImage', [PersonalWorkController::class, 'UploadImage']);

    //Select Api
    Route::get('ShowClinicalConidition/{request1}/{request2}', [StudentController::class, 'ShowClinicalConidition'])->can('StudentOnly', student::class);

    //create Request
    Route::post('MakeARequest', [StudentController::class, 'MakeARequest'])->can('StudentOnly', student::class);
    Route::delete('CancelRequest/{id}', [StudentController::class, 'CancelRequest'])->can('StudentOnly', student::class);
    Route::get('ViewMyRequests', [StudentController::class, 'ViewMyRequests'])->can('StudentOnly', student::class);
    //
    //student/lab
    Route::post('BookRoleInLab', [LabAppointmentController::class, 'BookRoleInLab'])->can('StudentOnly', student::class);


    //student/patient Record
    Route::post('CreatePatientRecord/{id}', [StudentController::class, 'CreatePatientRecord'])->can('StudentOnly', student::class);
    Route::post('EditPatientRecord/{id}', [StudentController::class, 'EditPatientRecord'])->can('StudentOnly', student::class);
    Route::get('ShowPatientRecord/{id}', [StudentController::class, 'ShowPatientRecord'])->can('StudentOnly', student::class);

    //Patiens
    Route::get('getAllPatients', [PatientController::class, 'getAllPatients'])->can('viewAllPatients', patient::class);
    Route::post('ConsultationRequest', [PatientRequestController::class, 'ConsultationRequest'])->can('PatientOnly', patient::class);
    Route::post('UpdatePatientProfile/{id}', [PatientProfileController::class, 'UpdatePatientProfile'])->can('PatientOnly', patient::class);
    Route::get('ShowPatientProfile/{id}', [PatientProfileController::class, 'ShowPatientProfile'])->can('PatientOnly', patient::class);
    Route::get('ShowRecord/{id}', [PatientRecordController::class, 'ShowRecord'])->can('PatientOnly', patient::class);
    Route::delete('cancelAppointment/{id}', [PatientController::class, 'cancelAppointment'])->can('PatientOnly', patient::class);
    Route::get('myAppointment', [PatientController::class, 'myAppointment'])->can('PatientOnly', patient::class);
    Route::post('addRating/{id}', [PatientController::class, 'addRating'])->can('PatientOnly', patient::class);
    Route::get('myPrescriptions', [PatientController::class, 'myPrescriptions'])->can('PatientOnly', patient::class);
    Route::get('myOnePrescription/{id}', [PatientController::class, 'myOnePrescription'])->can('PatientOnly', patient::class);

    //Admin
    Route::get('getAllPatientRequests', [AdminController::class, 'getAllPatientRequests']);
    Route::post('matching', [AdminController::class, 'matching']);
    Route::get('getAllPatientConsultations', [AdminController::class, 'getAllPatientConsultations']);
    Route::post('matchingWithMasterStudent', [AdminController::class, 'matchingWithMasterStudent']);
    Route::delete('deletePatient/{id}', [AdminController::class, 'deletePatient']);
    Route::delete('deleteStudent/{id}', [AdminController::class, 'deleteStudent']);
    Route::get('getAllClinicalCondetionsInfo', [DiseaseController::class, 'getAllClinicalCondetionsInfo']);
    Route::get('getClinicalCondetionsInfoByDepartment/{department}', [DiseaseController::class, 'getClinicalCondetionsInfoByDepartment']);
    Route::post('addClinicalCondition', [AdminController::class, 'addClinicalCondition']);
    Route::get('getAllStudentRequests', [AdminController::class, 'getAllStudentRequests']);


    //StoreManager
    Route::get('allProducts', [ProductController::class, 'allProducts']);
    Route::post('addProduct', [ProductController::class, 'addProduct'])->can('StoreManagerOnly', product::class);
    Route::post('updateProduct/{id}', [ProductController::class, 'updateProduct'])->can('StoreManagerOnly', product::class);
    Route::delete('deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->can('StoreManagerOnly', product::class);
    Route::get('getAllOrders', [ProductController::class, 'getAllOrders'])->can('StoreManagerOnly', product::class);
    Route::get('showOrder/{id}', [ProductController::class, 'showOrder'])->can('StoreManagerOnly', product::class);
    Route::delete('deleteOrder/{id}', [ProductController::class, 'deleteOrder'])->can('StoreManagerOnly', product::class);
    Route::post('addOrder', [ProductController::class, 'addOrder']);
    Route::get('SearchForProducts/{request}', [ProductController::class, 'SearchForProducts']);

    //Notifications
    Route::post('sendMessage', [NotificationController::class, 'sendMessage']);
    Route::get('getMessages/{id}/{id2}', [NotificationController::class, 'getMessages']);
    Route::post('storeFcmToken', [NotificationController::class, 'storeFcmToken']);
    Route::get('getNotifications', [NotificationController::class, 'getNotifications']);
    Route::get('isTheirNotifications', [NotificationController::class, 'isTheirNotifications']);

    //lab Manager
    Route::get('ViewAvailableAppointments', [LabAppointmentController::class, 'ViewAvailableAppointments']);
    Route::post('AddAvailableAppointment', [LabAppointmentController::class, 'AddAvailableAppointment']);
    Route::post('bookAppointment/{id}', [LabAppointmentController::class, 'bookAppointment']);
    Route::get('viewBookedAppointments', [LabAppointmentController::class, 'viewBookedAppointments']);
    Route::post('SendPhotoToStudent/{id}', [LabAppointmentController::class, 'SendPhotoToStudent']);

    //statistics
    Route::get('totalMasterStudentsStatistics', [AdminController::class, 'totalMasterStudentsStatistics']);
    Route::get('totalBachelorDegreeStudentsStatistics', [AdminController::class, 'totalBachelorDegreeStudentsStatistics']);
    Route::get('totalPatientsStatistics', [AdminController::class, 'totalPatientsStatistics']);

    Route::get('NameOfTheMostRatedStudent', [AdminController::class, 'NameOfTheMostRatedStudent']);
    Route::get('TheMostPatientWhoInteractsWithTheApplication', [AdminController::class, 'TheMostPatientWhoInteractsWithTheApplication']);
    Route::get('MoreStudentMasterWhoDoingConsulting', [AdminController::class, 'MoreStudentMasterWhoDoingConsulting']);
    Route::get('TheClinicalConditionThatHasMoreTreatments', [AdminController::class, 'TheClinicalConditionThatHasMoreTreatments']);

    Route::get('FindOutMyStudentID', [PatientController::class, 'FindOutMyStudentID']);

});
