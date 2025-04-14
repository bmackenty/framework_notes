<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSectionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'course_id'     => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'name'          => ['type' => 'VARCHAR', 'constraint' => 100], // e.g., "Period 1", "Block A"
            'teacher_id'    => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'null' => true],
            'room'          => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'block'         => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true],
            'start_time'    => ['type' => 'TIME', 'null' => true],
            'end_time'      => ['type' => 'TIME', 'null' => true],
            'days_of_week'  => ['type' => 'VARCHAR', 'constraint' => 50, 'null' => true], // e.g., "Mon,Wed,Fri"
            'created_at'    => ['type' => 'DATETIME', 'null' => true],
            'updated_at'    => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('course_id', 'courses', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('teacher_id', 'users', 'id', 'SET NULL', 'CASCADE');

        $this->forge->createTable('sections');
    }

    public function down()
    {
        $this->forge->dropTable('sections');
    }
}
