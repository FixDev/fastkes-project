<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Nilai extends Seeder
{
    public function run()
    {
        $nilai = [
            [
                'nama' => 'Jelek',
                'id' => 1
            ],
            [
                'nama' => 'Kurang Bagus',
                'id' => 2
            ],
            [
                'nama' => 'Biasa Saja',
                'id' => 3
            ],
            [
                'nama' => 'Bagus',
                'id' => 4
            ],
            [
                'nama' => 'Sangat Bagus',
                'id' => 5
            ]
        ];

        foreach ($nilai as $data) {
            // insert semua data ke tabel
            $this->db->table('rating')->insert($data);
        }
    }
}
