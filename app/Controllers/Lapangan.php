<?php

namespace App\Controllers;

use App\Models\LapanganModel;

class Lapangan extends BaseController
{
    public function index()
    {
        $model = new LapanganModel();
        $data['lapangan'] = $model->findAll();

        return view('lapangan/index', $data);
    }

    public function admin()
    {
        $model = new LapanganModel();
        $data['lapangan'] = $model->findAll();

        return view('admin/lapangan/index', $data);
    }

    public function create()
    {
        $data['nama'] = ""; // Tambahkan ini untuk menginisialisasi nilai 'nama'
        $data['gambar'] = null; // Tambahkan ini untuk menginisialisasi nilai 'gambar'
        return view('admin/lapangan/create', $data);
    }

    public function edit($id)
    {
        $model = new LapanganModel();
        $data['lapangan'] = $model->find($id);

        return view('admin/lapangan/edit', $data);
    }

    public function store()
    {
        $model = new LapanganModel();
        $image = $this->request->getFile('gambar');

        // Pastikan file gambar berhasil diunggah
        if ($image->isValid() && !$image->hasMoved()) {
            // Tentukan direktori penyimpanan file
            $uploadPath = './uploads/';

            // Generate nama unik untuk file gambar
            $imageName = $image->getRandomName();

            // Pindahkan file gambar ke direktori penyimpanan
            $image->move($uploadPath, $imageName);

            // Simpan informasi lapangan beserta nama file gambar dalam database
            $data = [
                'nama' => $this->request->getPost('nama'),
                'jabatan' => $this->request->getPost('jabatan'),
                'gambar' => $imageName,
            ];
            $model->insert($data);
        }

        return redirect()->to('/admin/lapangan');
    }

    public function update($id)
    {
        $model = new LapanganModel();
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

                // Perbarui informasi lapangan beserta nama file gambar dalam database
                $data['gambar'] = $imageName;
            }
        }

        $model->update($id, $data);

        return redirect()->to('/admin/lapangan');
    }

    public function delete($id)
    {
        $model = new LapanganModel();
        $model->delete($id);

        return redirect()->to('/admin/lapangan');
    }
}
