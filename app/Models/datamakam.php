<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datamakam extends Model
{
    use HasFactory;
    protected $table = 'datamakam';
    protected $fillable = [
        'name',
        'nik',
        'alamat',
        'ttl',
        'kodemakam',
        'nama',
        'nik',
        'alamat',
        'ttl',
        's',
        'e',
        'longitude',
        'latitude',
        'tpu',
        'ketersediaan'
    ];
}
