<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Admin extends BaseController
{
    public function edit($id)
    {
        $menuModel = new MenuModel();

        // Validasi data input
        $validation = \Config\Services::validation();
        // existing code...
    }
}
