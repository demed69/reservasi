<?php

namespace App\Models;

use CodeIgniter\Model;

class MenusModel extends Model
{
    protected $table = 'menus';
    protected $allowedFields = ['category_id', 'name', 'description', 'price', 'photo'];
}
