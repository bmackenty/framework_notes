<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDailyNotesConceptsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'daily_note_id' => ['type' => 'INT', 'unsigned' => true],
            'concept_id'    => ['type' => 'INT', 'unsigned' => true],
        ]);

        $this->forge->addForeignKey('daily_note_id', 'daily_notes', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('concept_id', 'concepts', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addKey(['daily_note_id', 'concept_id'], true);

        $this->forge->createTable('daily_note_concepts');
    }

    public function down()
    {
        $this->forge->dropTable('daily_note_concepts');

    }
}
