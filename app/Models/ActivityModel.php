<?php

namespace App\Models;

use CodeIgniter\Model;

class ActivityModel extends Model
{
	protected $table = 'activity';
	protected $primaryKey = 'id';
	protected $useAutoIncrement  = true;
	protected $allowedFields = ['title', 'status', 'end_date', 'description', 'img_path'];
}				