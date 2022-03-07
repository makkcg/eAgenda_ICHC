<?php

namespace App\Http\Requests\Api\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SocialLoginRequest extends FormRequest
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
            'social_id' => 'required|string',
            'name' => 'required|string|max:64',
            'email' => 'required|email',
            'device_token' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ];
    }
}
