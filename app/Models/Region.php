<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Kendaraan;

class Region extends Model
{
    use HasFactory;

    protected $table = 'region';

    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function kendaraan(){
        return $this->hasMany(Kendaraan::class);
    }
}
