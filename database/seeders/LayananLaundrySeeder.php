<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LayananLaundry;

class LayananLaundrySeeder extends Seeder
{
    public function run(): void
    {   
        LayananLaundry::create([
            'nama_layanan' => 'Cuci Biasa',
            'harga_perkilo' => 5000,
            'harga_permeter' => null,
            'harga_satuan' => null
        ]);

        LayananLaundry::create([
            'nama_layanan' => 'Cuci Kilat',
            'harga_perkilo' => 10000,
            'harga_permeter' => null,
            'harga_satuan' => null
        ]);

        LayananLaundry::create([
            'nama_layanan' => 'Cuci Karpet',
            'harga_permeter' => 15000,
            'harga_perkilo' => null,
            'harga_satuan' => null
        ]);
    }
}