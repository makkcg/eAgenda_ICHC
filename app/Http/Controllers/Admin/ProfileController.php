<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ChangePasswordRequest;
use App\Http\Requests\Admin\UpdateProfileRequest;
use App\Traits\FileTrait;
use Illuminate\Support\Facades\Hash;

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
        toast(trans('admin.profile').' '.trans('admin.updated').' '.trans('admin.successfully'),'success');

        return back();
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        auth('admin')->user()->update(['password' => Hash::make($request->new_password)]);
        toast(trans('admin.password').' '.trans('admin.changed').' '.trans('admin.successfully'),'success');

        return back();
    }
}
