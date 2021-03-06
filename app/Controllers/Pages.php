<?php

namespace App\Controllers;

use App\Models\ExpModel;
use App\Models\OrgModel;
use App\Models\PrestasiModel;
use App\Models\ProjectModel;
use App\Models\SaranModel;
use App\Models\SkillModel;

class Pages extends BaseController
{
    protected $session;
    protected $saranModel;
    protected $prestasiModel;
    protected $projectModel;
    protected $orgModel;
    protected $skillModel;
    protected $expModel;
    public function __construct()
    {
        $session = \Config\Services::session();
        $this->saranModel = new SaranModel();
        $this->prestasiModel = new PrestasiModel();
        $this->projectModel = new ProjectModel();
        $this->skillModel = new SkillModel();
        $this->orgModel = new OrgModel();
        $this->expModel = new ExpModel();
    }
    public function index()
    {
        return view('pages/index');
    }
    public function profile()
    {
        $prestasi = $this->prestasiModel
            ->orderBy('tgl', 'desc')
            ->getPrestasi();
        $skill = $this->skillModel->getSkill();
        $org = $this->orgModel->orderBy('tgl', 'desc')->getOrg();
        $exp = $this->expModel->orderBy('tgl', 'desc')->getExp();
        $data = [
            'title' => 'Profile',
            'prestasi' => $prestasi,
            'skill' => $skill,
            'org' => $org,
            'exp' => $exp,
        ];
        return view('pages/profile', $data);
    }
    public function project()
    {
        $project = $this->projectModel
            ->orderBy('tgl', 'desc')
            ->getProject();
        $data = [
            'title' => 'Project',
            'project' => $project
        ];
        return view('pages/project', $data);
    }

    public function projectDetail($id)
    {
        $project = $this->projectModel
            ->getProject($id);
        if ($project == null) {
            session()->setFlashdata('gagal', 'Proyek tidak ditemukan!');
            return redirect()->to(base_url('project'));
        } else {
            $data = [
                'title' => 'Project Detail',
                'project' => $project
            ];
            return view('pages/projectDetail', $data);
        }
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
        $saran = $this->saranModel->select('SELECT * ');
        $data = [
            'title' => 'List Saran',
            'saran' => $saran,
        ];
        return view('admin/saran', $data);
    }

    public function addSaran()
    {
        $data = [
            'title' => "Kontak",
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
