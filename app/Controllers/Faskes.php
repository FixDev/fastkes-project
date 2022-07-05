<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Faskes as FaskesModel;
use App\Models\Jenis as JenisModel;
use App\Models\Kecamatan as KecamatanModel;

class Faskes extends BaseController
{
    protected $faskes;
    protected $jenis;
    protected $kecamatan;

    public function __construct()
    {
        $this->faskes = new FaskesModel();
        $this->jenis = new JenisModel();
        $this->kecamatan = new KecamatanModel();
    }

    public function index()
    {
        $title = 'Faskes';
        $faskes = $this->faskes->getAllFaskes();

        return view('admin/faskes/index', compact(['title', 'faskes']));
    }

    public function add()
    {
        $title = 'Tambah Faskes';
        $jenis_faskes = $this->jenis->findAll();
        $kecamatan = $this->kecamatan->findAll();

        return view('admin/faskes/add', compact(['title', 'jenis_faskes', 'kecamatan']));
    }
}
