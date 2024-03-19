<?php

namespace App\Http\Requests;

use App\Models\Service;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ];
    }
    public function messages()
    {

    }
}
