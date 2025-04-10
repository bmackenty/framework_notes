<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStatusesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'status_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('id', true); // Primary Key
        $this->forge->createTable('statuses');
    }

    public function down()
    {
        $this->forge->dropTable('statuses');

    }
}