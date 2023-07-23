<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
	protected $table = 'product';
	protected $primaryKey = 'id';
	protected $useAutoIncrement  = true;
	protected $allowedFields = ['name', 'type', 'img_path', 'description', 'price'];
}				