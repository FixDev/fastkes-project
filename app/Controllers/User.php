<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User as UserModel;


class User extends BaseController
{
  protected $user;
  public $title = 'Kelola User';

  public function __construct()
  {
    $this->user = new UserModel();
  }

  public function index()
  {
    $title = $this->title;

    // $users = $this->user->orderBy('username', 'ASC')->select('id', 'username', 'email', 'role', 'status', 'created_at', 'last_login');

    $db = \Config\Database::connect();

    $query = $db->query('select id, username, email, created_at, last_login, status, role from user');

    $users = $query->getResultArray();
    return view('admin/user/index', compact(['title', 'users']));
  }

  // public function delete($id)
  // {
  //   $komen = new KomentarModel();
  //   $komen->delete($id);
  //   return redirect('dashboard/komentar');
  // }
}
