<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
  protected $table = 'barangs';  

  protected $fillable = [
        'kode',
        'nama',
        'harga',
        'stok',
    ];
}