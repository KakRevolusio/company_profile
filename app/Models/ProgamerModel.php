<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgamerModel extends Model
{
    protected $table = 'progamer';
    protected $primaryKey = 'id';
    protected $allowedFields = ['gambar', 'nama', 'jabatan'];
}
