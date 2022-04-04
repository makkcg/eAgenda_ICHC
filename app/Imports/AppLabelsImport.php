<?php

namespace App\Imports;

use App\Models\AppLabel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class AppLabelsImport implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $data = ['key' => $row['key']];
        foreach (getActiveLanguages()->pluck('code') as $langCode) {
            $data[$langCode] = [
                'value' => $row['value_'.$langCode] ?? $row['value_en'],
            ];
        }

        return new AppLabel($data);
    }

    public function rules(): array
    {
        return [
            'key' => 'required|string|max:255|regex:/^[a-z0-9]+$/i|unique:app_labels,key',
            'value_en' => 'required|string|max:255',
        ];
    }
}
