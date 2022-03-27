<?php

namespace App\Repositories\Admin;


class PageRepository
{
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

        $page->update($data);
    }
}
