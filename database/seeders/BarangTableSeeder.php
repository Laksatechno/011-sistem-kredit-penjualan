<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barangData = [
            [
                'nama_barang' => 'Samsung Smart TV',
                'jenis_id' => 5,
                'merk' => 'Samsung',
                'stok' => 50,
                'satuan' => 'unit',
                'harga' => 5000000,
            ],
            [
                'nama_barang' => 'LG LED TV',
                'jenis_id' => 5,
                'merk' => 'LG',
                'stok' => 30,
                'satuan' => 'unit',
                'harga' => 4500000,
            ],
            [
                'nama_barang' => 'Panasonic Kulkas 2 Pintu',
                'jenis_id' => 2,
                'merk' => 'Panasonic',
                'stok' => 20,
                'satuan' => 'unit',
                'harga' => 3500000,
            ],
            [
                'nama_barang' => 'Sharp Kulkas 1 Pintu',
                'jenis_id' => 2,
                'merk' => 'Sharp',
                'stok' => 25,
                'satuan' => 'unit',
                'harga' => 2500000,
            ],
            [
                'nama_barang' => 'LG Mesin Cuci Front Load',
                'jenis_id' => 3,
                'merk' => 'LG',
                'stok' => 15,
                'satuan' => 'unit',
                'harga' => 4000000,
            ],
            [
                'nama_barang' => 'Samsung Mesin Cuci Top Load',
                'jenis_id' => 3,
                'merk' => 'Samsung',
                'stok' => 18,
                'satuan' => 'unit',
                'harga' => 3500000,
            ],
            [
                'nama_barang' => 'Panasonic Microwave Inverter',
                'jenis_id' => 4,
                'merk' => 'Panasonic',
                'stok' => 40,
                'satuan' => 'unit',
                'harga' => 1500000,
            ],
            [
                'nama_barang' => 'Sharp Microwave Grill',
                'jenis_id' => 4,
                'merk' => 'Sharp',
                'stok' => 35,
                'satuan' => 'unit',
                'harga' => 1300000,
            ],
            [
                'nama_barang' => 'Daikin Air Conditioner 1 PK',
                'jenis_id' => 1,
                'merk' => 'Daikin',
                'stok' => 10,
                'satuan' => 'unit',
                'harga' => 3000000,
            ],
            [
                'nama_barang' => 'LG Air Conditioner 2 PK',
                'jenis_id' => 1,
                'merk' => 'LG',
                'stok' => 12,
                'satuan' => 'unit',
                'harga' => 5000000,
            ],
        ];

        foreach ($barangData as $key => $val) {
            Barang::create($val);
        }
    }
}
