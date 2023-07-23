<?php

namespace App\Models;

use CodeIgniter\Model;

class FotoModel extends Model
{
    protected $table = 'foto';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul','foto'];
}
