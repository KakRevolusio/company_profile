<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\VideoModel;

class Video extends BaseController
{
    public function index()
    {
        $model = new VideoModel();
        $data['videos'] = $model->findAll();

        return view('video/index', $data);
    }

    public function admin()
    {
        $model = new VideoModel();
        $data['videos'] = $model->findAll();

        return view('admin/video/index', $data);
    }

    public function create()
    {
        return view('admin/video/create');
    }
    
    public function store()
    {
        $model = new VideoModel();
        $image = $this->request->getFile('video');

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
                'judul' => $this->request->getPost('judul'),
                'video' => $imageName,
            ];
            $model->insert($data);
        }
    
        return redirect()->to('/admin/video');
    }

    public function edit($id)
{
    $model = new VideoModel();
    $data['video'] = $model->find($id);

    return view('admin/video/edit', $data);
}

public function update($id)
{
    $model = new VideoModel();
    $image = $this->request->getFile('video');

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
            'video' => $imageName,
        ];
        $model->update($id, $data);
    } else {
        // Jika tidak ada unggahan gambar baru, perbarui informasi foto tanpa mengubah nama file gambar
        $data = [
            'judul' => $this->request->getPost('judul'),
        ];
        $model->update($id, $data);
    }

    return redirect()->to('/admin/video');
}
public function delete($id)
{
    $model = new VideoModel();
    $model->where('id', $id)->delete();

    return redirect()->to('/admin/vidio');
}
}

