<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Komentar extends Seeder
{
    public function run()
    {
        $komentar = [
            [
                'tanggal' => '2022-06-12',
                'id' => 1,
                'isi' => 'layanan nya baik',
                'users_id' => 2,
                'rating_id' => 4,
                'faskes_id' => 1
            ]
        ];

        foreach ($komentar as $data) {
            // insert semua data ke tabel
            $this->db->table('komentar')->insert($data);
        }
    }
}
