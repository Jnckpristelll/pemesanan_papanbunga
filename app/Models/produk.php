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
    public function detail_pesanan()
{
    return $this->hasMany(Detail_pesanan::class, 'id_produk');
}

}
