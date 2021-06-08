<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TokenStoreRequest extends FormRequest
{
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
            'title' => ['required', 'string', 'max:255'],
            'domain' => ['required', 'string', 'max:255','url'],
            'valid_till' => ['nullable', 'string', 'max:255','date','after_or_equal:today'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'title.string' => 'Title must be string',
            'title.max' => 'Title is invalid',
            'domain.required' => 'Domain is required',
            'domain.string' => 'Domain must be string',
            'domain.max' => 'Domain is invalid',
            'domain.url' => 'Domain is invalid',
            'valid_till.string' => 'Valid till date is invalid',
            'valid_till.max' => 'Valid till date is invalid',
            'valid_till.date' => 'Valid till is not a valid date',
            'valid_till.after_or_equal' => 'Valid till can not be before today',
        ];
    }
}
