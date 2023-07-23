<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaterkiniModel extends Model
{
    protected $table = 'beritaterkini';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul','deskripsi','gambar'];
}
