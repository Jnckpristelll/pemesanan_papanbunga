<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'deskripsi',
        'harga',
        'ukuran',
    ];
    public function detailpesanan()
    {
        return $this->belongTo(Detail_pesanan::class);
    }
}
