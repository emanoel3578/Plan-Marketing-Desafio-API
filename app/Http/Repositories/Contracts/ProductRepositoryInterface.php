<?php

namespace App\Repositories\Contracts;

interface ProductRepositoryInterface {

    public function createNewProduct();

    public function getListOfProducts();

    public function updateProduct();

    public function deleteProduct(); 
}