<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      Permission::create(['name' => 'role-list']);
      Permission::create(['name' => 'role-create']);
      Permission::create(['name' => 'role-edit']);
      Permission::create(['name' => 'role-show']);
      Permission::create(['name' => 'role-delete']);

      Permission::create(['name' => 'user-list']);
      Permission::create(['name' => 'user-create']);
      Permission::create(['name' => 'user-edit']);
      Permission::create(['name' => 'user-show']);
      Permission::create(['name' => 'user-delete']);

      $role = Role::create(['name' => 'super-admin']);
      $role->givePermissionTo(Permission::all());

      
    }
}
