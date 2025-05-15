<?php

namespace App\Models;

use CodeIgniter\Model;

class PengeluaranModel extends Model
{
    protected $table = 'pengeluaran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_barang', 'jumlah', 'harga', 'tanggal'];
    protected $useTimestamps = true;
}
