<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
            'email' => 'unique:users,email',
            'password' => 'max:30 | min:6',
            'confirmpass' => 'same:password',
            'g-recaptcha-response' => 'recaptchav3:contact-us,0.5'
        ];
    }
}
