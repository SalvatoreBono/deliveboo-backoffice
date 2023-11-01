<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductUpsertRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        return view("admin.products.create");
    }


    public function store(ProductUpsertRequest $request)
    {
        $data = $request->validated();
        $data["img"] = Storage::put("productsImages", $data["img"]);
        Product::create($data);
        return redirect()->route("admin.restaurants.index");
    }

    public function index()
    {
        $products = Product::all();
        return view("admin.products.index", compact("products"));
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
