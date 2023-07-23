<?php

namespace App\Controllers;

use App\Models\PencapaianModel;

class Pencapaian extends BaseController
{
    public function index()
    {
        $model = new PencapaianModel();
        $data['pencapaian'] = $model->findAll();

        return view('pencapaian/index', $data);
    }

    public function index1()
    {
        $model = new PencapaianModel();
        $data['pencapaian'] = $model->findAll();

        return view('pencapaian/index', $data);
    }

    public function admin()
    {
        $model = new PencapaianModel();
        $data['pencapaian'] = $model->findAll();

        return view('admin/pencapaian/index', $data);
    }

    public function create()
    {
        $data['judul'] = ""; // Tambahkan ini untuk menginisialisasi nilai 'nama'
        $data['foto'] = null; // Tambahkan ini untuk menginisialisasi nilai 'gambar'
        return view('admin/pencapaian/create', $data);
    }

    public function edit($id)
    {
        $model = new PencapaianModel();
        $data['pencapaian'] = $model->find($id);

        return view('admin/pencapaian/edit', $data);
    }

    public function store()
    {
        $model = new PencapaianModel();
        $image = $this->request->getFile('foto');

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
                'judul' => $this->request->getPost('judul'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'foto' => $imageName,
            ];
            $model->insert($data);
        }

        return redirect()->to('/admin/pencapaian');
    }

    public function update($id)
    {
        $model = new PencapaianModel();
        $data = [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];
        $image = $this->request->getFile('foto');

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
                $data['foto'] = $imageName;
            }
        }

        $model->update($id, $data);

        return redirect()->to('/admin/pencapaian');
    }

    public function delete($id)
    {
        $model = new PencapaianModel();
        $model->where('id', $id)->delete();
        

        return redirect()->to('/admin/pencapaian');
    }
}