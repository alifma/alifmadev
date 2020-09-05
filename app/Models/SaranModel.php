<?php

namespace App\Models;

use CodeIgniter\Model;

class SaranModel extends Model
{
    protected $table = 'saran';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'email', 'posisi', 'saran'];
    public function getSaran($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
