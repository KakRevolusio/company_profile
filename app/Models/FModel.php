<?php

namespace App\Models;

use CodeIgniter\Model;

class FModel extends Model
{
    protected $table = 'pertanyaan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['isi', 'balasan'];

    public function get_pertanyaan()
    {
        return $this->findAll();
    }
}
