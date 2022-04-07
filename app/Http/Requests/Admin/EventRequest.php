<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'color' => 'required|string|regex:/^#[a-f0-9]{6}$/i',
            'date' => 'required|date_format:Y-m-d',
        ];
    }
}
