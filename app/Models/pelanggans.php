<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggans extends Model
{
    use HasFactory;
    protected $table = 'pelanggans';
    protected $fillable = [
        'nama',
        'no_handphone',
        'alamat',
    ];
}
