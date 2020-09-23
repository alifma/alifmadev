<?php

namespace App\Models;

use CodeIgniter\Model;

class SkillModel extends Model
{
    protected $table = 'skill';
    protected $useTimestamps = true;
    protected $allowedFields = ['skill', 'color'];
    public function getSkill($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
