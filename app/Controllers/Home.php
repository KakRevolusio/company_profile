<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
    echo view('welcome_message');
    }
    public function beranda()
	{
		echo view("beranda");
	}
	public function visi()
	{
		echo view("visi");
	}
    
    public function latar()
	{
		echo view("latar");
	}
    
	public function kebijakan()
	{
		echo view("kebijakan");
	}
	public function kontak()
	{
		echo view("kontak");
    }
	public function kebijakan2()
	{
		echo view("kebijakan2");
    }
	public function syarat()
	{
		echo view("syarat");
    }
	public function alur()
	{
		echo view("alur");
    }
	public function kemitraan()
	{
		echo view("kemitraan");
    }
	public function blog()
	{
		echo view("blog");
    }
	public function devisi()
	{
		echo view("devisi");
    }
	public function bernanda()
    {
        return view('admin/bernanda');
    }
	
}
