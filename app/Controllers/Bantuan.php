<?php

namespace App\Controllers;

use App\Models\FModel;

class Bantuan extends BaseController
{
    public function index()
    {
        return view('bantuan/index');
    }

}
