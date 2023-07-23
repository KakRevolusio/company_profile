<?php

namespace App\Controllers;

use App\Models\KomentarModel;

class Komentar extends BaseController
{
    public function index()
    {
        $model = new KomentarModel();

        // Mengambil semua komentar dari database
        $data['komentars'] = $model->findAll();

        echo view('komentar/index', $data);
    }

    public function create()
    {
        echo view('komentar/create');
    }

    public function store()
    {
        $model = new KomentarModel();

        // Validasi data
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'komentar' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Simpan komentar ke database
        $model->save([
            'nama' => $this->request->getVar('nama'),
            'komentar' => $this->request->getVar('komentar')
        ]);

        return redirect()->to('/komentar');
    }

    public function delete($id_komentar)
    {
        $model = new KomentarModel();

        // Hapus komentar dari database berdasarkan id
        $model->delete($id_komentar);

        return redirect()->to('/komentar');
    }
}