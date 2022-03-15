<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\FileTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use FileTrait;

    public function edit()
    {
        return view('admin.settings', [
            'settings' => Setting::orderBy('sort')->get(),
        ]);
    }

    public function update(Request $request)
    {
        foreach ($request->except(['_token', 'submit']) as $slug => $value) {
            $setting = Setting::where('slug', $slug)->first();

            if ($setting == null) {
                continue;
            }

            if ($setting->type == 'image' || $setting->type == 'file') {
                self::deleteFile($setting->value);
                $setting->update([
                    'value' => self::uploadFile($value, 'settings/'),
                ]);
                continue;
            }
            $setting->update(['value' => $value]);
//            toast(trans('admin.settings').' '.trans('admin.updated').' '.trans('admin.successfully'),'success');
        }
        return back();
    }
}
