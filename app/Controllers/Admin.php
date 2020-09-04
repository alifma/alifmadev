<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function __construct()
    {
    }
    public function index()
    {
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
        $data = [
            'title' => 'Login',
            'header' => 'Admin Dashboard'
        ];
        return view('admin/register', $data);
    }
}
