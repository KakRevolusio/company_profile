<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ActivityModel;


class ActivityUserController extends BaseController
{
    protected $activities;
    function __construct()
    {
        $this->activities = new ActivityModel();
    }
    public function index()
    {
        $activitiesModel = new ActivityModel();
        $data['activities'] = $activitiesModel->findAll();

        return view('/kegiatan', $data);
    }
}
