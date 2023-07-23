<?php

namespace App\Models;

use CodeIgniter\Model;

class Jawaban_model extends Model
{
    protected $table = 'jawaban';
    protected $primaryKey = 'id';
    protected $allowedFields = ['pertanyaan_id', 'isi'];

    public function get_jawaban($pertanyaan_id)
    {
        return $this->where('pertanyaan_id', $pertanyaan_id)->findAll();
    }

    public function simpan_jawaban($data)
    {
        return $this->insert($data);
    }
}
