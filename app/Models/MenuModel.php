<?php

namespace App\Models;

use CodeIgniter\Model;

class MenusModel extends Model
{
    protected $table = 'menus';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'kategori', 'deskripsi', 'harga', 'gambar'];
    protected $useTimestamps = true;
}
