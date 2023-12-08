<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Penyetuju;

class Penyetuju extends Model
{
    use HasFactory;

    protected $table = 'penyetuju';

    protected $fillable = ['kendaraan_id','user_id','approve'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function kendaraanPeminjaman(){
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id');
    }
}
