<?php

namespace App\Models;

use CodeIgniter\Model;

class TesModel extends Model
{
    protected $table = 'testimony';
    protected $primaryKey = 'id';
    protected $allowedFields = ['gambar', 'judul', 'deskripsi'];
}
