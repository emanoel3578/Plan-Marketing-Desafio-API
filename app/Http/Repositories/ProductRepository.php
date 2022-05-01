<?php

namespace App\Repositories;

use App\Repositories\Contracts\ProductRepositoryInterface;

use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface {

    public function __construct(private Product $model)
    {}

    public function createNewProduct()
    {
        # code...
    }

    public function getListOfProducts()
    {
        # code...
    }

    public function updateProduct()
    {
        # code...
    }

    public function deleteProduct()
    {
        # code...
    }

}