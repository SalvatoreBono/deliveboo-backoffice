<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderUpsertRequest;
use App\Mail\AdminNewOrder;
use App\Mail\UserNewOrder;
use App\Models\Order;
use Braintree\Gateway;
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

        $gateway = new Gateway([
            'environment' => 'sandbox',
            'merchantId' => env("MERCHANT_ID"),
            'publicKey' => env("PUBLIC_KEY"),
            'privateKey' => env("PRIVATE_KEY"),
        ]);

        $nonceFromTheClient = $data['payment_method_nonce'];

        $result = $gateway->transaction()->sale([
            'amount' => $data['total_price'], // Importo del pagamento
            'paymentMethodNonce' => $nonceFromTheClient,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
            // Se il pagamento è avvenuto con successo, aggiorna lo stato dell'ordine o esegui altre azioni necessarie
            $newOrder->update(['status' => 'PAID']); // Aggiorna lo stato dell'ordine a "PAID"

            Mail::to($data["customer_email"])->send(new UserNewOrder($data));
            Mail::to("indirizzo_email_amministratore")->send(new AdminNewOrder($data));

            return response()->json(['success' => true, 'message' => 'Pagamento effettuato con successo']);
        } else {
            // Se il pagamento non è avvenuto con successo, gestisci di conseguenza
            return response()->json(['success' => false, 'message' => 'Errore nel pagamento']);
        }
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
