<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $guarden = ['id'];
    protected $fillable = [
        'name',
        'tanggalmasuk',
        'stok',
        'keterangan'

    ];

    function barangmasuks (){
      
        return $this->belongTo(BarangMasuk::class, 'id_barang');
        }
}
