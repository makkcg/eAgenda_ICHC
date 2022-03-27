<?php


function getSetting($slug)
{
    return \App\Models\Setting::where('slug', $slug)->first()->value ?? '';
}

function getActiveLanguages()
{
    return \App\Models\Language::where('status', 1)->get();
}
