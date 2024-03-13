<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('kelas', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->foreignId("id_materi");
      // $table->foreignId("id_materi")->references('id')->on('materi');
      $table->string("nama_kelas");
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('kelas');
  }
}
