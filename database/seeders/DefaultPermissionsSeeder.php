<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DefaultPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'id'                    => 1,
                'name'                  => 'Master Admin',
                'guard_name'            => 'web',
                'created_at'            => date('y-m-d h:m:s'),
            ],
            [
                'id'                    => 2,
                'name'                  => 'Admin',
                'guard_name'            => 'web',
                'created_at'            => date('y-m-d h:m:s'),
            ],
            [
                'id'                    => 3,
                'name'                  => 'Affiliate',
                'guard_name'            => 'web',
                'created_at'            => date('y-m-d h:m:s'),
            ],
            [
                'id'                    => 4,
                'name'                  => 'User Management',
                'guard_name'            => 'web',
                'created_at'            => date('y-m-d h:m:s'),
            ],
            [
                'id'                    => 5,
                'name'                  => 'Manage Orders',
                'guard_name'            => 'web',
                'created_at'            => date('y-m-d h:m:s'),
            ],
            [
                'id'                    => 6,
                'name'                  => 'Manage Products',
                'guard_name'            => 'web',
                'created_at'            => date('y-m-d h:m:s'),
            ],
            [
                'id'                    => 7,
                'name'                  => 'Manage UI',
                'guard_name'            => 'web',
                'created_at'            => date('y-m-d h:m:s'),
            ],
            [
                'id'                    => 8,
                'name'                  => 'Support Staff',
                'guard_name'            => 'web',
                'created_at'            => date('y-m-d h:m:s'),
            ],
        ];

        Permission::insert($permission);
    }
}
