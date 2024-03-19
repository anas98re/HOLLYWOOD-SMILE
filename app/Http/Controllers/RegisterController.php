<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\patient;
use App\Models\patient_profile;
use App\Models\student;
use App\Models\student_profile;
use Illuminate\Http\Request;
use App\Models\User;
//use Validator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class RegisterController extends BaseController
{
    public function signin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $authUser = Auth::user();
            $authUser['token'] =  $authUser->createToken('MyAuthApp')->plainTextToken;
            if ($authUser->role == 'Student') {
                $student = student::where('user_id', $authUser->id)->first();
                $authUser['studentId'] = $student->id;
                $authUser['studentProfileId'] = student_profile::where('student_id', $student->id)->first()->id;
                $authUser->students;
            }
            if ($authUser->role == 'Patient') {
                $patient = patient::where('user_id', $authUser->id)->first();
                $authUser['patientId'] = $patient->id;
                $authUser['patientProfileId'] = patient_profile::where('patient_id', $patient->id)->first()->id;
            }
            return $this->sendResponse($authUser, 'User signed in');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
        }
    }
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Error validation', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);

        $success['token'] =  $user->createToken('MyAuthApp')->plainTextToken;
        $success['name'] =  $user->name;
        $success['role'] =  $user->role;
        $success['email'] = $user->email;

        return $this->sendResponse($success, 'User created successfully.');
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Successfully logged out']);
    }


    public function PatientSignup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'description' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Error validation', $validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'role' => 'Patient',
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $patient = patient::create([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'description' => $request->description,
            'user_id' => $user->id,
        ]);

        $patientProfile = patient_profile::create([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'description' => $request->description,
            'patient_id' => $patient->id,
        ]);

        $success['token'] =  $user->createToken('MyAuthApp')->plainTextToken;
        $success['name'] =  $user->name;
        $success['role'] =  $user->role;
        $success['email'] = $user->email;
        $success['age'] = $patient->age;
        $success['gender'] = $patient->gender;
        $success['description'] = $patient->description;
        $success['patientProfileId']=$patientProfile->id;
        $success['patientId']=$patient->id;
        return $this->sendResponse($success, 'Patient signed up successfully.');
    }

    public function StudentSignup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'type' => 'required',
            'year' => 'required',
            'university_card' => 'required',
            // 'specializations'=>'specializations'
        ]);

        if ($validator->fails()) {
            return $this->sendError('Error validation', $validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'role' => 'Student',
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        // $fileName = time() . '.' . $request->university_card->extension();
        // $request->university_card->move(public_path('uploads'), $fileName);

        $student = student::create([
            'name' => $request->name,
            'type' => $request->type,
            'year' => $request->year,
            $file = Cloudinary::upload($request->file('university_card')->getRealPath(), [
                'folder' => 'anas29December'
            ])->getSecurePath(),
            'university_card' => $file,
            'description' => $request->description,
            'specializations' => $request->specializations,
            'user_id' => $user->id,
        ]);

        $studentProfile = student_profile::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'Region' => $request->Region,
            'description' => $request->description,
            'rating' => $request->rating,
            'photo' => $request->photo,
            'student_id' => $student->id,
        ]);

        $success['token'] =  $user->createToken('MyAuthApp')->plainTextToken;
        $success['name'] =  $user->name;
        $success['role'] =  $user->role;
        $success['email'] = $user->email;
        $success['type'] = $student->type;
        $success['year'] = $student->year;
        $success['university_card'] = $student->university_card;
        $success['studentProfileId']=$studentProfile->id;
        $success['studentId']=$student->id;
        return $this->sendResponse($success, 'Student signed up successfully.');
    }

    public function refresh(Request $request)
    {
        $user = $request->user();
        $user->tokens()->delete();
        return response()->json([
            'user' => $user,
            'token' => $user->createToken('Api Of ' . $user->name)->plainTextToken
        ]);
    }
}
