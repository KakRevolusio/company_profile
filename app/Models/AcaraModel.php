<?php

namespace App\Models;

use CodeIgniter\Model;

class AcaraModel extends Model
{
    protected $table = 'acara';
    protected $primaryKey = 'id';
    protected $allowedFields = ['jidul', 'keterangan', 'poto'];
}
