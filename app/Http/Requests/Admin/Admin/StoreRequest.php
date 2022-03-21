<?php

namespace App\Http\Requests\Admin\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|max:64',
            'email' => 'required|unique:admins,email',
            'phone_number' => 'required',
            'role' => 'required|exists:roles,name',
            'password' => 'required|confirmed|min:8',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:4096'
        ];
    }
}
