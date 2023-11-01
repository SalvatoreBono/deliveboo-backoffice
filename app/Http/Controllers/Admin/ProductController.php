<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductUpsertRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        // Ottieni l'ID del ristorante associato all'utente autenticato
        $restaurantId = Auth::user()->restaurant->id;

        $data['restaurant_id'] = $restaurantId; // Assegna l'ID del ristorante
        
        $data["img"] = Storage::put("productsImages", $data["img"]);

        $product = new Product();
        $product->fill($data);
        $product->save();
        return redirect()->route("admin.products.index");
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
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view("admin.products.edit", compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpsertRequest $request, $id)
    {
        $data = $request->validated();
        $product = Product::findOrFail($id);

        // Ottieni l'ID del ristorante associato all'utente autenticato
        $restaurantId = Auth::user()->restaurant->id;

        $data['restaurant_id'] = $restaurantId; // Assegna l'ID del ristorante
        
        $data["img"] = Storage::put("productsImages", $data["img"]);

        $product->update($data);
        return redirect()->route("admin.products.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        if ($product->img) {
            Storage::delete($product->img);
        }

        $product->delete();
        return redirect()->route("admin.products.index");
    }
}
