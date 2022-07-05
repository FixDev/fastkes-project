<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'BIGINT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'username'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
                'unique'         => TRUE
            ],
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '200',
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '40',
                'unique'         => TRUE
            ],
            'created_at'       => [
                'type'           => 'TIMESTAMP',
                'null'           => TRUE
            ],
            'last_login'       => [
                'type'           => 'TIMESTAMP',
                'null'           => TRUE
            ],
            'status'       => [
                'type'           => 'SMALLINT',
                'constraint'     => '1',
            ],
            'role'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
        ]);

        $this->forge->addKey('id', TRUE);


        $this->forge->createTable('user', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
