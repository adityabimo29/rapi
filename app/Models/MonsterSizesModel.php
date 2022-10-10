<?php

namespace App\Models;

use CodeIgniter\Model;

class MonsterSizesModel extends Model
{
    protected $table            = 'monster_sizes';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['size_title'];

}
