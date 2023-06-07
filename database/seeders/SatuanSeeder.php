<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'kode_satuan' => 'BK',
                'nm_satuan' => 'Buku'
            ],
            [
                'kode_satuan' => 'LP',
                'nm_satuan' => 'Laptop'
            ],
            [
                'kode_satuan' => '89P13',
                'nm_satuan' => 'Surgery'
            ],
            [
                'kode_satuan' => 'RX',
                'nm_satuan' => 'Ruler Xclusive'
            ]
        ]);
    }
}
