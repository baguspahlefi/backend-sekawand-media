<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';

    protected $fillable = [
        'nopol',
        'nama_kendaraan',
        'jenis_kendaraan',
        'region_id',
        'bbm',
        'jadwal_service',
        'jumlah',
        'deskripsi',
        'driver',
        'gambar',
    ];

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function kendaraan(){
        return $this->belongsTo(User::class,'driver');
    }

    public function kendaraanPeminjaman(){
        return $this->hasMany(pemesanan::class);
    }
}

