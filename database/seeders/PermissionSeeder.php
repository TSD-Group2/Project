<?php

namespace Database\Seeders;

use App\Models\PermissionGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $GroupNames = [
            [
                'name' => 'view-dashboard',
                'group_id' => PermissionGroup::where('name','dashboard')->first()->id,
                'guard_name' => 'web',
            ],
            // -----------------Users------------------
            [
                'name' => 'view-user',
                'group_id' => PermissionGroup::where('name', 'users')->first()->id,
                'guard_name' => 'web',
            ],
            [
                'name' => 'create-user',
                'group_id' => PermissionGroup::where('name', 'users')->first()->id,
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit-user',
                'group_id' => PermissionGroup::where('name', 'users')->first()->id,
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete-user',
                'group_id' => PermissionGroup::where('name', 'users')->first()->id,
                'guard_name' => 'web',
            ],
            // -----------------Roles and Permissions------------------
            [
                'name' => 'view-roles',
                'group_id' => PermissionGroup::where('name', 'roles-and-permission')->first()->id,
                'guard_name' => 'web',
            ],
            [
                'name' => 'create-roles',
                'group_id' => PermissionGroup::where('name', 'roles-and-permission')->first()->id,
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit-roles',
                'group_id' => PermissionGroup::where('name', 'roles-and-permission')->first()->id,
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete-roles',
                'group_id' => PermissionGroup::where('name', 'roles-and-permission')->first()->id,
                'guard_name' => 'web',
            ],
            // -----------------Permissions------------------
            [
                'name' => 'view-permissions',
                'group_id' => PermissionGroup::where('name', 'permissions')->first()->id,
                'guard_name' => 'web',
            ],
            [
                'name' => 'create-permissions',
                'group_id' => PermissionGroup::where('name', 'permissions')->first()->id,
                'guard_name' => 'web',
            ],
            [
                'name' => 'edit-permissions',
                'group_id' => PermissionGroup::where('name', 'permissions')->first()->id,
                'guard_name' => 'web',
            ],
            [
                'name' => 'delete-permissions',
                'group_id' => PermissionGroup::where('name', 'permissions')->first()->id,
                'guard_name' => 'web',
            ],
            [
                'name' => 'view-active-users',
                'group_id' => PermissionGroup::where('name','logs')->first()->id,
                'guard_name' => 'web',
            ],
            [
                'name' => 'view-activity-log',
                'group_id' => PermissionGroup::where('name','logs')->first()->id,
                'guard_name' => 'web',
            ],
        ];
        foreach ($GroupNames as $key => $value) {
            $permissionGroup = new Permission();
            $permissionGroup->name = $value['name'];
            $permissionGroup->permission_group_id = $value['group_id'];
            $permissionGroup->guard_name = $value['guard_name'];
            $permissionGroup->save();
        }
    }
}
