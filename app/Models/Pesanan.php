<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pelanggans_id',
        'tgl_pesan',
        'tgl_pengiriman',
        'alamat_pengiriman',
        'status',
    ];

    public function pelanggans()
        {
            return $this->hasOne(Pelanggan::class, 'id', 'pelanggans_id');
        }



        // Relasi: setiap pesanan milik 1 pelanggan




 }
