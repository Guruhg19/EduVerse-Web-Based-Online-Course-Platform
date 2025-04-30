<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerRole = Role::create(
            ['name' => 'owner']
        );
        $teacherRole = Role::create(
            ['name' => 'teacher']
        );
        $studentRole = Role::create(
            ['name' => 'student']
        );

        // Super Admin Account
        $userOwner = User::create([
            'name' => 'admin',
            'occupation' => 'admin',
            'avatar' => 'images/default-avatar.png',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456789'),
        ]);

        $userOwner->assignRole($ownerRole);
    }
}
