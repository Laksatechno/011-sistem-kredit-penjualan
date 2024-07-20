<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Super Admin',
                'email' => 'superadmin@example.com',
                'password' => Hash::make('password123'),
                'role' => 'superadmin',
            ],
            [
                'name' => 'Manajer',
                'email' => 'manajer@example.com',
                'password' => Hash::make('password123'),
                'role' => 'manajer',
            ],
            [
                'name' => 'Karyawan',
                'email' => 'karyawan@example.com',
                'password' => Hash::make('password123'),
                'role' => 'karyawan',
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
