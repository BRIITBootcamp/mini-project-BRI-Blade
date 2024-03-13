<?php

namespace Database\Seeders;

use App\Models\Materi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // DB::table('materi')->insert([
    //   'nama_materi' => Str::random(10)
    // ]);
    Materi::factory()->count(
      10
    )->create();
  }
}
