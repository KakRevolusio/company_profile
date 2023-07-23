<?php

namespace App\Controllers;

use App\Models\TesModel;

class Tes extends BaseController
{
    public function index()
    {
        $model = new TesModel();
        $data['tes'] = $model->findAll();

        return view('tes/index', $data);
    }

    public function admin()
    {
        $model = new TesModel();
        $data['tes'] = $model->findAll();

        return view('admin/tes/index', $data);
    }

    public function create()
    {
        return view('admin/tes/create');
    }
    
    public function store()
    {
        $model = new TesModel();
        $image = $this->request->getFile('gambar');
    
        // Pastikan file gambar berhasil diunggah
        if ($image->isValid() && !$image->hasMoved()) {
            // Tentukan direktori penyimpanan file
            $uploadPath = './uploads/';
    
            // Generate nama unik untuk file gambar
            $imageName = $image->getRandomName();
    
            // Pindahkan file gambar ke direktori penyimpanan
            $image->move($uploadPath, $imageName);
    
            // Simpan informasi tes beserta nama file gambar dalam database
            $data = [
                'judul' => $this->request->getPost('judul'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'gambar' => $imageName,
            ];
            $model->insert($data);
        }
    
        return redirect()->to('/tes/index');
    }
    public function edit($id)
{
    $model = new TesModel();
    $data['tes'] = $model->find($id);

    return view('admin/tes/edit', $data);
}

public function update($id)
{
    $model = new TesModel();
    $image = $this->request->getFile('gambar');

    // Periksa apakah ada unggahan gambar baru
    if ($image->isValid() && !$image->hasMoved()) {
        // Tentukan direktori penyimpanan file
        $uploadPath = './uploads/';

        // Generate nama unik untuk file gambar
        $imageName = $image->getRandomName();

        // Pindahkan file gambar ke direktori penyimpanan
        $image->move($uploadPath, $imageName);

        // Perbarui informasi tes beserta nama file gambar dalam database
        $data = [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $imageName,
        ];
        $model->update($id, $data);
    } else {
        // Jika tidak ada unggahan gambar baru, perbarui informasi tes tanpa mengubah nama file gambar
        $data = [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];
        $model->update($id, $data);
    }

    return redirect()->to('/admin/tes');
}
public function delete($id)
{
    $model = new TesModel();
    $model->delete($id);

    return redirect()->to('/admin/tes');
}

}
