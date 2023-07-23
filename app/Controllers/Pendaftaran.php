<?php

namespace App\Controllers;

use App\Models\PendaftaranModel;
use CodeIgniter\Controller;
use CodeIgniter\Config\Services;

class Pendaftaran extends Controller
{
    public function admin(){
        $model = new PendaftaranModel();
        $data['daftar'] = $model->findAll();
    
        return view('/admin/daftar/index', $data);
        // echo view('/admin/daftar/index');
    }

    public function index()
    {
        $model = new PendaftaranModel();
        $data['daftar'] = $model->findAll();
    
        return view('/admin/Pendaftaran/index', $data);
    }
    public function create()
    {
        $data['validation'] = \Config\Services::validation();
        return view('/admin/Pendaftaran/create', $data);
    }
    
    public function store()
    {
        helper(['form']);

        $rules = [
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'usia' => 'required',
            'email' => 'required|valid_email',
            'nomor_handphone' => 'required'
        ];
        if ($this->validate($rules)) {
            $model = new PendaftaranModel();

            $data = [
                'nik' => $this->request->getVar('nik'),
                'nama' => $this->request->getVar('nama'),
                'alamat' => $this->request->getVar('alamat'),
                'agama' => $this->request->getVar('agama'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'usia' => $this->request->getVar('usia'),
                'email' => $this->request->getVar('email'),
                'nomor_handphone' => $this->request->getVar('nomor_handphone')
            ];
            $model->insert($data);

            return redirect()->to('/daftar')->with('success', 'Data berhasil ditambahkan.');
        } else {
            $data['validation'] = $this->validator;

            return view('/admin/daftar/create', $data);
        }
    }
    public function edit($id)
    {
        $model = new PendaftaranModel();
        $data['daftar'] = $model->find($id);

        return view('daftar/edit', $data);
    }

    public function update()
    {
        helper(['form']);
        $rules = [
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'usia' => 'required',
            'email' => 'required|valid_email',
            'nomor_handphone' => 'required'
        ];

        if ($this->validate($rules)) {
            $model = new PendaftaranModel();

            $data = [
                'id' => $this->request->getVar('id'),
                'nik' => $this->request->getVar('nik'),
                'nama' => $this->request->getVar('nama'),
                'alamat' => $this->request->getVar('alamat'),
                'agama' => $this->request->getVar('agama'),
                'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
                'usia' => $this->request->getVar('usia'),
                'email' => $this->request->getVar('email'),
                'nomor_handphone' => $this->request->getVar('nomor_handphone')
            ];
            $model->update($data['id'], $data);

            return redirect()->to('/daftar')->with('success', 'Data berhasil diperbarui.');
        } else {
            $data['validation'] = $this->validator;
            $data['daftar'] = $this->request->getPost();

            return view('daftar/edit', $data);
        }
    }
    public function delete($id)
    {
        $model = new PendaftaranModel();
        $model->delete($id);

        return redirect()->to('/daftar')->with('success', 'Data berhasil dihapus.');
    }
}