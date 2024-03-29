<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'title' => 'required|string|max:64',
            'due_date' => 'required|date_format:Y-m-d H:i:s',
            'notify' => 'required|in:0,1',
            'status' => 'nullable|in:0,1',
            'in_calender' => 'required|in:0,1',
            'notes' => 'nullable|string',

            'files.*' => 'nullable|file|max:4096',
            'tags.*' => 'nullable|exists:tags,id',
        ];
    }
}
