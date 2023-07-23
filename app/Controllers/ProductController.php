<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    protected $product;

    function __construct()
    {
        $this->product = new ProductModel();
    }
    public function index()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();


        // echo view('/layout/header', $data);
        echo view('admin/produk', $data);
        // echo view('/layout/footer', $data);
    }

    public function create()
    {
        $product = $this->request->getVar();
		$productModel = new ProductModel();
		$productModel->insert($product);
        return redirect()->to($_SERVER['HTTP_REFERER']);
    }

    public function update()
	{
		$product = $this->request->getVar();
		$productModel = new ProductModel();
		$productModel->update($product['id'], $product);
        return redirect()->to($_SERVER['HTTP_REFERER']);
	}

    public function delete($id)
    {
        $productModel = new ProductModel();
		$productModel->delete($id);
        return redirect()->to($_SERVER['HTTP_REFERER']);
    }
}