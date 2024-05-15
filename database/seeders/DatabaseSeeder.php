<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\produk;
use App\Models\pelanggan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminkasir = [
            [
                'password' => Hash::make ('123456789'),
                'email' => 'admin@gmail.com',
                'name' => 'Admin Kasir',
                'alamat' => 'JL. VETERAN KOTA PASURUAN',
                'telepon' => '089678495967',
                'role' => 'Admin',
                'remember_token' => Str::random (60),
            ],
        ];
        User::insert($adminkasir);
        
        

        $pelanggans = [
            [
                'namapelanggan' => 'Rhmtz',
                'alamat' => 'JL.MT Haryono',
                'telepon' => '089456783945',
            ],
        ];
        pelanggan::insert($pelanggans);
    }
}
