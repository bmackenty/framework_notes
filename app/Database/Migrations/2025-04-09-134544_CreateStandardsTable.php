<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStandardsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'code'         => ['type' => 'VARCHAR', 'constraint' => 100], // e.g., IB.CS.2.1.2
            'description'  => ['type' => 'TEXT', 'null' => true],
            'subject_area' => ['type' => 'VARCHAR', 'constraint' => 100, 'null' => true], // e.g., "IB CS", "CCSS Math"
            'created_at'   => ['type' => 'DATETIME', 'null' => true],
            'updated_at'   => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('code');

        $this->forge->createTable('standards');
    }

    public function down()
    {
        $this->forge->dropTable('standards');

    }
}
