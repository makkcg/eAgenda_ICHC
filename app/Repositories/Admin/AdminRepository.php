<?php

namespace App\Repositories\Admin;

use App\Models\Admin;
use App\Traits\FileTrait;

class AdminRepository
{
    use FileTrait;

    public function create($data)
    {
        $admin = Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone_number' => $data['phone_number'],
        ]);

        if (!empty($data['image'])) {
            $data['image'] = self::uploadFile($data['image'], 'admins/');
            $admin->update(['image' => $data['image']]);
        }

        $admin->assignRole($data['role']);
    }

    public function update($admin, $data)
    {
        if (!empty($data['image'])) {
            self::deleteFile($admin->image);
            $data['image'] = self::uploadFile($data['image'], 'admins/');
        }

        $admin->update($data);
        $admin->roles()->detach();
        $admin->assignRole($data['role']);
    }

    public function delete($admin)
    {
        self::deleteFile($admin->image);
        $admin->delete();
    }

    public function changePassword($admin, $data)
    {
        $admin->update([
            'password' => bcrypt($data['password'])
        ]);
    }
}
