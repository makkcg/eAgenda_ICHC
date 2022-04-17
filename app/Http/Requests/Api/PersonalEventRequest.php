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
            'description' => 'nullable|string',

            'start_date' => 'required|date_format:Y-m-d',
            'end_date' => 'required|date_format:Y-m-d',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'all_day' => 'required|integer|in:0,1',

            'repeat_type' => 'required|numeric',
            'repeat_every_type' => 'nullable|numeric',
            'repeat_every' => 'nullable|numeric',
            'repeat_end_type' => 'nullable|numeric',
            'repeat_end' => 'nullable|string|max:255',

            'reminder' => 'required|integer',
        ];
    }
}
