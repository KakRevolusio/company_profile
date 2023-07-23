<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminUsers;

class AdminLoginController extends BaseController
{
    public function index()
    {
        return view('admin/login');
    }
    public function doLogin()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = new AdminUsers();
        $data = $user->where('username', $username)->first();
        if ($data) {
            $session = session();
            if (password_verify($password, $data['password'])) {
                //create session
                $login = [
                    'islogin' => true,
                    'username' => $data['username'],
                    'name' => $data['name']
                ];
                $session->set($login);
                return redirect()->to('admin/beranda');
            } else {
                $session->setFlashdata('msg', 'username/Password invalid');
                return redirect()->to('admin/login');
            }
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('admin/login');
    }
}
