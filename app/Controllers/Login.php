<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Login extends BaseController
{
    protected $users;

    public function __construct()
    {
        $this->users = new User();
    }

    public function Auth()
    {
        $title = 'Login';
        $data = $this->request->getPost();
        $user = $this->users->where('email', $data['email'])->first();
        if ($user) {
            if ($user['password'] == md5($data['password'])) {
                session()->set('username', $user['username']);
                session()->set('id', $user['id']);
                session()->set('role', $user['role']);
                session()->set('status', $user['status']);
                session()->set('last_login', $user['last_login']);
                session()->set('created_at', $user['created_at']);
                session()->set('islogin', true);
                $this->session->setFlashdata('success', "Successfully logged in.");
                if ($user['role'] == 'administrator') {
                    return redirect()->to('/dashboard');
                } else {
                    return redirect()->to('/');
                }
            } else {
                $this->session->setFlashdata('error', "Invalid Credential");
                return redirect()->to('/login');
            }
        } else {
            $this->session->setFlashdata('error', "Invalid Credential");
            return redirect()->to('/login');
        }
    }

    public function login()
    {
        $title = 'Login';
        return view('landing_page/auth/login', compact('title'));
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }

    public function register()
    {
        $title = 'Register';
        return view('landing_page/auth/register', compact('title'));
    }

    public function registered()
    {
        $data = $this->request->getPost();
        $username_email = explode('@', $data['email']);
        $username = $username_email[0];
        $email = $data['email'];
        $created_at = date('Y-m-d H:i:s');
        $status = 1;
        $role = 'public';
        $password = md5($data['password']);

        $this->users->insert([
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'created_at' => $created_at,
            'status' => $status,
            'role' => $role
        ]);

        $this->session->setFlashdata('success', "Successfully registered.");
        return redirect()->to('/login');
    }
}
