<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'nip' => '123',
            'nama' => 'Bagus Admin',
            'email' => 'bagus@gmail.com',
            'password' => bcrypt('password'),
            'no_phone' => '081738112',
            'jabatan_id' => '2',
            'region_id' => '1',
        ]);
        $admin->assignRole('admin');

        $user1 = User::create([
            'nip' => '1234',
            'nama' => 'Ronaldo Staff',
            'email' => 'bagus1@gmail.com',
            'password' => bcrypt('password'),
            'no_phone' => '081738113',
            'jabatan_id' => '1',
            'region_id' => '1',
        ]);
        $user1->assignRole('user');

        $user2 = User::create([
            'nip' => '1235',
            'nama' => 'Messi Staff',
            'email' => 'bagus12@gmail.com',
            'password' => bcrypt('password'),
            'no_phone' => '081738114',
            'jabatan_id' => '2',
            'region_id' => '1',
        ]);
        $user2->assignRole('user');

        $user3 = User::create([
            'nip' => '123456',
            'nama' => 'Neymar supir',
            'email' => 'bagus123@gmail.com',
            'password' => bcrypt('password'),
            'no_phone' => '081738116',
            'jabatan_id' => '3',
            'region_id' => '1',
        ]);
        $user3->assignRole('user');
    }
}
