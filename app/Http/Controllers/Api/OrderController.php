<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderUpsertRequest;
use App\Mail\AdminNewOrder;
use App\Mail\UserNewOrder;
use App\Models\Order;
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

        $newOrder =  new Order();
        $newOrder->fill($data);
        $newOrder->save();
        $combined = array_combine($data['products'], $data['quantities']);
        foreach ($combined as $productId => $quantity) {
            $newOrder->products()->attach($productId, ['quantity' => $quantity]);
        }
        // if (key_exists("products", $data)) {
        //     $newOrder->products()->attach($data["products"]);
        // }
        Mail::to($data["email"])->send(new UserNewOrder($data));
        Mail::to("salvatorebono2001@gmail.com")->send(new AdminNewOrder($data));
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
