<?php

namespace App\Controllers;

use App\Models\AlatModel;

class Alat extends BaseController
{
    public function index()
    {
        $request = \Config\Services::request();
        $model = new AlatModel();
        $data['alat'] = $model->findAll();
        if(
            $request->getPost('search')
        ){
            $keyword=$request->getPost('search');
            $data['alat'] = $model->where('nama', $keyword)->get()->getResultArray();
        }
       

        return view('alat/index', $data);
    }

    public function admin()
    {
        $model = new AlatModel();
        $data['alat'] = $model->findAll();

        return view('admin/alat/index', $data);
    }
 
    public function create()
    {
        $data['nama'] = ""; // Tambahkan ini untuk menginisialisasi nilai 'nama'
        $data['gambar'] = null; // Tambahkan ini untuk menginisialisasi nilai 'gambar'
        return view('admin/alat/create', $data);
    }

                                                                                                                                                                                                public function edit($id)
                                                                                                                                                                                                {
                                                                                                                                                                                                    $model = new AlatModel();
                                                                                                                                                                                                    $data['alat'] = $model->find($id);

                                                                                                                                                                                                    return view('admin/alat/edit', $data);
                                                                                                                                                                                                }

    public function store()
    {
        $model = new AlatModel();
        $image = $this->request->getFile('gambar');

        // Pastikan file gambar berhasil diunggah
        if ($image->isValid() && !$image->hasMoved()) {
            // Tentukan direktori penyimpanan file
            $uploadPath = './uploads/';

            // Generate nama unik untuk file gambar
            $imageName = $image->getRandomName();

            // Pindahkan file gambar ke direktori penyimpanan
            $image->move($uploadPath, $imageName);

            // Simpan informasi alat beserta nama file gambar dalam database
            $data = [
                'nama' => $this->request->getPost('nama'),
                'spesifikasi' => $this->request->getPost('spesifikasi'),
                'gambar' => $imageName,
            ];
            $model->insert($data);
        }

        return redirect()->to('/admin/alat');
    }

    public function update($id)
    {
        $model = new AlatModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'spesifikasi' => $this->request->getPost('spesifikasi'),
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

                // Perbarui informasi alat beserta nama file gambar dalam database
                $data['gambar'] = $imageName;
            }
        }

        $model->update($id, $data);

        return redirect()->to('/admin/alat');
    }

    public function delete($id)
    {
        $model = new AlatModel();
        $model->delete($id);

        return redirect()->to('/admin/alat');
    }
}
