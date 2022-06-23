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
        echo view('landing_page/layouts/footer');
    }
}
