<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDailyNotesDifferentiationsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'daily_note_id' => ['type' => 'INT', 'unsigned' => true],
            'strategy_id'   => ['type' => 'INT', 'unsigned' => true],
        ]);

        $this->forge->addForeignKey('daily_note_id', 'daily_notes', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('strategy_id', 'differentiation_strategies', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addKey(['daily_note_id', 'strategy_id'], true);

        $this->forge->createTable('daily_note_differentiation_strategies');
    }

    public function down()
    {
        $this->forge->dropTable('daily_note_differentiation_strategies');

    }
}
