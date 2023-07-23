<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranModel extends Model
{
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nik', 'nama', 'alamat', 'agama', 'jenis_kelamin', 'usia', 'email', 'nomor_handphone'];
}