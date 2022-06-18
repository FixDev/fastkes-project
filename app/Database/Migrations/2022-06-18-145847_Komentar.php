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
                'type'           => 'INT',
            ],
            'rating_id'      => [
                'type'           => 'INT',
            ],
            'faskes_id'      => [
                'type'           => 'INT',
            ],
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->addKey('users_id');
        $this->forge->addKey('rating_id');
        $this->forge->addKey('faskes_id');


        $this->forge->createTable('komentar', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('komentar');
    }
}
