<?php

namespace App\Controllers;

use App\Models\Faskes as FaskesModel;
use App\Models\Komentar as KomentarModel;

class Landingpage extends BaseController
{
    protected $faskes;
    protected $komentar;

    public function __construct()
    {
        $this->faskes = new FaskesModel();
        $this->komentar = new KomentarModel();
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
    public function detail($id)
    {
        $faskes = $this->faskes->getFaskesById($id);
        $komentar = $this->komentar->join('user', 'komentar.users_id = user.id', 'inner')->join('rating', 'komentar.rating_id = rating.id')->join('faskes', 'komentar.faskes_id = faskes.id')->select('komentar.id, komentar.tanggal, komentar.isi, user.username, rating.nama as rating, faskes.nama as faskes, komentar.rating_id as nilai_rating')->where('komentar.faskes_id', $id)->findAll();

        return view('landing_page/detail_faskes', compact(['faskes', 'komentar']));
    }

    public function search()
    {
        $keyword = $this->request->getGet('keyword');
        $faskes = $this->faskes->search($keyword);
        return view('landing_page/faskes', compact(['faskes', 'keyword']));
    }

    public function komentar()
    {
        $data = $this->request->getPost();
        $this->komentar->insert($data);
        $this->session->setFlashdata('success', "Successfully created.");
        return redirect()->to('/detail-faskes/' . $data['faskes_id']);
    }
}
