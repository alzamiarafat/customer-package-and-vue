<?php

namespace App\Http\Requests\Api;

use App\Models\UserToken;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class KYCRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $token = UserToken::whereToken($this->input('token', ''))->whereDate('valid_till', '>', today())->count();
        return ($token) ? true : UserToken::whereToken($this->input('token', ''))
            ->where('valid_till', null)
            ->count();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'token' => ['required', Rule::exists('user_tokens', 'token')],
            'id_number' => ['required'],
        ];
    }
}




