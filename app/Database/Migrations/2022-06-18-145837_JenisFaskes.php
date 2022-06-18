<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisFaskes extends Migration
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
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '30',
                'null' => false
            ],
        ]);

        $this->forge->addKey('id', TRUE);


        $this->forge->createTable('jenis_faskes', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('jenis_faskes');
    }
}
