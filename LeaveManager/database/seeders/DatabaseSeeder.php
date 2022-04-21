<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '123123123',
                'is_admin' => '1',
                'cin' => '00000001',
                'birth_date' => now()->subYears(30)->format('d-m-Y'),
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => '123123123',
                'is_admin' => null,
                'cin' => '00000002',
                'birth_date' => now()->subYears(20)->format('d-m-Y'),
            ],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
                'is_admin' => $user['is_admin'],
                'cin' => $user['cin'],
                'birth_date' => $user['birth_date'],
            ]);
        }

    }
}
