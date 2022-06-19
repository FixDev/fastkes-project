<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $header['title'] = 'Dashboard';
        echo view('layouts/header', $header);
        echo view('layouts/topbar');
        echo view('layouts/side_menu');
        echo view('dashboard');
        echo view('layouts/footer');
    }
}
