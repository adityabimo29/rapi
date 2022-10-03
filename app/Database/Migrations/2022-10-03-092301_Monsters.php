<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Monsters extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 6,
                'unsigned' => true,
                'auto_increment' => TRUE
            ],
            'level' => [
                'type' => 'INT',
                'constraint' => 3
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'hp' => [
                'type' => 'INT',
                'constraint' => 6
            ],
            'attack' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'size_id' => [
                'type' => 'INT',
                'constraint' => 6
            ],
            'race_id' => [
                'type' => 'INT',
                'constraint' => 6
            ],
            'element_id' => [
                'type' => 'INT',
                'constraint' => 6
            ],
            'def' => [
                'type' => 'INT',
                'constraint' => 6
            ],
            'mdef' => [
                'type' => 'INT',
                'constraint' => 6
            ],
            'base_exp' => [
                'type' => 'INT',
                'constraint' => 6
            ],
            'job_exp' => [
                'type' => 'INT',
                'constraint' => 6
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ],
        ]);
        $this->forge->addKey('id',true);
        $this->forge->addForeignKey('size_id', 'monster_sizes', 'id');
        $this->forge->addForeignKey('race_id', 'monster_races', 'id');
        $this->forge->addForeignKey('element_id', 'monster_elements', 'id');
        $this->forge->createTable('monsters');
    }

    public function down()
    {
        $this->forge->dropTable('monsters');
    }
}
