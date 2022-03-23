<?php

namespace App\Repositories\Admin;

use App\Models\AppLabel;

class AppLabelRepository
{
    public function create($data)
    {
        $appLabelData = ['key' => $data['key']];
        foreach ($data['lang'] as $key => $value) {
            $appLabelData[$key] = $value;
        }
        AppLabel::create($appLabelData);
    }

    public function update($appLabel, $data)
    {
        foreach ($data['lang'] as $locale => $fields) {
            $translation = $appLabel->translateOrNew($locale);
            $translation->app_label_id = $appLabel->id;
            $translation->locale = $locale;
            $translation->value = $fields['value'];
            $translation->save();
        }

        $appLabel->update($data);
    }
}
