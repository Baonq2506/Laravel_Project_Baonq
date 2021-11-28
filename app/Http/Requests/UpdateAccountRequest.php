<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccountRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:30'],
            'email' => ['required','string','email:rfc,dns','max:30','ends_with:@gmail.com'],
            'password' => ['confirmed','max:15','min:8'],
            'phone' => ['required','max:12','min:10'],
            'date'=>['date_format:"d/m/Y"','required'],
            'address' => ['required'],
            'avatar'=>'mimes:jpg,jpeg|max:3072|min:50',
            'gender' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'email.end_with' => 'Email must be in the correct format : example@gmail.com ',
            'date.date_format' => 'Date format ex : 01/12/2021'
        ];
    }
}