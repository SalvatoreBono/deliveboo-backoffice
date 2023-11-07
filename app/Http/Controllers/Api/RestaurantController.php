<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{

    public function searchByTypes(Request $request)
    {
        $typeIds = $request->input('selectedTypes'); // Recupera i type_id dalla richiesta

        dd($typeIds);

        $query = Restaurant::query();

        foreach ($typeIds as $typeId) {
            $query->join('restaurant_type', 'restaurants.id', '=', 'restaurant_type.restaurant_id')
                ->where('restaurant_type.type_id', $typeId);
        }

        $restaurants = $query->select('restaurants.*')->distinct()->get();

        return view('restaurants.index', compact('restaurants'));
    }
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $restaurant = Restaurant::with('products')->where('id', $id)->first();

        return response()->json([
            'success' => true,
            'restaurant' => $restaurant
        ]);
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
