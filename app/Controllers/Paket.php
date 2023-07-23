<?php

namespace App\Controllers;

use App\Models\PaketModel;

class Paket extends BaseController
{
    public function index()
    {
        $model = new PaketModel();

        // Mengambil semua paket dari database
        $data['paket'] = $model->findAll();

        echo view('paket/index', $data);
    }

    public function admin()
    {
        $model = new PaketModel();
        $data['paket'] = $model->findAll();

        return view('admin/paket/index', $data);
    }
    
    public function create()
    {
        $data['kecepatan'] = "";
        $data['harga'] = "";
        $data['deskripsi'] = "";
        $data['detail'] = "";
        return view('admin/paket/create', $data);
    }

    public function store()
    {
        $model = new PaketModel();

        // Validasi data
        $validation =  \Config\Services::validation();
        $validation->setRules([
            'kecepatan' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'detail' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Simpan pesan ke database
        $model->save([
            'kecepatan' => $this->request->getVar('kecepatan'),
            'harga' => $this->request->getVar('harga'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'detail' => $this->request->getVar('detail')
        ]);

        return redirect()->to('/admin/paket');
    }

    public function edit($id)
    {
        $model = new PaketModel();
        $data['paket'] = $model->find($id);

        return view('admin/paket/edit', $data);
    }

    public function delete($id_pesan)
    {
        $model = new PaketModel();

        // Hapus pesan dari database berdasarkan id
        $model->delete($id_pesan);

        return redirect()->to('/admin/paket');
    }

    public function update($id)
    {
        $model = new PaketModel();
        $data = [
            'kecepatan' => $this->request->getPost('kecepatan'),
            'harga' => $this->request->getPost('harga'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'detail' => $this->request->getPost('detail'),
        ];

        $model->update($id, $data);
        

        // Redirect atau tampilkan pesan sukses jika diperlukan
        return redirect()->to('/admin/paket')->with('status', 'Pertanyaan berhasil diperbarui');
    }
}