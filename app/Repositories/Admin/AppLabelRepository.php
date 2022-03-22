<?php

namespace App\Repositories\Admin;

use App\Models\AppLabel;

class AppLabelRepository
{
    public function create($data)
    {
        $appLabelData = ['key' => $data['key']];
        foreach ($data['lang'] as $key => $value) {
            $appLabelData[$key] = $value;
        }
        AppLabel::create($appLabelData);
    }

//    public function update($admin, $data)
//    {
//        if (!empty($data['image'])) {
//            self::deleteFile($admin->image);
//            $data['image'] = self::uploadFile($data['image'], 'admins/');
//        }
//
//        $admin->update($data);
//        $admin->roles()->detach();
//        $admin->assignRole($data['role']);
//    }
//
//    public function delete($admin)
//    {
//        self::deleteFile($admin->image);
//        $admin->delete();
//    }
//
//    public function changePassword($admin, $data)
//    {
//        $admin->update([
//            'password' => bcrypt($data['password'])
//        ]);
//    }
}
