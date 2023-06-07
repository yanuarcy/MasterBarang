<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'BKID1945',
                'nm_barang' => 'The Journey of Laravel',
                'hg_barang' => 46000,
                'desc_barang' => 'Sebuah buku petualang tentang laravel',
                'satuan_id' => 1
            ],
            [
                'kode_barang' => 'LP261',
                'nm_barang' => 'Asus Laptop',
                'hg_barang' => 5603000,
                'desc_barang' => 'Laptop Asus Core i7',
                'satuan_id' => 2
            ],
            [
                'kode_barang' => '89P13',
                'nm_barang' => 'Obat Bius',
                'hg_barang' => 28000,
                'desc_barang' => 'Obat bius untuk musang',
                'satuan_id' => 3
            ],
            [
                'kode_barang' => 'RX426',
                'nm_barang' => 'Ruler Luxury',
                'hg_barang' => 37000,
                'desc_barang' => 'Penggaris dengan kemewahannya',
                'satuan_id' => 4
            ]
        ]);
    }
}
