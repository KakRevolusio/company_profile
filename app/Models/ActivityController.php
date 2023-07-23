<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ActivityModel;

class ActivityController extends BaseController
{
    protected $activities;

    function __construct()
    {
        $this->activities = new ActivityModel();
    }
    public function index()
    {
        $ActivityModel = new ActivityModel();
        $data['activities'] = $ActivityModel->findAll();


        echo view('/layout/header', $data);
        echo view('/kegiatan', $data);
        echo view('/layout/footer', $data);
    }

    public function create()
    {
        $activities = $this->request->getVar();
		$ActivityModel = new ActivityModel();
		$ActivityModel->insert($activities);
        return redirect()->to($_SERVER['HTTP_REFERER']);
    }

    public function update()
	{
		$activities = $this->request->getVar();
		$ActivityModel = new ActivityModel();
		$ActivityModel->update($activities['id'], $activities);
        return redirect()->to($_SERVER['HTTP_REFERER']);
	}

    public function delete($id)
    {
        $ActivityModel = new ActivityModel();
		$ActivityModel->delete($id);
        return redirect()->to($_SERVER['HTTP_REFERER']);
    }
}
