<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
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
            'lang.*.title' => 'required|string|max:255',
            'lang.*.body' => 'required|string',
            'image' => ($this->information ? 'nullable' : 'required') . '|image|max:2048',
            'flag' => 'nullable|image|max:2048',
        ];
    }
}
