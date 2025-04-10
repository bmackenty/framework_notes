<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCourseTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'              => 'INT',
                'unsigned'          => true,
                'auto_increment'    => true,
            ],
            'name' => [             
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'short_name' => [             
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
            'description' => [
                'type'              => 'TEXT',
                'null'              => true,
            ],
            'required_materials' => [
                'type'              => 'TEXT',
                'null'              => true,
            ],
            'created_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],
            'updated_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ], 
            'github_link' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
                'null'              => true
            ],
            'lms_link' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
                'null'              => true
            ],
            'help_link' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
                'null'              => true
            ],
            'library_link' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
                'null'              => true
            ],
            'aims' => [
                'type'              => 'TEXT',
                'null'              => true,
            ],
            'assessment' => [
                'type'              => 'TEXT',
                'null'              => true,
            ],
            'required_materials' => [
                'type'              => 'TEXT',
                'null'              => true,
            ],
            'communication' => [
                'type'              => 'TEXT',
                'null'              => true,
            ],
            'policies' => [
                'type'              => 'TEXT',
                'null'              => true,
            ],
            'rules' => [
                'type'              => 'TEXT',
                'null'              => true,
            ],
            'academic_integrity' => [
                'type'              => 'TEXT',
                'null'              => true,
            ],
            'prerequisites' => [
                'type'              => 'TEXT',
                'null'              => true,
            ]
        ]);

            $this->forge->addKey('id',true); // primary key
            $this->forge->createTable('courses');
}

    public function down()
    {
        $this->forge->dropTable('courses');
    }
}
