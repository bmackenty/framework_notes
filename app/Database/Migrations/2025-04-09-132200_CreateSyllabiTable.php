<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSyllabiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'               => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'course_id'        => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'academic_year_id' => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'version_number'   => ['type' => 'INT', 'constraint' => 4, 'default' => 1],
            'title'            => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true],
            'content'          => ['type' => 'MEDIUMTEXT'],
            'is_active'        => ['type' => 'BOOLEAN', 'default' => true],
            'created_by'       => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true],
            'created_at'       => ['type' => 'DATETIME', 'null' => true],
            'updated_at'       => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('course_id', 'courses', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('academic_year_id', 'academic_years', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('created_by', 'users', 'id', 'SET NULL', 'CASCADE');

        $this->forge->createTable('syllabi');
    }

    public function down()
    {
        $this->forge->dropTable('syllabi');

    }
}
