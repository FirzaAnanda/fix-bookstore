<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('users')->insert([
      [
        'name' => 'Superadmin',
        'email' => 'superadmin@gmail.com',
        'password' => bcrypt('12345'),
        'is_admin' => true,
        'created_at' => now(),
        'updated_at' => now(),
      ],
      [
        'name' => 'User',
        'email' => 'user@gmail.com',
        'password' => bcrypt('12345'),
        'is_admin' => false,
        'created_at' => now(),
        'updated_at' => now(),
      ],
    ]);
  }
}
