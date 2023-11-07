<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $queryString = request()->query('selectedTypes', []);

        $types = Type::all();

        $typeString = Type::whereIn('id', $queryString)
            ->with('restaurants')
            ->get();

        $restaurants = Restaurant::join('restaurant_type as rt1', 'restaurants.id', '=', 'rt1.restaurant_id')
            ->whereIn('rt1.type_id', $queryString)
            ->groupBy('restaurants.id')
            ->havingRaw('COUNT(DISTINCT rt1.type_id) = ' . count($queryString))
            ->select('restaurants.*')
            ->get();

        return response()->json([
            'success' => true,
            'restaurants' => $restaurants,
            'results' => $types,
            'typestring' => $typeString
        ]);
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
