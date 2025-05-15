<?php

namespace App\Models;

use CodeIgniter\Model;

class MejaModel extends Model
{
    protected $table = 'meja';
    protected $primaryKey = 'id';
    protected $allowedFields = ['table_number', 'status'];
    protected $useTimestamps = true;
}
