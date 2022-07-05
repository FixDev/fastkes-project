<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'tanggal'       => [
                'type'           => 'DATE',
            ],
            'isi'      => [
                'type'           => 'TEXT',
            ],
            'users_id'      => [
                'type'           => 'BIGINT',
                'constraint'     => '5',
                'unsigned'       => TRUE
            ],
            'rating_id'      => [
                'type'           => 'BIGINT',
                'constraint'     => '5',
                'unsigned'       => TRUE
            ],
            'faskes_id'      => [
                'type'           => 'BIGINT',
                'constraint'     => '5',
                'unsigned'       => TRUE
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignKey('users_id', 'user', 'id');
        $this->forge->addForeignKey('rating_id', 'rating', 'id');
        $this->forge->addForeignKey('faskes_id', 'faskes', 'id');

        $this->forge->createTable('komentar', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('komentar');
    }
}
