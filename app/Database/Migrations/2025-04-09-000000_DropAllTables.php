<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DropAllTables extends Migration
{
    public function up()
    {
        // Drop tables in reverse order of dependencies
        $tables = [
            'taggables',
            'tags',
            'resources',
            'daily_notes_differentiations',
            'daily_notes_concepts',
            'daily_notes_standards',
            'standards',
            'differentiation_strategies',
            'concepts',
            'daily_notes',
            'sections',
            'syllabi',
            'academic_years',
            'courses',
            'auth_identities',
            'auth_logins',
            'auth_token_logins',
            'auth_remember_tokens',
            'auth_groups_users',
            'auth_permissions_users',
            'auth_groups',
            'auth_permissions',
            'users',
            'settings'
        ];

        foreach ($tables as $table) {
            if ($this->db->tableExists($table)) {
                $this->forge->dropTable($table, true);
            }
        }
    }

    public function down()
    {
        // This migration cannot be rolled back
    }
} 