<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan'; // pastikan nama tabel sesuai

    protected $fillable = [
        'id_pelanggan',
        'tgl_pesan',
        'tgl_pengiriman',
        'alamat_pengiriman',
        'status',
    ];

    protected $casts = [
        'tgl_pesan' => 'date',
        'tgl_pengiriman' => 'date',
    ];
}
