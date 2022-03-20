<?php

namespace App\Repositories\Admin;

use Spatie\Permission\Models\Role;

class RoleRepository
{
    public function create($data)
    {
        $data['guard_name'] = 'admin';
        $role = Role::create([
            'name' => $data['name'],
            'guard_name' => $data['guard_name'],
        ]);

        $role->permissions()->sync($data['permissions']);
    }

    public function update($role, $data)
    {
        $role->update([
            'name' => $data['name']
        ]);

        $role->permissions()->sync($data['permissions']);
    }

    public function delete($role)
    {
        $role->delete();
    }
}
