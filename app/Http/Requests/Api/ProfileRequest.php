<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => 'sometimes|string|max:64',
            'country_id' => 'sometimes|exists:countries,id',
            'phone_number' => 'sometimes|string',
            'image' => 'sometimes|image|mimes:jpg,jpeg,png|max:2048',
            'device_token' => 'nullable|string|max:255',
        ];
    }
}
