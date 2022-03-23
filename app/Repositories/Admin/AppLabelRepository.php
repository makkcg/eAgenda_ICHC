<?php

namespace App\Repositories\Admin;

use App\Models\AppLabel;
use App\Models\AppLabelTranslation;
use Illuminate\Support\Arr;
use function Sodium\add;

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
        $locales = $appLabel->translations->pluck('locale')->toArray();
        $newTranslations = [];

        foreach ($data['lang'] as $locale => $fields) {
            if (in_array($locale, $locales)) {
                $data[$locale] = $fields;
                continue;
            }
            $newTranslations[] = [
                'app_label_id' => $appLabel->id,
                'locale' => $locale,
                'value' => $fields['value'],
            ];
        }

        $appLabel->update($data);
        AppLabelTranslation::insert($newTranslations);
    }

//    public function delete($admin)
//    {
//        self::deleteFile($admin->image);
//        $admin->delete();
//    }
//
//    public function changePassword($admin, $data)
//    {
//        $admin->update([
//            'password' => bcrypt($data['password'])
//        ]);
//    }
}
