<?php

namespace App\Imports;

use App\Models\Event;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class EventsImport implements ToModel, WithValidation, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        foreach (getActiveLanguages()->pluck('code') as $langCode) {
            $row[$langCode] = [
                'title' => $row['title_'.$langCode] ?? $row['title_en'],
            ];
        }

        return new Event($row);
    }

    public function rules(): array
    {
        return [
            'color' => 'required|string||regex:/^#[a-f0-9]{6}$/i',
            'date' => 'required|date_format:Y/m/d',
            'title_en' => 'required|string|max:255',
        ];
    }
}
