<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create role
        $admin = Role::create(['name' => 'admin']);
        $superAdmin = Role::create(['name' => 'super-admin']);
        $user = Role::create(['name' => 'user']);

        //permission list
        $permissions = [
            'role_create',
            'role_view',
            'role_edit',
            'role_delete',
        ];

        //assign permission to role
        for($i = 0; $i < count($permissions); $i++){
            $permission = Permission::create(['name' => $permissions[$i]]);
            $superAdmin->givePermissionTo($permission); // give permission to a role
            // $permission->assignRole($superAdmin);
        }
    }
}
