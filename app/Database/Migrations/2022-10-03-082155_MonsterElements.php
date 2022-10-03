<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MonsterElements extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => TRUE
            ],
            'element_title' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ]
        ]);
        $this->forge->addKey('id',true);
        $this->forge->createTable('monster_elements');
    }

    public function down()
    {
        $this->forge->dropTable('monster_elements');
    }
}
