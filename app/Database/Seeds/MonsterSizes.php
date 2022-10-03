<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MonsterSizes extends Seeder
{
    public function run()
    {
        $data = [
            'size_title' => 'Large'
        ];

        // $this->db->query("INSERT INTO monster_sizes  () VALUES ()",$data);

        $this->db->table('monster_sizes')->insert($data);

    }
}
