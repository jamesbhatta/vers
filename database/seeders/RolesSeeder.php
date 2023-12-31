<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdminEmail =  'admin@vers.ghodaghodi.com';
        $superAdminUsername =  'admin';

        // create super admin and assign existing permissions
        $superAdmin = Role::firstOrCreate(['name' => 'super-admin']);
        $superadminUser = \App\User::whereEmail($superAdminEmail)->first() ?? \App\User::factory()->create([
            'name' => 'Super Admin',
            'email' => $superAdminEmail,
            'username' => $superAdminUsername,
            'email_verified_at' => now(),
            'password' => bcrypt('versadmin'),
            'remember_token' => Str::random(10),

        ]);
        $superadminUser->assignRole($superAdmin);

        // permissions to admin
        $admin = Role::firstOrCreate(['name' => 'admin']);
    }
}
