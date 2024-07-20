<?php

namespace Database\Seeders;

use App\Models\JenisBarang;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class JenisBarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenisBarangData = [
            [
                'nama_jenis' => 'Air Conditioner',
            ],
            [
                'nama_jenis' => 'Kulkas',
            ],
            [
                'nama_jenis' => 'Mesin Cuci',
            ],
            [
                'nama_jenis' => 'Microwave',
            ],
            [
                'nama_jenis' => 'Televisi',
            ],
        ];


        foreach ($jenisBarangData as $key => $val) {
            JenisBarang::create($val);
        }
    }
}
