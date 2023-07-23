<?php

namespace App\Models;

use CodeIgniter\Model;

class PesanModel extends Model
{
    protected $table = 'pesan';
    protected $primaryKey = 'id_pesan';
    protected $allowedFields = ['nama', 'email', 'telepon', 'alamat', 'paket'];
}