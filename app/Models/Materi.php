<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
  use HasFactory;

  protected $table = 'materi';

  protected $fillable = [
    'nama_materi',
  ];

  protected $hidden = [];

  public function kelas()
  {
    return $this->hasMany(Kelas::class, 'id_materi');
  }
}
