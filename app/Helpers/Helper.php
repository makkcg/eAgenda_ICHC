<?php


function getSetting($slug)
{
    return \App\Models\Setting::where('slug', $slug)->first()->value ?? '';
}
