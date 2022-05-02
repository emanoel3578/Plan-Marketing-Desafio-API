<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::group(
    ["prefix" => "produtos", "as" => "api.produtos."],
    function () {
        Route::post("criar", [ProductController::class, "store"]);
        Route::get("listar", [ProductController::class, "index"]);
        Route::patch("editar", [ProductController::class, "update"]);
        Route::delete("deletar", [ProductController::class, "destroy"]);
    }
);