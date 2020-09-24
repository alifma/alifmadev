<?php

namespace App\Controllers;

use App\Models\OrgModel;

class Org extends BaseController
{
    protected $orgModel;
    public function __construct()
    {
        $this->orgModel = new OrgModel();
    }
    public function index()
    {
        isLogin();
        $org = $this->orgModel->getOrg();
        $data = [
            'header' => 'Kemampuan ',
            'title' => 'Skill',
            'org' => $org,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/org', $data);
    }
    public function addOrg()
    {
        isLogin();
        $data = [
            'header' => 'Daftar Organisasi ',
            'title' => 'Organisasi',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/org-add', $data);
    }
    public function saveOrg()
    {
        if (!$this->validate([
            'nama' => 'required',
            'subnama' => 'required',
            'description' => 'required',
            'tgl' => 'required',
        ])) {
            return redirect()->to('/admin/org/add')->withInput();
        }
        $this->orgModel->save([
            'nama' => $this->request->getVar('nama'),
            'subnama' => $this->request->getVar('subnama'),
            'description' => $this->request->getVar('description'),
            'tgl' => $this->request->getVar('tgl'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/admin/org');
    }
    public function delOrg($id)
    {
        isLogin();
        $this->orgModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/org');
    }
}
