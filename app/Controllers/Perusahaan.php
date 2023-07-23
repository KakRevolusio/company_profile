<?php

namespace App\Controllers;

use App\Models\PerusahaanModel;

class Perusahaan extends BaseController
{
    public function index()
    {
        $model = new PerusahaanModel();
        $data['perusahaan'] = $model->findAll();

        return view('perusahaan/index', $data);
    }

    public function admin()
    {
        $model = new PerusahaanModel();
        $data['perusahaan'] = $model->findAll();

        return view('admin/perusahaan/index', $data);
    }

    public function create()
    {
        $model = new PerusahaanModel();
        $data['perusahaan'] = $model->findAll();
        $data['nama'] = ""; // Initialize the 'nama' variable
        $data['gambar'] = null; // Initialize the 'gambar' variable
        return view('admin/perusahaan/create', $data);
    }
    
    public function edit($id)
    {
        $model = new PerusahaanModel();
        $data['perusahaan'] = $model->find($id);
    
        return view('admin/perusahaan/edit', $data);
    }
    

    public function store()
    {
        $model = new PerusahaanModel();
        $image = $this->request->getFile('gambar');

        // Pastikan file gambar berhasil diunggah
        if ($image->isValid() && !$image->hasMoved()) {
            // Tentukan direktori penyimpanan file
            $uploadPath = './uploads/';

            // Generate nama unik untuk file gambar
            $imageName = $image->getRandomName();

            // Pindahkan file gambar ke direktori penyimpanan
            $image->move($uploadPath, $imageName);

            // Simpan informasi perusahaan beserta nama file gambar dalam database
            $data = [
                'nama' => $this->request->getPost('nama'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'gambar' => $imageName,
            ];
            $model->insert($data);
        }

        return redirect()->to('/admin/perusahaan');
    }

    public function update($id)
    {
        $model = new PerusahaanModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];
        $image = $this->request->getFile('gambar');

        // Periksa apakah ada unggahan gambar baru
        if ($image !== null && $image->getName() !== '') {
            // Pastikan file gambar berhasil diunggah
            if ($image->isValid() && !$image->hasMoved()) {
                // Tentukan direktori penyimpanan file
                $uploadPath = './uploads/';

                // Generate nama unik untuk file gambar
                $imageName = $image->getRandomName();

                // Pindahkan file gambar ke direktori penyimpanan
                $image->move($uploadPath, $imageName);

                // Perbarui informasi perusahaan beserta nama file gambar dalam database
                $data['gambar'] = $imageName;
            }
        }

        $model->update($id, $data);

        return redirect()->to('/admin/perusahaan');
    }

    public function delete($id)
    {
        $model = new PerusahaanModel();
        $model->delete($id);

        return redirect()->to('/admin/perusahaan');
    }
}
