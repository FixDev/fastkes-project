<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Faskes extends Seeder
{
    public function run()
    {
        $faskes = [
            [
                'id' => 1,
                'nama' => 'RS Grha Permata Ibu',
                'alamat' => 'Jl. K.H.M. Usman No.168, Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16425',
                'latlong' => '-6.3706925,106.8134163',
                'skor_rating' => 4.8,
                'deskripsi' => 'Menjadi Rumah Sakit Terbaik, Modern dan mampu bersaing dalam memberikan pelayanan kesehatan di Kota Depok dan sekitarnya',
                'jenis_faskes_id' => 1,
                'website' => 'https://www.grhapermataibu.com',
                'kecamatan_id' => 1,
                'jumlah_dokter' => 80,
                'jumlah_pegawai' => 200,
                'foto1' => 'permataibu01.jpg',
                'foto2' => 'permataibu02.jpg',
                'foto3' => 'permataibu03.jpg'
            ]
        ];

        foreach ($faskes as $data) {
            // insert semua data ke tabel
            $this->db->table('faskes')->insert($data);
        }
    }
}
