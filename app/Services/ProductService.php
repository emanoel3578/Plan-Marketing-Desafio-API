<?php

namespace App\Services;

use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductService {

    public function __construct(private ProductRepositoryInterface $repository) 
    {}

    public function createNewProduct($data)
    {
        return $this->repository->createNewProduct($data);
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
