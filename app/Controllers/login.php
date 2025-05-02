<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'menu | cafe Shop'

        ];


        return view("login/login");
    }


    public function daftar(): string
    {
        $data = [
            'title' => 'menu | cafe Shop'

        ];


        return view("login/daftar");
    }
}
