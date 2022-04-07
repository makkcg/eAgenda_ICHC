<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class PersonalEventRequest extends FormRequest
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
            'calender_id' => 'required|exists:calenders,id',
            'title' => 'required|string|max:255',
            'color' => 'required|regex:/^#[a-f0-9]{6}$/i',
            'reminder' => 'nullable|in:0,1',
            'reminder_timestamp' => 'required_with:reminder|date_format:Y-m-d H:i:s',
            'repetition' => 'required_with:reminder|numeric',
        ];
    }
}
