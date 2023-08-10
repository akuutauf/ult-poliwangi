<?php

namespace Database\Seeders;

use App\Models\Layanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Layanan::create([
            'id' => 1,
            'nama_layanan' => 'Rancang Mutu Perkuliahan',
            'id_divisi' => 1,
        ]);
        Layanan::create([
            'id' => 2,
            'nama_layanan' => 'Tes Layanan Kedua',
            'id_divisi' => 1,
        ]);
    }
}
