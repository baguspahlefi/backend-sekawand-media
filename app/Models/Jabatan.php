<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'jabatan';

    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
