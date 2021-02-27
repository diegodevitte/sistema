<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class SuperAdminUserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $user = User::create([
        'name' => 'Diego Devitte',
        'email' => 'diegodevitte@gmail.com',
        'password' => bcrypt('123456')
      ]);

      // Asignación del rol
      $user->assignRole('super-admin');


    }
}
