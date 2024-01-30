<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RestaurantUpsertRequest;
use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view("admin.restaurants.create", compact("types"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RestaurantUpsertRequest $request)
    {
        //Validazione
        $data = $request->validated();

        //Il campo del form Img viene messo nello storage 
        $data["img"] = Storage::put("", $data["img"]);
        //Prende lo user che ha fatto la request
        $user = $request->user();

        $restaurant = new Restaurant($data);

        //collega il ristorante appena creato all'utente autenticato.
        $user->restaurant()->save($restaurant);

        //se nel form è presente il valore data types  
        if (key_exists("types", $data)) {
            //associamento tra restaurant e il type
            $restaurant->types()->attach($data["types"]);
        }
        return redirect()->route("admin.restaurants.show", $restaurant->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //Ottiene l'ID del ristorante associato all'utente autenticato.
        $restaurantId = Auth::user()->restaurant->id;


        $restaurant = Restaurant::where("id", $id)->firstOrFail();

        //Verifica se l'ID del ristorante coincide con l'ID del ristorante dell'utente.
        if ($restaurantId !== $restaurant->id) {
            abort(404);
        } else {
            return view("admin.restaurants.show", compact("restaurant"));
        }
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
