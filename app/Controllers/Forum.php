<?php

namespace App\Controllers;

use App\Models\FModel;
use App\Models\Jawaban_model;

class Forum extends BaseController
{
    public function index()
    {
        $pertanyaanModel = new FModel();
        $data['pertanyaan'] = $pertanyaanModel->get_pertanyaan();

        // Ambil jawaban untuk setiap pertanyaan dan lewatkan ke view
        $jawabanModel = new Jawaban_model();
        foreach ($data['pertanyaan'] as &$pertanyaan_item) {
            $pertanyaan_item['answers'] = $jawabanModel->get_jawaban($pertanyaan_item['id']);
        }

        return view('forum/index', $data);
    }

    public function simpan_jawaban()
    {
        $pertanyaan_id = $this->request->getPost('question_id');
        $jawaban = $this->request->getPost('jawaban');

        // Validasi data yang diterima dari form jawaban, jika diperlukan

        $data = [
            'pertanyaan_id' => $pertanyaan_id,
            'isi' => $jawaban
        ];

        $jawabanModel = new Jawaban_model();
        $jawabanModel->simpan_jawaban($data);

        // Redirect kembali ke halaman utama
        return redirect()->to(base_url('forum'));
    }

    public function simpan_pertanyaan()
    {
        $pertanyaan = $this->request->getPost('pertanyaan');

        // Validasi data yang diterima dari form pertanyaan, jika diperlukan

        $data = [
            'isi' => $pertanyaan
        ];

        $pertanyaanModel = new FModel();
        $pertanyaanModel->insert($data);

        // Set flashdata untuk menampilkan pesan sukses
        session()->setFlashdata('status', 'Pertanyaan berhasil disimpan.');

        // Redirect kembali ke halaman utama
        return redirect()->to(base_url('forum'));
    }

    public function admin()
    {
        $model = new FModel();
        $data['pertanyaan'] = $model->findAll();

        return view('admin/forum/index', $data);
    }

    
    public function delete($id)
    {
        $pertanyaanModel = new FModel();
        $jawabanModel = new Jawaban_model();
    
        // Delete the answers related to the question first
        $jawabanModel->where('pertanyaan_id', $id)->delete();
    
        // Delete the question itself
        $pertanyaanModel->where('id', $id)->delete();
    
        return redirect()->to('/admin/forum');
    }

    public function edit($id)
    {
        $model = new FModel();
        $data['pertanyaan'] = $model->find($id);

        return view('admin/forum/edit', $data);
    }

    public function update($id)
    {
        $model = new FModel();
        $data = [
            'isi' => $this->request->getPost('isi'),
            'balasan' => $this->request->getPost('balasan'),
        ];
        

        $model->update($id, $data);
        

        // Redirect atau tampilkan pesan sukses jika diperlukan
        return redirect()->to('/admin/forum')->with('status', 'Pertanyaan berhasil diperbarui');
    }

}
