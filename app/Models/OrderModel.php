<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'orders';
    protected $allowedFields = ['customer_name', 'meja_number', 'payment_method', 'note', 'total_price'];
}
