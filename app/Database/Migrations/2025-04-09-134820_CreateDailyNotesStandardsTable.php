<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDailyNotesStandardsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'daily_note_id' => ['type' => 'INT', 'unsigned' => true],
            'standard_id'   => ['type' => 'INT', 'unsigned' => true],
        ]);

        $this->forge->addForeignKey('daily_note_id', 'daily_notes', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('standard_id', 'standards', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addKey(['daily_note_id', 'standard_id'], true); // composite PK

        $this->forge->createTable('daily_note_standards');
    }

    public function down()
    {
        $this->forge->dropTable('daily_note_standards');

    }
}
