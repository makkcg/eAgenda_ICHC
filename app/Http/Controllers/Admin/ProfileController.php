<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateProfileRequest;
use App\Traits\FileTrait;

class ProfileController extends Controller
{
    use FileTrait;

    public function edit()
    {
        return view('admin.profile', [
            'admin' => auth('admin')->user(),
        ]);
    }

    public function update(UpdateProfileRequest $request)
    {
        $admin = auth('admin')->user();
        $data = $request->validated();

        if ($request->has('image')) {
            self::deleteFile($admin->image);
            $data['image'] = self::uploadFile($data['image'], 'admins/');
        }
        $admin->update($data);

        return back();
    }
}
