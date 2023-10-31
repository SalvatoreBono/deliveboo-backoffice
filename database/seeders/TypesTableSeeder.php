<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $types =  [
        [
            "name" => "Pizza",
            "img" => "pizza.png",
            "description" => "Varie pizze deliziose con diversi condimenti."
        ],
        [
            "name" => "Insalate",
            "img" => "salad.png",
            "description" => "Insalate fresche con verdure e condimenti leggeri."
        ],
        [
            "name" => "Frittura",
            "img" => "fried-potatoes.png",
            "description" => "Frittura croccante di pesce e frutti di mare."
        ],
        [
            "name" => "Pasta",
            "img" => "spaghetti.png",
            "description" => "Piatto di pasta preparato con varie salse e ingredienti."
        ],
        [
            "name" => "BBQ",
            "img" => "carne.png",
            "description" => "Grigliate saporite di carne e contorni."
        ],
        [
            "name" => "Panini",
            "img" => "sandwich.png",
            "description" => "Panini deliziosi con vari ripieni e condimenti."
        ],
        [
            "name" => "Hamburger",
            "img" => "hamburger.png",
            "description" => "Hamburger succulenti con carne e condimenti."
        ],
        [
            "name" => "Sushi",
            "img" => "sushi.png",
            "description" => "Sushi fresco e sashimi preparato con pesce di alta qualità."
        ],
        [
            "name" => "Dolci",
            "img" => "dolci.png",
            "description" => "Deliziosi dolci e dessert per soddisfare la tua voglia di zucchero."
        ],
        [
            "name" => "Pesce",
            "img" => "fish.png",
            "description" => "Grigliate saporite di pesce e contorni."
        ]
    ];
    public function run(): void
    {
        foreach ($this->types as $type) {
            $newType = new Type;
            $newType->name = $type["name"];
            $newType->img = $type["img"];
            $newType->description = $type["description"];
            $newType->save();
        }
    }
}
