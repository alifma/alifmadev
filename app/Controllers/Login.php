<?php

namespace App\Controllers;

use App\Models\LoginModel;

class Login extends BaseController
{
    protected $session;
    public function __construct()
    {
        helper('login');
        $session = \Config\Services::session();
        $this->loginModel = new LoginModel();
    }
    public function index()
    {
        if (!(session()->get('username') == '')) {
            return redirect()->to('admin');
        } else {
            $data = [
                'title' => 'Login',
                'header' => 'Login Pages'
            ];
            return view('admin/login', $data);
        }
    }
    public function cek_login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $cek = $this->loginModel->cek_login($username, $password);
        if ($cek) {
            if (($cek['username'] == $username) && ($cek['password'] == $password)) {
                session()->set('id', $cek['id']);
                session()->set('username', $cek['username']);
                session()->set('created_at', $cek['created_at']);
                session()->set('updated_at', $cek['updated_at']);
                session()->set('nama', $cek['nama']);
                session()->set('level', $cek['level']);
                session()->set('avatar', $cek['avatar']);
                return redirect()->to(base_url('admin'));
            }
        } else {
            // Jika username dan password salah
            session()->setFlashdata('gagal', 'Incorrect username or password!');
            return redirect()->to(base_url('login'));
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
