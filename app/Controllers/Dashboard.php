<?php

namespace App\Controllers;

use App\Models\Faskes as FaskesModel;
use App\Models\Jenis as JenisModel;
use App\Models\Rating as RatingModel;
use App\Models\Komentar as KomentarModel;

class Dashboard extends BaseController
{
    protected $faskes;
    protected $jenis;
    protected $rating;
    protected $komentar;

    public function __construct()
    {
        $this->faskes = new FaskesModel();
        $this->jenis = new JenisModel();
        $this->rating = new RatingModel();
        $this->komentar = new KomentarModel();
    }

    public function index()
    {
        $data = [
            'totalFaskes'   => $this->faskes->countAllFaskes(),
            'totalJenis'    => $this->jenis->countAllJenis(),
            'avgRating'     => $this->rating->avgAllRating()[0]['nama'],
            'totalKomentar' => $this->komentar->countAllKomentar(),
            'title'         => 'Dashboard',
        ];

        // dd($data);

        return view('admin/dashboard', $data);
    }
}
