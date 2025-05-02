<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'dasboard | cafe Shop'

        ];


        return view('admin/dasboard', $data);
    }
    public function meja()
    {
        $data = [
            'title' => 'meja | cafe Shop'

        ];


        return view('admin/meja', $data);
    }
    public function menu()
    {
        $data = [
            'title' => 'menu | cafe Shop'

        ];


        return view('admin/menu', $data);
    }

    public function pesanan()
    {
        $data = [
            'title' => 'pesanan | cafe Shop'

        ];


        return view('admin/pesanan', $data);
    }

    public function pemasukan()
    {
        $data = [
            'title' => 'pemasukan | cafe Shop'

        ];


        return view('admin/pemasukan', $data);
    }

    public function pengeluaran()
    {
        $data = [
            'title' => 'pengeluaran | cafe Shop'

        ];


        return view('admin/pengeluaran', $data);
    }

    public function kariawan()
    {
        $data = [
            'title' => 'kariawan | cafe Shop'

        ];


        return view('admin/kariawan', $data);
    }
}
