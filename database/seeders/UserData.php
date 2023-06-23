<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'password' => '123',
                'role' => 'user'
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => '123',
                'role' => 'admin'
            ]
            ];

            foreach($user as $key => $value){
                User::create($value);
            }
    }
}