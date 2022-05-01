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

    public function getListOfProducts($itemsPerPage = 10, $offset = 0)
    {
        $data = $this->repository->getListOfProducts($itemsPerPage, $offset);
        if($data) {
            return $data->toArray();
        }
        return $data;
    }

    public function updateProduct(array $data): bool
    {
        return $this->repository->updateProduct($data);
    }

    public function deleteProduct()
    {
        # code...
    }
}
