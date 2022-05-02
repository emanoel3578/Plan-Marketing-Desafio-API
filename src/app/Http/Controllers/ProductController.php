<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteRequest;
use App\Http\Requests\ListProductsRequest;
use App\Http\Requests\StoreNewProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductService;
use Illuminate\Http\Client\Request;
use Throwable;

class ProductController extends Controller
{
    public function __construct(private ProductService $service)
    {}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ListProductsRequest $request)
    {
        try {
            $validatedData = $request->validated();
            $data = $this->service->getListOfProducts($request->safe()->itemsPerPage, $request->safe()->offset);
            return response()->json(['message' => 'Listagem de produtos carregada com sucesso', 'data'=> $data]);
        }catch (Throwable $e) {
            return response()->json(['message' => 'Error', 'error' => $e->getMessage()]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewProductRequest $request)
    {
        try {
            $validatedData = $request->validated();
            $data = $this->service->createNewProduct($validatedData['product']);
            return response()->json(['message' => 'Criação de produto feita com sucesso', 'data'=> $data]);
        }catch (Throwable $e) {
            return response()->json(['message' => 'Error', 'error' => $e->getMessage()]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest  $request)
    {
        try {
            $request = $request->input('product');
            $data = $this->service->updateProduct($request);
            return response()->json(['message' => 'Atualizado os dados do produto com sucesso', 'data'=> $data]);
        }catch (Throwable $e) {
            return response()->json(['message' => 'Error', 'error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteRequest $request)
    {
        try {
            $data = $this->service->deleteProduct($request->id);
            return response()->json(['message' => 'Deletado produto com sucesso', 'data'=> $data]);
        }catch (Throwable $e) {
            return response()->json(['message' => 'Error', 'error' => 'Não foi possível encontrar nenhum produto com o Id recebido']);
        }
    }
}
