<?php

namespace App\Controllers;

use App\Models\PrestasiModel;
use App\Models\SaranModel;

class Admin extends BaseController
{
    protected $saranModel;
    protected $prestasiModel;
    public function __construct()
    {
        $this->saranModel = new SaranModel();
        $this->prestasiModel = new PrestasiModel();
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
    public function prestasi()
    {
        isLogin();
        $prestasi = $this->prestasiModel
            ->orderBy('created_at', 'desc')
            ->getPrestasi();
        $data = [
            'title' => 'Prestasi',
            'prestasi' => $prestasi,
            'header' => 'Daftar Prestasi'
        ];
        return view('admin/prestasi', $data);
    }
    public function addPrestasi()
    {
        isLogin();
        $data = [
            'title' => 'Prestasi',
            'header' => 'Tambah Prestasi',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/prestasi-add', $data);
    }
    public function savePrestasi()
    {
        isLogin();
        if (!$this->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'tahun' => 'required',
            'tgl' => 'required',
        ])) {
            return redirect()->to('/admin/addPrestasi')->withInput();
        }
        $this->prestasiModel->save([
            'nama' => $this->request->getVar('nama'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'tahun' => $this->request->getVar('tahun'),
            'tgl' => $this->request->getVar('tgl'),
        ]);
        session()->setFlashdata('success', 'Prestasi Berhasil Ditambahkan');
        return redirect()->to('/admin/prestasi');
    }
    public function delPrestasi($id)
    {
        isLogin();
        $this->prestasiModel->delete($id);
        session()->setFlashdata('success', 'Prestasi berhasil dihapus');
        return redirect()->to('/admin/prestasi');
    }
}
