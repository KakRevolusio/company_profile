<?php

namespace App\Models;

use CodeIgniter\Model;

class BerandaModel extends Model
{
    protected $table = 'beranda';
    protected $primaryKey = 'id';
    protected $allowedFields = ['gambar'];
}
