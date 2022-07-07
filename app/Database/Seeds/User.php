<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $users = [
            [
                'username' => 'admin',
                'id' => 1,
                'password' => '827ccb0eea8a706c4c34a16891f84e7b',
                'email' => 'admin@gmail.com',
                'created_at' => '2022-06-12 00:32:05',
                'last_login' => '2022-06-12 00:32:05',
                'status' => 1,
                'role' => 'administrator'
            ],
            [
                'username' => 'aminah',
                'id' => 2,
                'password' => '90b74c589f46e8f3a484082d659308bd',
                'email' => 'aminahcantik@gmail.com',
                'created_at' => '2022-06-12 00:32:05',
                'last_login' => '2022-06-12 00:32:05',
                'status' => 1,
                'role' => 'public'
            ],
        ];

        foreach ($users as $data) {
            // insert semua data ke tabel
            $this->db->table('user')->insert($data);
        }
    }
}
