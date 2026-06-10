<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdukSkincare extends Model
{
    protected $table = 'produk_skincare';
    
    public $timestamps = false;
    
    protected $fillable = [
        'nama_produk',
        'merek',
        'jenis_produk',
        'harga',
        'stok',
        'tanggal_masuk',
        'tanggal_kadaluarsa'
    ];
}