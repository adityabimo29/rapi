<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MonsterSizes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 3,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'size_title' => [
                'type' => 'VARCHAR',
                'constraint' => 30
            ]
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('monster_sizes');
    }

    public function down()
    {
        $this->forge->dropTable('monster_sizes');
    }
}
