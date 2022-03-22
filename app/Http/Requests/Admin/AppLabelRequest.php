<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AppLabelRequest extends FormRequest
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
            'key' => 'required|string|max:255|regex:/^[a-z0-9]+$/i|unique:app_labels,key'. ($this->appLabel ? ','. $this->appLabel->id : '') ,
//            'lang' => 'required|array|min:1',
            'lang.*.value' => 'required|string|max:255',
//            'lang.en.value' => 'required|string|max:255',
        ];
    }
}
