<?php

namespace App\Repositories\Admin;

use App\Models\Information;
use App\Models\News;
use App\Traits\FileTrait;

class InformationRepository
{
    use FileTrait;

    public function create($data)
    {
        if (!empty($data['image'])) {
            $data['image'] = self::uploadFile($data['image'], 'information-bank/');
        }
        if (!empty($data['flag'])) {
            $data['flag'] = self::uploadFile($data['flag'], 'information-bank/');
        }

        foreach ($data['lang'] as $key => $value) {
            $data[$key] = $value;
        }

        return Information::create($data);
    }

    public function update($information, $data)
    {
        if (!empty($data['image'])) {
            self::deleteFile($information->image);
            $data['image'] = self::uploadFile($data['image'], 'news/');
        }
        if (!empty($data['flag'])) {
            self::deleteFile($information->flag);
            $data['flag'] = self::uploadFile($data['flag'], 'information-bank/');
        }

        foreach ($data['lang'] as $locale => $fields) {
            $translation = $information->translateOrNew($locale);
            $translation->information_id = $information->id;
            $translation->locale = $locale;
            $translation->title = $fields['title'];
            $translation->body = $fields['body'];
            $translation->save();
        }
        $information->update($data);

        return $information;
    }

    public function delete($information)
    {
        self::deleteFile($information->image);
        self::deleteFile($information->flag);
        $information->delete();
    }
}
