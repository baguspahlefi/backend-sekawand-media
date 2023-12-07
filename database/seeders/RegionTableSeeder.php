<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $region1 = Region::create([
            'nama' => 'A',
        ]);
        $region2 = Region::create([
            'nama' => 'B',
        ]);
        $region3 = Region::create([
            'nama' => 'C',
        ]);
        $region4 = Region::create([
            'nama' => 'D',
        ]);
        $region5 = Region::create([
            'nama' => 'E',
        ]);
        $region6 = Region::create([
            'nama' => 'F',
        ]);
       
    }
}
