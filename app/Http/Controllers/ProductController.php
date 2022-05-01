<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListProductsRequest;
use App\Http\Requests\StoreNewProductRequest;
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
