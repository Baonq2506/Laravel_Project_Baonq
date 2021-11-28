<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlaceOrderRequest extends FormRequest
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
            'phone' => ['required','max:12','min:9'],
            'address' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'email.end_with' => 'Email must be in the correct format : example@gmail.com ',
        ];
    }
}