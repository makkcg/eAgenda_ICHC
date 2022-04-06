<?php

namespace App\Repositories\Admin;


use App\Traits\FileTrait;

class PageRepository
{
    use FileTrait;

    public function update($page, $data)
    {
        foreach ($data['lang'] as $locale => $fields) {
            $translation = $page->translateOrNew($locale);
            $translation->page_id = $page->id;
            $translation->locale = $locale;
            $translation->title = $fields['title'];
            $translation->body = $fields['body'];
            $translation->save();
        }

        if (!empty($data['image'])) {
            self::deleteFile($page->image);
            $data['image'] = self::uploadFile($data['image'], 'pages/');
        }

        $page->update($data);
    }
}
