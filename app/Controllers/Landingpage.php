<?php

namespace App\Controllers;

use App\Models\Faskes as FaskesModel;

class Landingpage extends BaseController
{
    protected $faskes;

    public function __construct()
    {
        $this->faskes = new FaskesModel();
    }

    public function home()
    {
        echo view('landing_page/layouts/header');
        echo view('landing_page/index');
        echo view('landing_page/layouts/footer');
    }
    public function faskes()
    {
        $faskes = $this->faskes->getAllFaskes();

        echo view('landing_page/layouts/header');
        echo view('landing_page/faskes', compact(['faskes']));
        echo view('landing_page/layouts/footer');
    }
}
