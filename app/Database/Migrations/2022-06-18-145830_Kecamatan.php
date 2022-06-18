<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kecamatan extends Migration
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
            ],
        ]);


        $this->forge->addKey('id', TRUE);


        $this->forge->createTable('kecamatan', TRUE);
    }

    public function down()
    {

        $this->forge->dropTable('kecamatan');
    }
}
