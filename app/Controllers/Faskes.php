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

    public function create()
    {
        $data = $this->request->getPost();
        $foto = $this->request->getFiles();
        foreach ($foto as $i => $f) {
            if ($f->getError() == 0) {
                $f->move('faskes/', $f->getName());
                $data[$i] = $f->getName();
            }
        }
        $this->faskes->insert($data);

        return redirect()->to('/dashboard/faskes');
    }

    public function edit()
    {
        $title = 'Edit Faskes';
        $id = $this->request->getGet('id');
        $faskes = $this->faskes->first($id);
        $jenis_faskes = $this->jenis->findAll();
        $kecamatan = $this->kecamatan->findAll();
        return view('admin/faskes/edit', compact(['title', 'faskes', 'jenis_faskes', 'kecamatan']));
    }

    public function update($id)
    {
        $id = $this->request->getGet('id');
        $data = $this->request->getPost();
        $foto = $this->request->getFiles();
        $real_data = $this->faskes->where('id', $id)->first();
        foreach ($foto as $i => $f) {
            if ($f->getError() == 0) {
                $f->move('faskes/', $f->getName());
                $data[$i] = $f->getName();
                unlink('faskes/' . $real_data[$i]);
            }
        }
        $this->faskes->update($id, $data);

        return redirect()->to('/dashboard/faskes');
    }

    public function delete($id)
    {
        $real_data = $this->faskes->where('id', $id)->first();
        for ($i = 1; $i <= 3; $i++) {
            if ($real_data["foto$i"] != null) {
                unlink('faskes/' . $real_data["foto$i"]);
            }
        }
        $this->faskes->delete($id);
        return redirect()->to('/dashboard/faskes');
    }
}
