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
        $db      = \Config\Database::connect();
        $res     = $db->query("
        SELECT SUM(src_kali.jumlah) / SUM(src_tambah.qty) as avg
        FROM (SELECT r.nama, SUM(r.id) as jumlah
        FROM komentar k
        join rating r on k.rating_id = r.id
        GROUP BY r.nama) src_kali, (SELECT  r.id as IDnya, r.nama, COUNT(r.id) as qty
        FROM komentar k
        JOIN rating r on r.id = k.rating_id
        GROUP BY r.id) src_tambah
        ")->getFirstRow();
        
        $data = [
            'totalFaskes'   => $this->faskes->countAllFaskes(),
            'totalJenis'    => $this->jenis->countAllJenis(),
            'avgRating'     => number_format((float)round($res->avg), 2, '.', ''),
            'totalKomentar' => $this->komentar->countAllKomentar(),
            'title'         => 'Dashboard',
        ];

        return view('admin/dashboard', $data);
    }
}
