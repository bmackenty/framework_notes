<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTaggablesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'tag_id'       => ['type' => 'INT', 'unsigned' => true],
            'taggable_id'  => ['type' => 'INT', 'unsigned' => true],
            'taggable_type'=> ['type' => 'VARCHAR', 'constraint' => 100], // e.g., 'daily_note', 'resource'
        ]);

        $this->forge->addForeignKey('tag_id', 'tags', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addKey(['tag_id', 'taggable_id', 'taggable_type'], true);

        $this->forge->createTable('taggables'); 
    }

    public function down()
    {
        $this->forge->dropTable('taggables'); 

    }
}
