<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\BeritaterkiniModel;

class Beritaterkini extends BaseController
{
    public function index()
    {
        $model = new BeritaterkiniModel();
        $data['beritaterkinis'] = $model->findAll();

        return view('beritaterkini/index', $data);
    }

    public function admin()
    {
        $model = new BeritaterkiniModel();
        $data['beritaterkinis'] = $model->findAll();

        return view('admin/beritaterkini/index', $data);
    }

    public function create()
    {
        return view('admin/beritaterkini/create');
    }
    
    public function store()
    {
        $model = new BeritaterkiniModel();
        $image = $this->request->getFile('gambar');
    
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
                'deskripsi' => $this->request->getPost('deskripsi'),
                'gambar' => $imageName,
            ];
            $model->insert($data);
        }
    
        return redirect()->to('/admin/beritaterkini');
    }
    public function edit($id)
{
    $model = new BeritaterkiniModel();
    $data['beritaterkini'] = $model->find($id);

    return view('admin/beritaterkini/edit', $data);
}

public function update($id)
{
    $model = new BeritaterkiniModel();
    $image = $this->request->getFile('gambar');

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
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $imageName,
        ];
        $model->update($id, $data);
    } else {
        // Jika tidak ada unggahan gambar baru, perbarui informasi blog tanpa mengubah nama file gambar
        $data = [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];
        $model->update($id, $data);
    }

    return redirect()->to('/admin/beritaterkini');
}
public function delete($id)
{
    $model = new BeritaterkiniModel();
    $model->delete($id);

    return redirect()->to('/admin/beritaterkini');
}

}
