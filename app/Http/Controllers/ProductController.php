<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListProductsRequest;
use App\Http\Requests\StoreNewProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Services\ProductService;
use Throwable;
use Illuminate\Http\Request;

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
            return response()->json(['message' => 'Sucesso', 'data'=> $data]);
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
            $data = $this->service->createNewProduct($validatedData);
            return response()->json(['message' => 'Sucesso', 'data'=> $data]);
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
    public function update(UpdateProductRequest $request)
    {
        try {
            $validatedData = $request->validated();
            $data = $this->service->updateProduct($validatedData);
            return response()->json(['message' => 'Sucesso', 'data'=> $data]);
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
    public function destroy($id)
    {
        //
    }
}
