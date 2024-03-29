<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
  use HasFactory;

  protected $fillable = [
    'id_materi',
    'nama_kelas'
  ];

  protected $hidden = [];

  public function materi()
  {
    return $this->belongsTo(Materi::class, 'id');
  }
}
