<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Suggestion;


class SuggestionUserController extends BaseController
{
    public function index()
    {
        return view('/saran');
    }
    public function submit()
    {
        $suggestion = $this->request->getVar();
        $suggestionModel = new Suggestion();
        $suggestionModel->insert($suggestion);
        return redirect()->to($_SERVER['HTTP_REFERER']);
    }
}
