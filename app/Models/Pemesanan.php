<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Jabatan;
use App\Models\Region;
use App\Models\Kendaraan;

class Pemesanan extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'pemesanan';
    protected $fillable = [
        'user_id',
        'kendaraan_id',
        'tgl_peminjaman',
        'tgl_pengembalian',
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kendaraanPeminjaman(){
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id');
    }

    public function kendaraan(){
        return $this->hasMany(User::class);
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
