<?php

namespace App\Repositories\Contracts;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterface
{

    public function createNewProduct(array $data): Product;

    public function getListOfProducts(int $itemsPerPage, int $offset): Collection;

    public function updateProduct(array $data): bool;

    public function deleteProduct(int $id); 
}