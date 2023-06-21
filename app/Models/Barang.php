<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    
    protected $guarden = ['id'];
    protected $fillable = [
        'name',
        'stok'
    ];

    function BarangMasuk ()
    {
    return $this->hasOne(BarangMasuk::class);
    }

    function BarangKeluar ()
    {
    return $this->hasOne(BarangKeluar::class);
    }
}

