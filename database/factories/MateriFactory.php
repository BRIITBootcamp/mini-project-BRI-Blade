<?php

namespace Database\Factories;

use App\Models\Materi;
use Illuminate\Database\Eloquent\Factories\Factory;

class MateriFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array
   */

  protected $model = Materi::class;

  public function definition()
  {
    return [
      'nama_materi' => $this->faker->sentence(2),
    ];
  }
}
