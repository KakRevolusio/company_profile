<?php

namespace App\Models;

use CodeIgniter\Model;

class PencapaianModel extends Model
{
    protected $table = 'pencapaian';
    protected $primaryKey = 'id';
    protected $allowedFields = ['deskripsi', 'judul', 'foto'];
}
