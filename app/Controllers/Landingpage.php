<?php

namespace App\Controllers;

class Landingpage extends BaseController
{
    public function home()
    {
        echo view('landing_page/layouts/header');
        echo view('landing_page/index');
        echo view('landing_page/layouts/footer');
    }
    public function faskes()
    {
        echo view('landing_page/layouts/header');
        echo view('landing_page/faskes');
        echo view('landing_page/layouts/footer');
    }
    public function login()
    {
        echo view('landing_page/auth/login');
    }
    public function register()
    {
        echo view('landing_page/layouts/header');
        echo view('landing_page/faskes');
        echo view('landing_page/layouts/footer');
    }
}
