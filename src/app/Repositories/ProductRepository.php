<?php

namespace App\Repositories;

use App\Repositories\Contracts\ProductRepositoryInterface;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductRepositoryInterface {

    public function __construct(private Product $model)
    {}

    public function createNewProduct(array $data): Product
    {
        return $this->model->create($data);
    }

    public function getListOfProducts(int $itemsPerPage, int $offset): Collection
    {
        $query = $this->model
        ->offset($offset)
        ->limit($itemsPerPage)
        ->get();

        return $query;
    }

    public function updateProduct(array $data): bool
    {
        return $this->model->find($data['id'])->update($data);
    }

    public function deleteProduct(int $id)
    {
        return $this->model->findOrFail($id)->delete();
    }

}