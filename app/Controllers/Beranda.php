<?php

namespace App\Controllers;

use App\Models\BerandaModel;
use App\Models\PencapaianModel;

class Beranda extends BaseController
{
    public function index()
    {
      
        $model = new BerandaModel();
        $data['beranda'] = $model->findAll();
        $model = new PencapaianModel();
        $data['pencapaian'] = $model->orderBy('id', 'DESC')->findAll(3);

        
        return view('beranda/index', $data);

     
    }

    public function admin()
    {
        $model = new BerandaModel();
        $data['beranda'] = $model->findAll();

        return view('admin/beranda/index', $data);
    }

    public function create()
    {
        return view('admin/beranda/create');
    }
    
    public function store()
    {
        $model = new BerandaModel();
        $image = $this->request->getFile('gambar');
    
        // Pastikan file gambar berhasil diunggah
        if ($image->isValid() && !$image->hasMoved()) {
            // Tentukan direktori penyimpanan file
            $uploadPath = './uploads/';
    
            // Generate nama unik untuk file gambar
            $imageName = $image->getRandomName();
    
            // Pindahkan file gambar ke direktori penyimpanan
            $image->move($uploadPath, $imageName);
    
            // Simpan informasi beranda beserta nama file gambar dalam database
            $data = [
                'gambar' => $imageName,
            ];
            $model->insert($data);
        }
    
        return redirect()->to('/admin/beranda');
    }
    
    public function edit($id)
    {
        $model = new BerandaModel();
        $data['beranda'] = $model->find($id);
    
        return view('admin/beranda/edit', $data);
    }
    
    public function update($id)
    {
        $model = new BerandaModel();
        $image = $this->request->getFile('gambar');
    
        // Periksa apakah ada unggahan gambar baru
        if ($image->isValid() && !$image->hasMoved()) {
            // Tentukan direktori penyimpanan file
            $uploadPath = './uploads/';
    
            // Generate nama unik untuk file gambar
            $imageName = $image->getRandomName();
    
            // Pindahkan file gambar ke direktori penyimpanan
            $image->move($uploadPath, $imageName);
    
            // Perbarui informasi beranda beserta nama file gambar dalam database
            $data = [
                'gambar' => $imageName,
            ];
            $model->update($id, $data);
        }
    
        return redirect()->to('/admin/beranda');
    }
    
    public function delete($id)
    {
        $model = new BerandaModel();
        $beranda = $model->find($id);
    
        // Hapus file gambar terkait sebelum menghapus data dari database
        if ($beranda['gambar']) {
            $uploadPath = './uploads/';
            unlink($uploadPath . $beranda['gambar']);
        }
    
        $model->delete($id);
    
        return redirect()->to('/admin/beranda');
    }
    
}
