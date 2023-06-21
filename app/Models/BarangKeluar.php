<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    protected $guarden = ['id'];
    protected $fillable = [
        'name',
        'tanggalkeluar',
        'stok',
        'keterangan'

    ];

    function barangmasuks (){
      
        return $this->belongTo(BarangKeluar::class, 'id_barang');
        }
}
