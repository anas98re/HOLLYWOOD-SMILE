<?php

namespace App\Http\Requests;

use App\Models\Service;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;

class PatientRequestRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'type' => 'required',
            'title' => 'required',
        ];
    }
    public function messages()
    {

    }
}
