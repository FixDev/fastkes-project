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
        $q = new JenisModel();

        $validation = \Config\Services::validation();
        $validation->setRules(['nama' => 'required']);

        if ($this->request->getMethod() === "post") {
            if (!$this->validate([
                'nama' => 'required',
            ])) {
                $this->session->setFlashdata('error', $this->validator->listErrors());
                return redirect()->route('jenis-create', compact(['title']));
            }
            try {
                $q->insert([
                    "nama" => $this->request->getPost('nama')
                ]);
                $this->session->setFlashdata('success', "Successfully created.");
                return redirect()->route('jenis-index'); //memaksa redirect menggunakan GET biar logic ini ga kepanggil setelah create selesai

            } catch (\Throwable $th) {
                $this->session->setFlashdata('error', "Failed to create. Error Code : " . $th->getCode());
                return redirect()->route('jenis-index', compact(['title']));
            }
        }

        return view('admin/jenis/add', compact(['title']));
    }

    public function edit($id)
    {
        $title = 'Edit Jenis Faskes';
        $q = new JenisModel();
        $jenis = $q->where('id', $id)->first();

        $validation = \Config\Services::validation();
        $validation->setRules(['nama' => 'required']);

        if ($this->request->getMethod() === "post") {
            if (!$this->validate([
                'nama' => 'required',
            ])) {
                $this->session->setFlashdata('error', $this->validator->listErrors());
                return redirect()->to("dashboard/jenis/" . $id . "/edit"); //memaksa redirect menggunakan GET biar logic ini ga kepanggil setelah create selesai
            }
            try {
                $q->update($id, [
                    "nama" => $this->request->getPost('nama')
                ]);
                $this->session->setFlashdata('success', "Successfully created.");
                return redirect()->route('jenis-index');
            } catch (\Throwable $th) {
                $this->session->setFlashdata('error', "Failed to create. Error Code : " . $th->getCode());
                return redirect()->route('jenis-index', compact(['title']));
            }
        }

        return view('admin/jenis/edit', compact(['title', 'jenis']));
    }

    public function delete($id)
    {
        $q = new JenisModel();
        try {
            $q->delete($id);
            $this->session->setFlashdata('success', "Successfully deleted.");
        } catch (\Throwable $th) {
            $this->session->setFlashdata('error', "Failed to delete. Error Code : " . $th->getCode());
        }
        return redirect()->route('jenis-index');
    }
}
