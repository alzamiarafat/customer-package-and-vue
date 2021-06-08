<?php

namespace App\Http\Requests;

use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Laravel\Jetstream\Jetstream;

class RegisterRequest extends FormRequest
{
    use PasswordValidationRules;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', $this->routeIs('dboard.user.create') ? 'unique:users,email' :Rule::unique('users','email')->ignore($this->segment(3))],
            'contact_no' => ['required', 'string', 'regex:/(01)[0-9]{9}/', 'max:255', $this->routeIs('dboard.user.create') ? Rule::unique('users','contact_no') : Rule::unique('users','contact_no')->ignore($this->segment(3)) ],
            'password' => $this->routeIs('dboard.user.create') ? $this->passwordRules() : 'nullable'
        ];
    }

    public function messages()
    {
        return [
            'contact_no.regex' => 'Phone number is invalid'
        ];
    }
}
