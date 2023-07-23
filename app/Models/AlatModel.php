<?php

namespace App\Models;

use CodeIgniter\Model;

class AlatModel extends Model
{
    protected $table = 'alat';
    protected $primaryKey = 'id';
    protected $allowedFields = ['gambar', 'nama', 'spesifikasi'];
}
