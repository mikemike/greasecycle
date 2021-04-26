<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CallbackFormRequest extends FormRequest
{
    protected $redirect = "/#contact";
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
            'name' => 'required|string|min:1|max:255',
            'company' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|max:255',
            'reqtype' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ];
    }

}
