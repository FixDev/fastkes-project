<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $title = 'Dashboard';

        return view('admin/dashboard', compact('title'));
    }
}
