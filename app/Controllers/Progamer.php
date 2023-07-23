<?php

namespace App\Controllers;

use App\Models\ProgamerModel;

class progamer extends BaseController
{
    public function index()
    {
        $model = new ProgamerModel();
        $data['progamer'] = $model->findAll();
        $data['progamer'] = $model->orderBy('id', 'DESC')->findAll(3);
        return view('progamer/index', $data);
    }

    public function admin()
    {
        $model = new ProgamerModel();
        $data['progamer'] = $model->findAll();

        return view('admin/progamer/index', $data);
    }

    public function create()
    {
        $data['nama'] = ""; // Tambahkan ini untuk menginisialisasi nilai 'nama'
        $data['gambar'] = null; // Tambahkan ini untuk menginisialisasi nilai 'gambar'
        return view('admin/progamer/create', $data);
    }

    public function edit($id)
    {
        $model = new ProgamerModel();
        $data['progamer'] = $model->find($id);

        return view('admin/progamer/edit', $data);
    }

    public function store()
    {
        $model = new ProgamerModel();
        $image = $this->request->getFile('gambar');

        // Pastikan file gambar berhasil diunggah
        if ($image->isValid() && !$image->hasMoved()) {
            // Tentukan direktori penyimpanan file
            $uploadPath = './uploads/';

            // Generate nama unik untuk file gambar
            $imageName = $image->getRandomName();

            // Pindahkan file gambar ke direktori penyimpanan
            $image->move($uploadPath, $imageName);

            // Simpan informasi progamer beserta nama file gambar dalam database
            $data = [
                'nama' => $this->request->getPost('nama'),
                'jabatan' => $this->request->getPost('jabatan'),
                'gambar' => $imageName,
            ];
            $model->insert($data);
        }

        return redirect()->to('/admin/progamer');
    }

    public function update($id)
    {
        $model = new ProgamerModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
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

                // Perbarui informasi progamer beserta nama file gambar dalam database
                $data['gambar'] = $imageName;
            }
        }

        $model->update($id, $data);

        return redirect()->to('/admin/progamer');
    }

    public function delete($id)
    {
        $model = new ProgamerModel();
        $model->delete($id);

        return redirect()->to('/admin/progamer');
    }
}
