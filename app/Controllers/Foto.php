<?php

namespace App\Controllers;

use App\Models\FotoModel;

class foto extends BaseController
{
    public function index()
    {
        $model = new FotoModel();
        $data['fotos'] = $model->findAll();

        return view('foto/index', $data);
    }

    public function admin()
    {
        $model = new fotoModel();
        $data['fotos'] = $model->findAll();

        return view('admin/foto/index', $data);
    }

    public function create()
    {
        return view('admin/foto/create');
    }
    
    public function store()
    {
        $model = new FotoModel();
        $image = $this->request->getFile('foto');
    
        // Pastikan file gambar berhasil diunggah
        if ($image->isValid() && !$image->hasMoved()) {
            // Tentukan direktori penyimpanan file
            $uploadPath = './uploads/';
    
            // Generate nama unik untuk file gambar
            $imageName = $image->getRandomName();
    
            // Pindahkan file gambar ke direktori penyimpanan
            $image->move($uploadPath, $imageName);
    
            // Simpan informasi blog beserta nama file gambar dalam database
            $data = [
                'id' => $this->request->getPost('id'),
                'judul' => $this->request->getPost('judul'),
                'foto' => $imageName,
            ];
            $model->insert($data);
        }
    
        return redirect()->to('/admin/foto');
    }
    
    public function edit($id)
{
    $model = new fotoModel();
    $data['foto'] = $model->find($id);

    return view('admin/foto/edit', $data);
}

public function update($id)
{
    $model = new FotoModel();
    $image = $this->request->getFile('foto');

    // Periksa apakah ada unggahan gambar baru
    if ($image->isValid() && !$image->hasMoved()) {
        // Tentukan direktori penyimpanan file
        $uploadPath = './uploads/';

        // Generate nama unik untuk file gambar
        $imageName = $image->getRandomName();

        // Pindahkan file gambar ke direktori penyimpanan
        $image->move($uploadPath, $imageName);

        // Perbarui informasi foto beserta nama file gambar dalam database
        $data = [
            'judul' => $this->request->getPost('judul'),
            'foto' => $imageName,
        ];
        $model->update($id, $data);
    } else {
        // Jika tidak ada unggahan gambar baru, perbarui informasi foto tanpa mengubah nama file gambar
        $data = [
            'judul' => $this->request->getPost('judul'),
        ];
        $model->update($id, $data);
    }

    return redirect()->to('/admin/foto');
}
public function delete($id)
{
    $model = new FotoModel();
    $model->delete($id);

    return redirect()->to('/admin/foto');
}

}
