<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'menu | cafe Shop'

        ];


        return view('pages/home', $data);
    }
    public function keranjang()
    {
        $data = [
            'title' => 'pesanan | cafe Shop'

        ];


        return view('pages/keranjang', $data);
    }
}
