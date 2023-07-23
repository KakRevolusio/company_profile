<?php

namespace App\Controllers;

use App\Models\PesanModel;

class Pesan extends BaseController
{
    public function index()
    {
        $model = new PesanModel();

        // Mengambil semua pesan dari database
        $data['pesan'] = $model->findAll();

        return redirect()->to('/paket/index');
    }

    public function admin()
    {
        $model = new PesanModel();
        $data['pesan'] = $model->findAll();

        return view('admin/pesan/index', $data);
    }

    public function create()
    {
        echo view('/paket/create');
    }

    public function store()
    {
        $model = new PesanModel();

        // Validasi data
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'email' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'paket' => 'paket'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Simpan pesan ke database
        $model->save([
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'telepon' => $this->request->getVar('telepon'),
            'alamat' => $this->request->getVar('alamat'),
            'paket' => $this->request->getVar('paket')
        ]);

        return redirect()->to('/paket');
    }

    public function delete($id_pesan)
    {
        $model = new PesanModel();
        $model->delete($id_pesan);

        return redirect()->to('/admin/pesan');
    }
}