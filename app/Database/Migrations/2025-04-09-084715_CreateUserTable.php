<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField([

        'id' => [
            'type'              => 'INT',
            'unsigned'          => true,
            'auto_increment'    => true,
        ],
        'username' => [             
            'type'              => 'VARCHAR',
            'constraint'        => 255,
        ],
        'email' => [             
            'type'              => 'VARCHAR',
            'constraint'        => 255,
            'null'              => true,
        ],
        'created_at' => [
            'type'              => 'DATETIME',
            'null'              => true,
        ],
        'updated_at' => [
            'type'              => 'DATETIME',
            'null'              => true,
        ], 
        'status_id' => [
            'type'              => 'INT',
            'null'              => true,
            'unsigned'          => true,
        ], 


        ]);

        $this->forge->addKey('id',true); // primary key
        $this->forge->addForeignKey('status_id', 'statuses', 'id', 'SET NULL', 'CASCADE');
        $this->forge->createTable('users');
    }



    public function down()
    {
        $this->forge->dropTable('users');

    }
}
