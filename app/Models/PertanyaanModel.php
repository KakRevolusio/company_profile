<?php

namespace App\Models;

use CodeIgniter\Model;

class PertanyaanModel extends Model
{
    protected $table = 'questions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['question', 'answer'];
}
