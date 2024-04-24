<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalInfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required', 'regex:^[\u0621-\u064A]+$',
            'last_name' => 'required', 'regex:^[\u0621-\u064A]+$',
            'father_name' => 'required', 'regex:^[\u0621-\u064A]+$',
            'mother_name' => 'required', 'regex:^[\u0621-\u064A]+$',
            'birth_place' => 'required',
            'birth_date' => 'required', 'nullable|date_format:Y-m-d|before:today',
            'nationality' => 'required',
            'mobile_number' => 'required', 'regex:/(01)[0-9]{9}/',
            'land_line' => 'required', 'regex:/(2)[0-9]{6}/'
        ];
    }
    public function messages(){
        return [

        ];
    }
    public function attributes(){
        return [

        ];
    }
}
