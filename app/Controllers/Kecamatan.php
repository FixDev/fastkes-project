<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Kecamatan as KecamatanModel;

class Kecamatan extends BaseController
{
  protected $kecamatan;

  public function __construct()
  {
    $this->kecamatan = new KecamatanModel();
  }

  public function index()
  {
    $title = 'Kecamatan di Depok';
    $kecamatan = $this->kecamatan->orderBy('nama', 'ASC')->findAll();

    return view('admin/kecamatan/index', compact(['title', 'kecamatan']));
  }

  // public function add()
  // {
  //   $title = 'Tambah Jenis Faskes';
  //   $jenis = $this->jenis->findAll();

  //   return view('admin/jenis/add', compact(['title', 'jenis']));
  // }
}
