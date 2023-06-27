<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'title' => fake()->name,
      'author' => fake()->name,
      'cover' => 'images/cover-book.jpg',
      'price' => fake()->numberBetween(9999, 99999),
      'description' => fake()->words(5, true),
    ];
  }
}
