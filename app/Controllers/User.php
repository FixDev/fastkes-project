<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User as UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;


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

  public function preview($id)
  {
    $title = $this->title;

    $users = $this->user->where('id', $id)->first();

    if (!compact(['users'])) {
      throw PageNotFoundException::forPageNotFound();
    }

    return view('admin/user/detail', compact('title', 'users'));
  }

  public function create()
  {
    $title = $this->title;
    $validation = \Config\Services::validation();
    $validation->setRules([
      'username' => 'required',
      'password' => 'required',
      'retypepassword' => 'required',
      'email' => 'required',
      'role' => 'required'
    ]);

    if ($this->request->getPost('password') !== $this->request->getPost('retypepassword')) {
      $this->session->setFlashdata('error', "Password tidak sesuai!");
    }

    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
      $this->user->insert([
        "username" => $this->request->getPost('username'),
        "password" => md5($this->request->getPost('password')),
        "email" => $this->request->getPost('email'),
        "status" => 0,
        "role" => $this->request->getPost('role'),
        "created_at" => date('Y-m-d H:i:s')
      ]);

      return redirect('dashboard/user');
    }

    return view('admin/user/add', compact(['title']));
  }

  public function edit($id)
  {
    $title = $this->title;

    $user = $this->user->where('id', $id)->first();

    $validation = \Config\Services::validation();
    $validation->setRules([
      'username' => 'required',
      'email' => 'required',
      'role' => 'required',
      'status' => 'required'
    ]);

    $isDataValid = $validation->withRequest($this->request)->run();

    if ($isDataValid) {
      $this->user->update($id, [
        'username' => $this->request->getPost('username'),
        'email' => $this->request->getPost('email'),
        'role' => $this->request->getPost('role'),
        'status' => $this->request->getPost('status')
      ]);

      return redirect('dashboard/user');
    }

    return view('admin/user/edit', compact('title', 'user'));
  }

  public function delete($id)
  {
    try {
      $this->user->delete($id);
      $this->session->setFlashdata('success', "Successfully deleted.");
    } catch (\Throwable $th) {
      $this->session->setFlashdata('error', "Failed to delete. Error Code : " . $th->getCode());
    }
    return redirect('dashboard/user');
  }
}
