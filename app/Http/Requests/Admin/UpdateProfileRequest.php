<?php

namespace App\Http\Requests\Admin;

use App\Rules\MatchOldPassword;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UpdateProfileRequest extends FormRequest
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
            'phone_number' => 'nullable|string|max:64',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:4096',
//            'new_password' => 'nullable|min:8|confirmed',
//            'password' => ['required_with:new_password', new MatchOldPassword('admin')],
//            'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()->symbols()],
        ];
    }
}
