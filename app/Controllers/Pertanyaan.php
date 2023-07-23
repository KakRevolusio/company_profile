<?php

namespace App\Controllers;

use App\Models\PertanyaanModel;

class Pertanyaan extends BaseController
{
    
    public function index()
    {
        $model = new PertanyaanModel();
        $data['pertanyaan'] = $model->findAll();

        return view('pertanyaan/index', $data);
    }
  
    public function admin()
    {
        $model = new PertanyaanModel();
        $data['pertanyaan'] = $model->findAll();

        return view('admin/pertanyaan/index', $data);
    }

    public function create()
    {
        return view('admin/pertanyaan/create');
    }
    
    public function store()
    {
        $model = new PertanyaanModel();
    
        $data = [
            'question' => $this->request->getPost('question'),
            'answer' => $this->request->getPost('answer'),
        ];
    
        $model->insert($data);
    
        return redirect()->to('/admin/pertanyaan');
    }
    
    public function edit($id)
{
    $model = new PertanyaanModel();
    $data['pertanyaan'] = $model->find($id);

    return view('admin/pertanyaan/edit', $data);
}
public function update($id)
{
    $model = new PertanyaanModel();
    $data = [
        'question' => $this->request->getPost('question'),
        'answer' => $this->request->getPost('answer'),
    ];
    $model->update($id, $data);

    return redirect()->to('/admin/pertanyaan');
}


public function delete($id)
{
    $model = new PertanyaanModel();
    $model->delete($id);

    return redirect()->to('/admin/pertanyaan');
}

}
