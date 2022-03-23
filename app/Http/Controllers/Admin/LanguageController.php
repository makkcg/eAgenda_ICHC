<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        return view('admin.languages.index');
    }

    public function changeStatus(Language $language)
    {
        $language->status = $language->status ? 0 : 1;
        $language->save();
        toast(trans('admin.language').' '.trans('admin.status').' '.trans('admin.updated').' '.trans('admin.successfully'),'success');

        return back();
    }
}
