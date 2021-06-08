<?php

namespace App\Http\Requests;

use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MerchantStoreRequest extends FormRequest
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
            'father_name' => ['required', 'string', 'max:255'],
            'mother_name' => ['required', 'string', 'max:255'],
            'spouse_name' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'contact_no' => ['nullable', 'string', 'regex:/(01)[0-9]{9}/', 'max:255', Rule::unique('users', 'contact_no')],
            'password' => $this->passwordRules(),
            'gender' => ['required', 'string'],
            'date_of_birth' => ['required', 'date','date_format:Y-m-d','before:today'],
            'nationality' => ['required', 'string'],
            'nid' => ['required', 'numeric'],
            'civil_status' => ['required', 'string'],
            'religion' => ['required', 'string'],
            'passport_no' => ['nullable', 'string'],
            'blood_group' => ['nullable', 'string'],
            'designation_in_proprietorship' => ['required', 'string'],
            'contact_no_work' => ['required', 'string','max:11','min:11'],
            'contact_no_home' => ['required', 'string','max:11','min:11'],
            'emergency_contact' => ['required', 'string'],
        ];
    }
}
