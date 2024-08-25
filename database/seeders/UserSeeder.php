<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Super Admin',
        //     'username' => 'superadmin',
        //     'type' => 'guru',
        //     'email' => 'superadmin@example.com',
        // ]);

        User::factory(10)->create();
    }
}
