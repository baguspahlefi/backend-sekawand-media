<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jabatan;

class JabatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jabatan1 = Jabatan::create([
            'nama' => 'Manager',
        ]);
        $jabatan2 = Jabatan::create([
            'nama' => 'Staff',
        ]);
        $jabatan3 = Jabatan::create([
            'nama' => 'Driver',
        ]);
       
    }
}
