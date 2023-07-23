<?php

namespace App\Models;

use CodeIgniter\Model;

class MarketingModel extends Model
{
    protected $table = 'marketing';
    protected $primaryKey = 'id';
    protected $allowedFields = ['gambar', 'nama', 'jabatan'];
}
