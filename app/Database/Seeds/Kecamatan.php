<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Kecamatan extends Seeder
{
    public function run()
    {
        // membuat data
        $kec_data = [
            [
                'nama' => 'Beji',
            ],
            [
                'nama' => 'Bojongsari',
            ],
            [
                'nama' => 'Cilodong',
            ],
            [
                'nama' => 'Cimanggis',
            ],
            [
                'nama' => 'Cinere',
            ],
            [
                'nama' => 'Cipayung',
            ],
            [
                'nama' => 'Limo',
            ],
            [
                'nama' => 'Pancoran Mas',
            ],
            [
                'nama' => 'Sawangan',
            ],
            [
                'nama' => 'Sukmajaya',
            ],
            [
                'nama' => 'Tapos',
            ],
        ];

        foreach ($kec_data as $data) {
            // insert semua data ke tabel
            $this->db->table('kecamatan')->insert($data);
        }
    }
}
