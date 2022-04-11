<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class VisualInformationRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'icon' => ($this->information ? 'nullable' : 'required') . '|image|max:2048',
            'asset' => ($this->information ? 'nullable' : 'required') . '|image|max:2048',
        ];
    }
}
