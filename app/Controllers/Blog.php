<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data['blogs'] = $model->findAll();

        return view('blog/index', $data);
    }

    public function admin()
    {
        $model = new BlogModel();
        $data['blogs'] = $model->findAll();

        return view('admin/blog/index', $data);
    }

    public function create()
    {
        return view('admin/blog/create');
    }
    
    public function store()
    {
        $model = new BlogModel();
        $image = $this->request->getFile('image');
    
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
                'title' => $this->request->getPost('title'),
                'description' => $this->request->getPost('description'),
                'image' => $imageName,
            ];
            $model->insert($data);
        }
    
        return redirect()->to('/admin');
    }
    public function edit($id)
{
    $model = new BlogModel();
    $data['blog'] = $model->find($id);

    return view('admin/blog/edit', $data);
}

public function update($id)
{
    $model = new BlogModel();
    $image = $this->request->getFile('image');

    // Periksa apakah ada unggahan gambar baru
    if ($image->isValid() && !$image->hasMoved()) {
        // Tentukan direktori penyimpanan file
        $uploadPath = './uploads/';

        // Generate nama unik untuk file gambar
        $imageName = $image->getRandomName();

        // Pindahkan file gambar ke direktori penyimpanan
        $image->move($uploadPath, $imageName);

        // Perbarui informasi blog beserta nama file gambar dalam database
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image' => $imageName,
        ];
        $model->update($id, $data);
    } else {
        // Jika tidak ada unggahan gambar baru, perbarui informasi blog tanpa mengubah nama file gambar
        $data = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];
        $model->update($id, $data);
    }

    return redirect()->to('/admin/blog');
}
public function delete($id)
{
    $model = new BlogModel();
    $model->delete($id);

    return redirect()->to('/admin/blog');
}

}
