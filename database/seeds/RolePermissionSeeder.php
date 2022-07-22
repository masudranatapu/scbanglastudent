<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Roles
        $roleSuperAdmin = Role::create(['name' => 'superadmin','guard_name' => 'admin']);
        // Permission List as array

        // Set Model Has Role
        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\Models\Admin',
            'model_id'   => 1,
        ]);
        $permissions = [
[
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                    'dashboard.edit',
                ]
            ],
            [
                'group_name' => 'admin',
                'permissions' => [
                    // admin Permissions
                    'admin.create',
                    'admin.view',
                    'admin.edit',
                    'admin.delete',
                ]
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    // role Permissions
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                ]
            ],
            [
                'group_name' => 'institute_type',
                'permissions' => [
                    // role Permissions
                    'institute_type.create',
                    'institute_type.view',
                    'institute_type.edit',
                    'institute_type.delete',
                ]
            ],
            [
                'group_name' => 'sub_institute_type',
                'permissions' => [
                    // role Permissions
                    'sub_institute_type.create',
                    'sub_institute_type.view',
                    'sub_institute_type.edit',
                    'sub_institute_type.delete',
                ]
            ],
             [
                'group_name' => 'class',
                'permissions' => [
                    // role Permissions
                    'class.create',
                    'class.view',
                    'class.edit',
                    'class.delete',
                ]
            ],
            [
                'group_name' => 'board',
                'permissions' => [
                    // role Permissions
                    'board.create',
                    'board.view',
                    'board.edit',
                    'board.delete',
                ]
            ],
            [
                'group_name' => 'district',
                'permissions' => [
                    // role Permissions
                    'district.create',
                    'district.view',
                    'district.edit',
                    'district.delete',
                ]
            ],
            [
                'group_name' => 'division',
                'permissions' => [
                    // role Permissions
                    'division.create',
                    'division.view',
                    'division.edit',
                    'division.delete',
                ]
            ],
            [
                'group_name' => 'group',
                'permissions' => [
                    // role Permissions
                    'group.create',
                    'group.view',
                    'group.edit',
                    'group.delete',
                ]
            ],
            [
                'group_name' => 'ads',
                'permissions' => [
                    // role Permissions
                    'ads.edit',
                    'ads.view',
                    'ads.delete',
                ]
            ],

            [
                'group_name' => 'shift',
                'permissions' => [
                    // role Permissions
                    'shift.create',
                    'shift.view',
                    'shift.edit',
                    'shift.delete',
                ]
            ],
            [
                'group_name' => 'slider',
                'permissions' => [
                    // role Permissions
                    'slider.create',
                    'slider.view',
                    'slider.edit',
                    'slider.delete',
                ]
            ],
            [
                'group_name' => 'recent_event',
                'permissions' => [
                    // role Permissions
                    'recent_event.create',
                    'recent_event.view',
                    'recent_event.edit',
                    'recent_event.delete',
                ]
            ],
            [
                'group_name' => 'video_gallery',
                'permissions' => [
                    // role Permissions
                    'video_gallery.create',
                    'video_gallery.view',
                    'video_gallery.edit',
                    'video_gallery.delete',
                ]
            ],
            [
                'group_name' => 'widget',
                'permissions' => [
                    // role Permissions
                    'widget.create',
                    'widget.view',
                    'widget.edit',
                    'widget.delete',
                ]
            ],
            [
                'group_name' => 'post',
                'permissions' => [
                    // role Permissions
                    'post.approve',
                    'post.view',
                    'post.edit',
                    'post.delete',
                ]
            ],
            [
                'group_name' => 'institute',
                'permissions' => [
                    // role Permissions
                    'institute.approve',
                    'institute.view',
                    'institute.edit',
                    'institute.delete',
                ]
            ],
             [
                'group_name' => 'message',
                'permissions' => [
                    // role Permissions
                    'message.replay',
                    'message.create',
                    'message.view',
                    'message.delete',
                ]
            ],
        ];


        // Create and Assign Permissions
        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];
            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                // Create Permission
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup,'guard_name' => 'admin']);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);
            }
        }
    }
}
