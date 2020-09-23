<?php

namespace App\Controllers;

use App\Models\SkillModel;

class Skill extends BaseController
{
    protected $skillModel;
    public function __construct()
    {
        $this->skillModel = new SkillModel();
    }
    public function index()
    {
        isLogin();
        $skill = $this->skillModel->getSkill();
        $data = [
            'header' => 'Kemampuan ',
            'title' => 'Profile',
            'skill' => $skill,
            'validation' => \Config\Services::validation()
        ];
        return view('admin/skill', $data);
    }
    public function addSkill()
    {
        isLogin();
        $data = [
            'header' => 'Kemampuan ',
            'title' => 'Profile',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/skill-add', $data);
    }
    public function saveSkill()
    {
        if (!$this->validate([
            'skill' => 'required',
            'color' => 'required'
        ])) {
            return redirect()->to('/contact')->withInput();
        }
        $this->skillModel->save([
            'skill' => $this->request->getVar('skill'),
            'color' => $this->request->getVar('color'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/admin/skill');
    }
    public function delSkill($id)
    {
        isLogin();
        $this->skillModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/skill');
    }
}
