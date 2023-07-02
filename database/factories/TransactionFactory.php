<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'transaction_code' => 'ABC' . mt_rand(12345, 99999),
      'user_id' => DB::table('users')->inRandomOrder()->first()->id,
      'book_id' => DB::table('books')->inRandomOrder()->first()->id,
      'amount' => fake()->randomNumber(6),
    ];
  }
}
