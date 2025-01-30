<?php

namespace Database\Seeders;

use App\Models\PermissionGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PassengerPermissionSeeder extends Seeder
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
