<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateResourcesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => ['type' => 'INT', 'unsigned' => true, 'auto_increment' => true],
            'title'        => ['type' => 'VARCHAR', 'constraint' => 255],
            'type'         => ['type' => 'ENUM("file", "link")', 'default' => 'file'],
            'file_path'    => ['type' => 'VARCHAR', 'constraint' => 512, 'null' => true],
            'url'          => ['type' => 'VARCHAR', 'constraint' => 512, 'null' => true],
            'description'  => ['type' => 'TEXT', 'null' => true],
            'uploaded_by'  => ['type' => 'INT', 'unsigned' => true],
            'created_at'   => ['type' => 'DATETIME', 'null' => true],
            'updated_at'   => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('uploaded_by', 'users', 'id', 'SET NULL', 'CASCADE');

        $this->forge->createTable('resources');
    }

    public function down()
    {
        $this->forge->dropTable('resources');

    }
}
