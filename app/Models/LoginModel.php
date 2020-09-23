<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'username', 'password', 'avatar'];
    public function cek_login($username, $password)
    {
        return $this->db->table('users')
            ->where(array('username' => $username, 'password' => $password))
            ->get()->getRowArray();
    }
}
