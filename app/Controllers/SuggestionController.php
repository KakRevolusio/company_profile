<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Suggestion;

class SuggestionController extends BaseController
{
    protected $suggestion;

    function __construct()
    {
        $this->suggestion = new Suggestion();
    }
    public function index()
    {
        $suggestionModel = new Suggestion();
        $data['suggestion'] = $suggestionModel->findAll();

        // echo view('/layout/header', $data);
        echo view('admin/saran', $data);
        // echo view('/layout/footer', $data);
    }
}
