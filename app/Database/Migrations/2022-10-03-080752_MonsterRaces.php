<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MonsterRaces extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'race_title'=>[
                'type'          => 'VARCHAR',
                'constraint'    => 50
            ]
        ]);

        $this->forge->addKey('id',true);
        $this->forge->createTable('monster_races');
    }

    public function down()
    {
        $this->forge->dropTable('monster_races');
    }
}
