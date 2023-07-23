<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AcaraModel;

class Acara extends BaseController
{
    public function index()
    {
        $model = new AcaraModel();
        $data['acaras'] = $model->findAll();

        return view('acara/index', $data);
    }

    public function admin()
    {
        $model = new AcaraModel();
        $data['acaras'] = $model->findAll();

        return view('admin/acara/index', $data);
    }

    public function create()
    {
        return view('admin/acara/create');
    }

    public function store()
    {
        $model = new AcaraModel();
        $image = $this->request->getFile('poto');

        // Pastikan file gambar berhasil diunggah
        if ($image->isValid() && !$image->hasMoved()) {
            // Tentukan direktori penyimpanan file
            $uploadPath = './uploads/';

            // Generate nama unik untuk file gambar
            $imageName = $image->getRandomName();

            // Pindahkan file gambar ke direktori penyimpanan
            $image->move($uploadPath, $imageName);

            // Simpan informasi acara beserta nama file gambar dalam database
            $data = [
                'jidul' => $this->request->getPost('jidul'),
                'keterangan' => $this->request->getPost('keterangan'),
                'poto' => $imageName,
            ];
            $model->insert($data);
        }

        return redirect()->to('/admin/acara');
    }

    public function edit($id)
    {
        $model = new AcaraModel();
        $data['acara'] = $model->find($id);

        return view('admin/acara/edit', $data);
    }

    public function update($id)
    {
        $model = new AcaraModel();
        $image = $this->request->getFile('poto');

        // Pastikan file gambar berhasil diunggah
        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Tentukan direktori penyimpanan file
            $uploadPath = './uploads/';

            // Generate nama unik untuk file gambar
            $imageName = $image->getRandomName();

            // Pindahkan file gambar ke direktori penyimpanan
            $image->move($uploadPath, $imageName);

            // Perbarui informasi acara beserta nama file gambar dalam database
            $data = [
                'jidul' => $this->request->getPost('jidul'),
                'keterangan' => $this->request->getPost('keterangan'),
                'poto' => $imageName,
            ];
            $model->update($id, $data);
        } else {
            // Jika tidak ada unggahan gambar baru, perbarui informasi acara tanpa mengubah nama file gambar
            $data = [
                'jidul' => $this->request->getPost('jidul'),
                'keterangan' => $this->request->getPost('keterangan'),
            ];
            $model->update($id, $data);
        }

        return redirect()->to('/admin/acara');
    }

    public function delete($id)
    {
        $model = new AcaraModel();
        $model->where('id', $id)->delete();
    
        return redirect()->to('/admin/acara');
    }
}
