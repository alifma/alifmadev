<?php

namespace App\Controllers;

use App\Models\PrestasiModel;
use App\Models\ProjectModel;
use App\Models\SaranModel;

class Admin extends BaseController
{
    protected $saranModel;
    protected $prestasiModel;
    protected $projectModel;
    public function __construct()
    {
        $this->saranModel = new SaranModel();
        $this->prestasiModel = new PrestasiModel();
        $this->projectModel = new ProjectModel();
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
            ->orderBy('tgl', 'desc')
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
            'tgl' => 'required',
        ])) {
            return redirect()->to('/admin/addPrestasi')->withInput();
        }
        $this->prestasiModel->save([
            'nama' => $this->request->getVar('nama'),
            'deskripsi' => $this->request->getVar('deskripsi'),
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
    public function editPrestasi($id)
    {
        isLogin();
        $data = [
            'title' => "Edit Prestasi",
            'header' => 'Ubah Prestasi',
            'validation' => \Config\Services::validation(),
            'prestasi' => $this->prestasiModel->getPrestasi($id)
        ];
        return view('admin/prestasi-edit', $data);
    }

    public function updatePrestasi($id)
    {
        isLogin();
        // Cek Judul
        $namaLama = $this->prestasiModel->getPrestasi($this->request->getVar('id'));
        if ($namaLama['nama'] == $this->request->getVar('nama')) {
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[prestasi.nama]';
        }
        if (!$this->validate([
            'nama' => $rule_nama,
            'deskripsi' => 'required',
            'tgl' => 'required',
        ])) {
            return redirect()->to('/admin/editPrestasi/' . $this->request->getVar('id'))->withInput();
        }
        $this->prestasiModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'tgl' => $this->request->getVar('tgl'),
        ]);
        session()->setFlashdata('success', 'Data berhasil diubah ');
        return redirect()->to('/admin/prestasi/');
    }

    public function Project()
    {
        isLogin();
        $project = $this->projectModel
            ->orderBy('tgl', 'desc')
            ->getProject();
        $data = [
            'title' => 'Daftar Project',
            'project' => $project,
            'header' => 'Daftar Project'
        ];
        return view('admin/project', $data);
    }

    public function delProject($id)
    {
        isLogin();
        $project = $this->projectModel->find($id);
        if ($project['logo'] != 'default.png') {
            // Hapus Gambar
            unlink('img/' . $project['logo']);
        }
        if ($project['poster'] != 'default.png') {
            // Hapus Gambar
            unlink('img/' . $project['poster']);
        }
        $this->projectModel->delete($id);
        session()->setFlashdata('success', 'Project berhasil dihapus');
        return redirect()->to('/admin/project');
    }
    public function addProject()
    {
        isLogin();
        $data = [
            'title' => "Tambah Project",
            'header' => "Add New Project",
            'validation' => \Config\Services::validation()
        ];
        return view('admin/project-add', $data);
    }
    public function saveProject()
    {
        isLogin();
        if (!$this->validate([
            'name' => 'required',
            'subname' => 'required',
            'description' => 'required',
            'partner' => 'required',
            'tgl' => 'required',
            'overview' => 'required',
            'achievement' => 'required',
            'platform' => 'required',
            'ico' => 'required',
            'size' => 'required',
            'link' => 'required',
            'logo' => [
                'rules' => 'max_size[logo,1024]|is_image[logo]|mime_in[logo,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'File is too large',
                    'is_image' => 'File must an image',
                    'mime_in' => 'File must an image'
                ]
            ],
            'poster' => [
                'rules' => 'max_size[poster,1024]|is_image[poster]|mime_in[poster,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'File is too large',
                    'is_image' => 'File must an image',
                    'mime_in' => 'File must an image'
                ]
            ]
        ])) {
            return redirect()->to('/admin/project/new')->withInput();
        }
        // Ambil gambar
        $fileLogo = $this->request->getFile('logo');
        $filePoster = $this->request->getFile('poster');
        if ($fileLogo->getError() == 4 || $filePoster->getError() == 4) {
            $namaLogo = 'default.png';
            $namaPoster = 'default.png';
        } else {
            $namaLogo = $fileLogo->getRandomName();
            $namaPoster = $filePoster->getRandomName();
            $fileLogo->move('img', $namaLogo);
            $filePoster->move('img', $namaPoster);
        }
        $this->projectModel->save([
            'name' => $this->request->getVar('name'),
            'subname' => $this->request->getVar('subname'),
            'description' => $this->request->getVar('description'),
            'partner' => $this->request->getVar('partner'),
            'tgl' => $this->request->getVar('tgl'),
            'overview' => $this->request->getVar('overview'),
            'achievement' => $this->request->getVar('achievement'),
            'platform' => $this->request->getVar('platform'),
            'ico' => $this->request->getVar('ico'),
            'size' => $this->request->getVar('size'),
            'link' => $this->request->getVar('link'),
            'logo' => $namaLogo,
            'poster' => $namaPoster,
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/admin/project');
    }
    public function editProject($id)
    {
        isLogin();
        $project = $this->projectModel
            ->getProject($id);
        $data = [
            'title' => "Update Project",
            'header' => "Edit Your Project",
            'validation' => \Config\Services::validation(),
            'project' => $project
        ];
        return view('admin/project-edit', $data);
    }
    public function update($id)
    {
        // Cek Judul
        if (!$this->validate([
            'name' => 'required',
            'subname' => 'required',
            'description' => 'required',
            'partner' => 'required',
            'tgl' => 'required',
            'overview' => 'required',
            'achievement' => 'required',
            'platform' => 'required',
            'ico' => 'required',
            'size' => 'required',
            'link' => 'required',
            'logo' => [
                'rules' => 'max_size[logo,1024]|is_image[logo]|mime_in[logo,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'File is too large',
                    'is_image' => 'File must an image',
                    'mime_in' => 'File must an image'
                ]
            ],
            'poster' => [
                'rules' => 'max_size[poster,1024]|is_image[poster]|mime_in[poster,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'File is too large',
                    'is_image' => 'File must an image',
                    'mime_in' => 'File must an image'
                ]
            ]
        ])) {
            return redirect()->to('/admin/project/edit/' . $this->request->getVar('id'))->withInput();
        }
        // Ambil logo
        $fileLogo = $this->request->getFile('logo');
        // Cek logo ada apa enggak
        if ($fileLogo->getError() == 4) {
            $namaLogo = $this->request->getVar('logoLama');
        } else {
            // Generate nama file Random
            $namaLogo = $fileLogo->getRandomName();
            $fileLogo->move('img', $namaLogo);
            if ($this->request->getVar('logoLama') != 'default.png') {
                unlink('img/' . $this->request->getVar('logoLama'));
            }
        }

        // Ambil poster
        $filePoster = $this->request->getFile('poster');
        // Cek poster ada apa enggak
        if ($filePoster->getError() == 4) {
            $namaPoster = $this->request->getVar('posterLama');
        } else {
            // Generate nama file Random
            $namaPoster = $filePoster->getRandomName();
            $filePoster->move('img', $namaPoster);
            if ($this->request->getVar('posterLama') != 'default.png') {
                unlink('img/' . $this->request->getVar('posterLama'));
            }
        }

        $this->projectModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'subname' => $this->request->getVar('subname'),
            'description' => $this->request->getVar('description'),
            'partner' => $this->request->getVar('partner'),
            'tgl' => $this->request->getVar('tgl'),
            'overview' => $this->request->getVar('overview'),
            'achievement' => $this->request->getVar('achievement'),
            'platform' => $this->request->getVar('platform'),
            'ico' => $this->request->getVar('ico'),
            'size' => $this->request->getVar('size'),
            'link' => $this->request->getVar('link'),
            'logo' => $namaLogo,
            'poster' => $namaPoster
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah ');
        return redirect()->to('/admin/project');
    }
}
