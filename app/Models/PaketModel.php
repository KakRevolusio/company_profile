<?php

namespace App\Models;

use CodeIgniter\Model;

class PaketModel extends Model
{
    protected $table = 'paket';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kecepatan', 'harga', 'deskripsi', 'detail', 'foto'];
}