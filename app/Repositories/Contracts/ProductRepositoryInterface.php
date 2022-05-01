<?php

namespace App\Repositories\Contracts;

use App\Models\Product;

interface ProductRepositoryInterface
{

    public function createNewProduct(array $data): Product;

    public function getListOfProducts();

    public function updateProduct();

    public function deleteProduct(); 
}