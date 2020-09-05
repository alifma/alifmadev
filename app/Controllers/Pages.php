<?php

namespace App\Controllers;

use App\Models\SaranModel;

class Pages extends BaseController
{
    protected $saranModel;
    public function __construct()
    {
        $this->saranModel = new SaranModel();
    }
    public function index()
    {
        return view('pages/index');
    }
    public function profile()
    {
        $data = [
            'title' => 'Profile',
        ];
        return view('pages/profile', $data);
    }
    public function project()
    {
        $data = [
            'title' => 'Project',
        ];
        return view('pages/project', $data);
    }

    public function blog()
    {
        $data = [
            'title' => 'Blog',
        ];
        return view('pages/blog', $data);
    }
    public function saran()
    {
        isLogin();
        $saran = $this->saranModel->getSaran();
        $data = [
            'title' => 'List Saran',
            'saran' => $saran,
        ];
        return view('admin/saran', $data);
    }

    public function addSaran()
    {
        $data = [
            'title' => "Add Saran",
            'validation' => \Config\Services::validation()
        ];
        return view('pages/saran', $data);
    }

    public function savesaran()
    {
        if (!$this->validate([
            'email' => 'required|valid_email',
            'saran' => 'required',
            'nama' => 'required'
        ])) {
            return redirect()->to('/contact')->withInput();
        }
        $this->saranModel->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'position' => $this->request->getVar('position'),
            'saran' => $this->request->getVar('saran'),
        ]);
        session()->setFlashdata('pesan', 'Saran berhasil ditambahkan');
        return redirect()->to('/contact');
    }

    public function delSaran($id)
    {
        isLogin();
        $this->saranModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/saran');
    }
}