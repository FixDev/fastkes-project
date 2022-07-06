<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Kecamatan as KecamatanModel;

class Kecamatan extends BaseController
{
  protected $kecamatan;
  public $title = 'Referensi Kecamatan';

  public function __construct()
  {
    $this->kecamatan = new KecamatanModel();
  }

  public function index()
  {
    $title = $this->title;
    $kecamatan = $this->kecamatan->orderBy('nama', 'ASC')->findAll();

    return view('admin/kecamatan/index', compact(['title', 'kecamatan']));
  }

  public function create()
  {
    $title = $this->title;
    $validation = \Config\Services::validation();
    $validation->setRules(['kecamatan' => 'required']);
    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
      $kec = new KecamatanModel();
      $kec->insert([
        "nama" => $this->request->getPost('kecamatan')
      ]);

      return redirect('dashboard/kecamatan');
    }

    return view('admin/kecamatan/add', compact(['title']));
  }

  public function edit($id)
  {
    $title = $this->title;

    $kec = new KecamatanModel();

    $kecamatan = $kec->where('id', $id)->first();

    $validation = \Config\Services::validation();
    $validation->setRules([
      'kecamatan' => 'required'
    ]);

    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
      $kec->update($id, [
        'nama' => $this->request->getPost('kecamatan')
      ]);

      return redirect('dashboard/kecamatan');
    }

    return view('admin/kecamatan/edit', compact('title', 'kecamatan'));
  }

  public function delete($id)
  {
    $kec = new KecamatanModel();
    $kec->delete($id);
    return redirect('dashboard/kecamatan');
  }
}
