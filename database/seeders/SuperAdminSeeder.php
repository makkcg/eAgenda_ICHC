<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789')
        ]);

        $superAdminRole = Role::create([
            'name' => 'super-admin',
            'guard_name' => 'admin',
        ]);

        Role::create([
            'name' => 'admin',
            'guard_name' => 'admin',
        ]);

        Permission::insert([
            [
                'name' => 'admins',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'roles',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'settings',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'app_labels',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'languages',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'pages',
                'guard_name' => 'admin',
            ],
        ]);

        $superAdmin->assignRole('super-admin');
    }
}
