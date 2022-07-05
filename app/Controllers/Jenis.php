<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jenis as JenisModel;

class Jenis extends BaseController
{
    protected $jenis;

    public function __construct()
    {
        $this->jenis = new JenisModel();
    }

    public function index()
    {
        $title = 'Jenis Faskes';
        $jenis = $this->jenis->findAll();

        return view('admin/jenis/index', compact(['title', 'jenis']));
    }

    public function add()
    {
        $title = 'Tambah Jenis Faskes';
        $jenis = $this->jenis->findAll();

        return view('admin/jenis/add', compact(['title', 'jenis']));
    }
}
