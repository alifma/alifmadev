<?php

namespace App\Controllers;

use App\Models\ExpModel;

class Exp extends BaseController
{
    protected $expModel;
    public function __construct()
    {
        $this->expModel = new ExpModel();
    }
    public function index()
    {
        isLogin();
        $exp = $this->expModel->getExp();
        $data = [
            'header' => 'Pengalaman ',
            'title' => 'Experience',
            'exp' => $exp,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/exp', $data);
    }
    public function add()
    {
        isLogin();
        $data = [
            'header' => 'Tambah Pengalaman ',
            'title' => 'Add Experience',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/exp-add', $data);
    }
    public function edit($id)
    {
        isLogin();
        $exp = $this->expModel->find($id);
        $data = [
            'header' => 'Ubah Pengalaman ',
            'title' => 'Edit Experience',
            'validation' => \Config\Services::validation(),
            'exp' => $exp
        ];
        return view('admin/exp-edit', $data);
    }
    public function del($id)
    {
        isLogin();
        $exp = $this->expModel->find($id);
        if ($exp['logo'] != 'default.png') {
            // Hapus Gambar
            unlink('img/exp/' . $exp['logo']);
        }
        $this->expModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/exp');
    }

    public function save()
    {
        if (!$this->validate([
            'nama' => 'required',
            'posisi' => 'required',
            'deskripsi' => 'required',
            'periode' => 'required',
            'tgl' => 'required',
            'logo' => [
                'rules' => 'max_size[logo,1024]|is_image[logo]|mime_in[logo,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'File is too large',
                    'is_image' => 'File must an image',
                    'mime_in' => 'File must an image'
                ]
            ],
        ])) {
            return redirect()->to('/admin/exp/add')->withInput();
        }
        // Ambil gambar
        $fileLogo = $this->request->getFile('logo');
        if ($fileLogo->getError() == 4) {
            $namaLogo = 'default.png';
        } else {
            $namaLogo = $fileLogo->getRandomName();
            $fileLogo->move('img/exp/', $namaLogo);
        }
        $this->expModel->save([
            'nama' => $this->request->getVar('nama'),
            'posisi' => $this->request->getVar('posisi'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'periode' => $this->request->getVar('periode'),
            'tgl' => $this->request->getVar('tgl'),
            'logo' => $namaLogo
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/admin/exp');
    }

    public function update($id)
    {
        // Cek Judul
        if (!$this->validate([
            'nama' => 'required',
            'posisi' => 'required',
            'deskripsi' => 'required',
            'periode' => 'required',
            'tgl' => 'required',
            'logo' => [
                'rules' => 'max_size[logo,1024]|is_image[logo]|mime_in[logo,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'File is too large',
                    'is_image' => 'File must an image',
                    'mime_in' => 'File must an image'
                ]
            ],
        ])) {
            return redirect()->to('/admin/exp/add')->withInput();
        }
        // Ambil logo
        $fileLogo = $this->request->getFile('logo');
        // Cek logo ada apa enggak
        if ($fileLogo->getError() == 4) {
            $namaLogo = $this->request->getVar('logoLama');
        } else {
            // Generate nama file Random
            $namaLogo = $fileLogo->getRandomName();
            $fileLogo->move('img/exp/', $namaLogo);
            if ($this->request->getVar('logoLama') != 'default.png') {
                unlink('img/exp/' . $this->request->getVar('logoLama'));
            }
        }
        $this->expModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'posisi' => $this->request->getVar('posisi'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'periode' => $this->request->getVar('periode'),
            'tgl' => $this->request->getVar('tgl'),
            'logo' => $namaLogo
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah ');
        return redirect()->to('/admin/exp');
    }
}
