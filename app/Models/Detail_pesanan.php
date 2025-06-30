<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pesanan extends Model
{
    use HasFactory;

    
     protected $fillable = [
        'id_pesanan',
        'id_produk',
        'isi_papan',
        'jumlah',
        'total_harga',
    ];
}
