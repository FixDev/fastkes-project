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
        return view('landing_page/index');
    }
    public function faskes()
    {
        $faskes = $this->faskes->getAllFaskes();

        return view('landing_page/faskes', compact(['faskes']));
    }

    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $faskes = $this->faskes->search($keyword);
        return view('landing_page/faskes', compact(['faskes', 'keyword']));
    }
}
