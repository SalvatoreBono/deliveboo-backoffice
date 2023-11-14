<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderUpsertRequest;
use App\Mail\AdminNewOrder;
use App\Mail\UserNewOrder;
use App\Models\Order;
use App\Models\Product;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderUpsertRequest $request)
    {
        $data = $request->validated();

        $newOrder = new Order();
        $newOrder->fill($data);
        $newOrder->save();
        $combined = array_combine($data['products'], $data['quantities']);

        $restaurantEmail = null; // Inizializza la variabile per l'email del ristorante

        foreach ($combined as $productId => $quantity) {
            $newOrder->products()->attach($productId, ['quantity' => $quantity]);

            // Recupera l'ID del ristorante associato al prodotto ordinato
            $restaurantId = Product::find($productId)->restaurant_id;

            // Recupera l'email del ristorante
            $restaurantEmail = Restaurant::find($restaurantId)->email;
        }

        // Invia l'email al ristorante
        Mail::to($restaurantEmail)->send(new AdminNewOrder($data));
        // Invia l'email di conferma all'utente
        Mail::to($data["customer_email"])->send(new UserNewOrder($data));

        return response()->json($newOrder);
    }
    /**
     * Display the specified resource.
     */
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
