<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDailyNotesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                 => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'course_id'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'section_id'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'note_date'          => ['type' => 'DATE'],
            'lesson_objectives'  => ['type' => 'TEXT', 'null' => true],
            'content'            => ['type' => 'MEDIUMTEXT'],
            'created_by'         => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'created_at'         => ['type' => 'DATETIME', 'null' => true],
            'updated_at'         => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('course_id', 'courses', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('section_id', 'sections', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('created_by', 'users', 'id', 'SET NULL', 'CASCADE');

        $this->forge->createTable('daily_notes');
    }

    public function down()
    {
        $this->forge->dropTable('daily_notes');
    }
}
