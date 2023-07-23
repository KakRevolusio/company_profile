<?php

namespace App\Models;

use CodeIgniter\Model;

class LapanganModel extends Model
{
    protected $table = 'lapangan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['gambar', 'nama', 'jabatan'];
}
