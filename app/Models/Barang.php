<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    

    function BarangMasuk ()
    {
        return $this->hasMany(BarangMasuk::class);
    }

    function BarangKeluar ()
    {
        return $this->hasMany(BarangKeluar::class);
    }
}

