<?php

namespace App\Controllers;

use App\Models\SaranModel;

class Admin extends BaseController
{
    protected $saranModel;
    public function __construct()
    {
        $this->saranModel = new SaranModel();
    }
    public function index()
    {
        isLogin();
        $data = [
            'title' => 'Dashboard',
            'header' => 'Admin Dashboard'
        ];
        return view('admin/index', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login',
            'header' => 'Admin Dashboard'
        ];
        return view('admin/login', $data);
    }
    public function signup()
    {
        isLogin();
        $data = [
            'title' => 'Login',
            'header' => 'Admin Dashboard'
        ];
        return view('admin/register', $data);
    }
    public function saran()
    {
        isLogin();
        $saran = $this->saranModel->getSaran();
        $data = [
            'title' => 'Saran',
            'saran' => $saran,
            'header' => 'Daftar Saran'
        ];
        return view('admin/saran', $data);
    }
}
