<?php

namespace App\Repositories\Admin;

use App\Models\News;
use App\Traits\FileTrait;

class NewsRepository
{
    use FileTrait;

    public function create($data)
    {
        if (!empty($data['image'])) {
            $data['image'] = self::uploadFile($data['image'], 'news/');
        }

        foreach ($data['lang'] as $key => $value) {
            $data[$key] = $value;
        }

        return News::create($data);
    }

    public function update($news, $data)
    {
        if (!empty($data['image'])) {
            self::deleteFile($news->image);
            $data['image'] = self::uploadFile($data['image'], 'news/');
        }

        foreach ($data['lang'] as $locale => $fields) {
            $translation = $news->translateOrNew($locale);
            $translation->news_id = $news->id;
            $translation->locale = $locale;
            $translation->title = $fields['title'];
            $translation->body = $fields['body'];
            $translation->save();
        }
        $news->update($data);

        return $news;
    }

    public function delete($news)
    {
        self::deleteFile($news->image);
        $news->delete();
    }
}
