<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTagsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'auto_increment' => true, 'unsigned' => true],
            'name'       => ['type' => 'VARCHAR', 'constraint' => 255],
            'category'   => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true], // e.g., "topic", "grade", "format"
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('name');

        $this->forge->createTable('tags');
    }
    

    public function down()
    {
        $this->forge->dropTable('tags');

    }
}
