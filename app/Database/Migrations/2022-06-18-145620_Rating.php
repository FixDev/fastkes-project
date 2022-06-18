<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rating extends Migration
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
                'constraint'     => '20',
            ],
        ]);

        $this->forge->addKey('id', TRUE);


        $this->forge->createTable('rating', TRUE);
    }

    public function down()
    {

        $this->forge->dropTable('rating');
    }
}
