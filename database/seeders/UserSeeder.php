<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(3)->sequence(
            [
                'first_name' => 'admin',
                'last_name' => '',
                'email' => 'superadmin@gmail.com',
                'role' => 'superAdmin',
                'password' => bcrypt('admin123'),
            ],
            [
                'first_name' => 'admin1',
                'last_name' => '',
                'email' => 'admin1@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin123'),
            ],
            [
                'first_name' => 'fakhri',
                'last_name' => 'ardian',
                'email' => 'fakhri@gmail.com',
                'role' => 'konsumen',
                'password' => bcrypt('fakhri123'),
            ],
        )->create();
    }
}
