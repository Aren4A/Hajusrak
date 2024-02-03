<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'admin']);

        $user = User::firstOrCreate([
            'email' => 'test@test.com',
        ], [
            'name' => 'admin',
            'password' => bcrypt('admin'),
        ]);

        $user->assignRole($role);
    }
}
