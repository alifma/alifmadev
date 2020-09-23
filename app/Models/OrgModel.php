<?php

namespace App\Models;

use CodeIgniter\Model;

class OrgModel extends Model
{
    protected $table = 'org';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'subnama', 'description', 'tgl'];
    public function getOrg($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
