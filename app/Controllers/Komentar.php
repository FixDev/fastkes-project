<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Komentar as KomentarModel;


class Komentar extends BaseController
{
  protected $komentar;
  public $title = 'Komentar';

  public function __construct()
  {
    $this->komentar = new KomentarModel();
  }

  public function index()
  {
    $title = $this->title;
    // $query = 'select k.id, k.tanggal, k.isi, u.username, r.nama as rating, f.nama as faskes from ? k inner join ? u on k.users_id = u.id inner join ? r on k.rating_id = r.id inner join ? f on k.faskes_id = f.id ';

    // $data = $this->komentar->db->query($query, ["komentar", "user", "rating", "faskes"]);
    // $komens = $data->getRowArray();

    $komens = $this->komentar->join('user', 'komentar.users_id = user.id', 'inner')->join('rating', 'komentar.rating_id = rating.id')->join('faskes', 'komentar.faskes_id = faskes.id')->select('komentar.id, komentar.tanggal, komentar.isi, user.username, rating.nama as rating, faskes.nama as faskes, komentar.rating_id as nilai_rating')->find();
    return view('admin/komentar/index', compact(['title', 'komens']));
  }
}
