<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenisFaskes extends Seeder
{
    public function run()
    {
        $jenis_faskes = [
            [
                'nama' => 'Rumah Sakit',
                'id' => 1,
            ],
            [
                'nama' => 'Klinik Gigi',
                'id' => 2,
            ],
            [
                'nama' => 'Klinik Umum',
                'id' => 3,
            ],
            [
                'nama' => 'Klinik THT',
                'id' => 4,
            ],
            [
                'nama' => 'Klinik Mata',
                'id' => 5,
            ],
            [
                'nama' => 'Puskesmas',
                'id' => 6,
            ],
            [
                'nama' => 'Apotik',
                'id' => 7,
            ]
        ];

        foreach ($jenis_faskes as $data) {
            // insert semua data ke tabel
            $this->db->table('jenis_faskes')->insert($data);
        }
    }
}
