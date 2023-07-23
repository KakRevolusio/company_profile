<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ProductModel;


class ProductUserController extends BaseController
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

        return view('/produk', $data);
    }
}
