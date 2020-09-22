<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'project';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'subname', 'description', 'tgl', 'overview', 'achievement', 'partner', 'platform', 'ico', 'size', 'link', 'logo', 'poster'];
    public function getProject($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
