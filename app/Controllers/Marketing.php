<?php

namespace App\Controllers;

use App\Models\MarketingModel;

class Marketing extends BaseController
{
    public function index()
    {
        $model = new MarketingModel();
        $data['marketing'] = $model->findAll();

        return view('marketing/index', $data);
    }

    public function admin()
    {
        $model = new MarketingModel();
        $data['marketing'] = $model->findAll();

        return view('admin/marketing/index', $data);
    }

    public function create()
    {
        $data['nama'] = ""; // Tambahkan ini untuk menginisialisasi nilai 'nama'
        $data['gambar'] = null; // Tambahkan ini untuk menginisialisasi nilai 'gambar'
        return view('admin/marketing/create', $data);
    }

    public function edit($id)
    {
        $model = new MarketingModel();
        $data['marketing'] = $model->find($id);

        return view('admin/marketing/edit', $data);
    }

    public function store()
    {
        $model = new MarketingModel();
        $image = $this->request->getFile('gambar');

        // Pastikan file gambar berhasil diunggah
        if ($image->isValid() && !$image->hasMoved()) {
            // Tentukan direktori penyimpanan file
            $uploadPath = './uploads/';

            // Generate nama unik untuk file gambar
            $imageName = $image->getRandomName();

            // Pindahkan file gambar ke direktori penyimpanan
            $image->move($uploadPath, $imageName);

            // Simpan informasi marketing beserta nama file gambar dalam database
            $data = [
                'nama' => $this->request->getPost('nama'),
                'jabatan' => $this->request->getPost('jabatan'),
                'gambar' => $imageName,
            ];
            $model->insert($data);
        }

        return redirect()->to('/admin/marketing');
    }

    public function update($id)
    {
        $model = new MarketingModel();
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

                // Perbarui informasi marketing beserta nama file gambar dalam database
                $data['gambar'] = $imageName;
            }
        }

        $model->update($id, $data);

        return redirect()->to('/admin/marketing');
    }

    public function delete($id)
    {
        $model = new MarketingModel();
        $model->delete($id);

        return redirect()->to('/admin/marketing');
    }
}
