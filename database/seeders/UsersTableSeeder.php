<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\Type;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    protected $users = [
        [
            "name" => "Mario",
            "surname" => "Rossi",
            "email" => "MarioRossi@gmail.com",
            "VAT_number" => "12345678901",
            "password" => "password",
            "restaurant" => [
                "email" => "Langhe@example.com",
                "phone" => "3247526001",
                "activity_name" => "Alla Cucina delle Langhe",
                "img" => "Alla-Cucina-delle-Langhe.webp",
                "address" => "Via Milano, 123, 20100, Milano",
                "types" => [
                    "Pizza",
                    "BBQ",
                    "Pasta",
                    "Insalate",
                    "Dolci"
                ]
            ]
        ],
        [
            "name" => "Giuseppe",
            "surname" => "Rossi",
            "email" => "GiuseppeRossi@gmail.com",
            "VAT_number" => "23456789012",
            "password" => "password",
            "restaurant" => [
                "email" => "Vinaio@example.com",
                "phone" => "3247526001",
                "activity_name" => "Antico Vinaio",
                "img" => "antico-vinaio.webp",
                "address" => "Via Milano, 45, 20100, Milano",
                "types" => [
                    "Panini",
                    "Pizza"
                ]
            ]
        ],
        [
            "name" => "Luca",
            "surname" => "Rossi",
            "email" => "LucaRossi@gmail.com",
            "VAT_number" => "34567890123",
            "password" => "password",
            "restaurant" => [
                "email" => "Bomaki@example.com",
                "phone" => "3247526001",
                "activity_name" => "Bomaki",
                "img" => "Bomaki.webp",
                "address" => "Corso Vittorio Emanuele, 67, 20100, Milano",
                "types" => [
                    "Sushi",
                ]
            ]
        ],
        [
            "name" => "Vanessa",
            "surname" => "Rossi",
            "email" => "VanessaRossi@gmail.com",
            "VAT_number" => "45678901234",
            "password" => "password",
            "restaurant" => [
                "email" => "Burgers@example.com",
                "phone" => "3247526001",
                "activity_name" => "Burgers",
                "img" => "Bun-Burgers.webp",
                "address" => "Piazza del Popolo, 9, 20100, Milano",
                "types" => [
                    "Hamburger",
                    "Frittura"
                ]
            ]
        ],
        [
            "name" => "Giulio",
            "surname" => "Rossi",
            "email" => "GiulioRossi@gmail.com",
            "VAT_number" => "56789012345",
            "password" => "password",
            "restaurant" => [
                "email" => "Food@example.com",
                "phone" => "3247526001",
                "activity_name" => "Kotubia Food",
                "img" => "Kotubia-Food.webp",
                "address" => "Chemistry Avenue, 6, 20100, Milano",
                "types" => [
                    "Pizza",
                    "BBQ",
                    "Pesce",
                    "Pasta",
                    "Insalate",
                    "Dolci"
                ]
            ]
        ],
        [
            "name" => "Mario",
            "surname" => "Verdi",
            "email" => "MarioVerdi@gmail.com",
            "VAT_number" => "67890123456",
            "password" => "password",
            "restaurant" => [
                "email" => "Clorofilla@example.com",
                "phone" => "3247526001",
                "activity_name" => "Clorofilla",
                "img" => "Clorofilla.webp",
                "address" => "Via Milano, 30, 20100, Milano",
                "types" => [
                    "Insalate",
                ]
            ]
        ],
        [
            "name" => "Giuseppe",
            "surname" => "Verdi",
            "email" => "GiuseppeVerdi@gmail.com",
            "VAT_number" => "78901234567",
            "password" => "password",
            "restaurant" => [
                "email" => "Dongiò@example.com",
                "phone" => "3247526001",
                "activity_name" => "Dongiò",
                "img" => "Dongiò.webp",
                "address" => "Via Milano, 25, 20100, Milano",
                "types" => [
                    "Panini",
                    "Hamburger"
                ]
            ]
        ],
        [
            "name" => "Luca",
            "surname" => "Verdi",
            "email" => "LucaVerdi@gmail.com",
            "VAT_number" => "89012345678",
            "password" => "password",
            "restaurant" => [
                "email" => "sushibar@example.com",
                "phone" => "3247526001",
                "activity_name" => "This is not a sushibar",
                "img" => "This-is-not-a-sushibar.webp",
                "address" => "Chemistry Avenue, 6, 20100, Milano",
                "types" => [
                    "Sushi"
                ]
            ]
        ],
        [
            "name" => "Vanessa",
            "surname" => "Verdi",
            "email" => "VanessaVerdi@gmail.com",
            "VAT_number" => "90123456789",
            "password" => "password",
            "restaurant" => [
                "email" => "Diavolo@example.com",
                "phone" => "3247526001",
                "activity_name" => "Fra Diavolo",
                "img" => "Fra-Diavolo.webp",
                "address" => "Piazza delle Rose, 10, 20100, Milano",
                "types" => [
                    "Pizze",
                    "Panini",
                    "Frittura"
                ]
            ]
        ],
        [
            "name" => "Giulio",
            "surname" => "Verdi",
            "email" => "GiulioVerdi@gmail.com",
            "VAT_number" => "87654321098",
            "password" => "password",
            "restaurant" => [
                "email" => "Valley@example.com",
                "phone" => "3247526001",
                "activity_name" => "Giragirarrosto by Delivery Valley",
                "img" => "Giragirarrosto-by-Delivery-Valley.webp",
                "address" => "Corso Italia, 33, 20100, Milano",
                "types" => [
                    "Frittura",
                    "Panini"
                ]
            ]
        ],
        [
            "name" => "Mario",
            "surname" => "Bianchi",
            "email" => "MarioBianchi@gmail.com",
            "VAT_number" => "98765432109",
            "password" => "password",
            "restaurant" => [
                "email" => "Milano@example.com",
                "phone" => "3247526001",
                "activity_name" => "Insalateria Milano",
                "img" => "Insalateria-Milano.webp",
                "address" => "Ginza Street, 5, 20100, Milano",
                "types" => [
                    "Insalate"
                ]
            ]
        ],
        [
            "name" => "Giuseppe",
            "surname" => "Bianchi",
            "email" => "GiuseppeBianchi@gmail.com",
            "VAT_number" => "76543210987",
            "password" => "password",
            "restaurant" => [
                "email" => "Benito@example.com",
                "phone" => "3247526001",
                "activity_name" => "La Pescheria Benito",
                "img" => "La-Pescheria-Benito.webp",
                "address" => "Strada delle Cime, 7, 20100, Milano",
                "types" => [
                    "Pesce"
                ]
            ]
        ],
        [
            "name" => "Luca",
            "surname" => "Bianchi",
            "email" => "LucaBianchi@gmail.com",
            "VAT_number" => "65432109876",
            "password" => "password",
            "restaurant" => [
                "email" => "Panino@example.com",
                "phone" => "3247526001",
                "activity_name" => "Marcellino Il Sarto Del Panino",
                "img" => "Marcellino-Il-Sarto-Del-Panino.webp",
                "address" => "Viale Adriatico, 15, 20100, Milano",
                "types" => [
                    "Panini",
                    "Fritture"
                ]
            ]
        ],
        [
            "name" => "Vanessa",
            "surname" => "Bianchi",
            "email" => "VanessaBianchi@gmail.com",
            "VAT_number" => "54321098765",
            "password" => "password",
            "restaurant" => [
                "email" => "Restaurant@example.com",
                "phone" => "3247526001",
                "activity_name" => "MOMO Fusion Restaurant",
                "img" => "MOMO-Fusion-Restaurant.webp",
                "address" => "Via Veneto, 22, 20100, Milano",
                "types" => [
                    "Sushi"
                ]
            ]
        ],
        [
            "name" => "Giulio",
            "surname" => "Bianchi",
            "email" => "GiulioBianchi@gmail.com",
            "VAT_number" => "43210987654",
            "password" => "password",
            "restaurant" => [
                "email" => "Co@example.com",
                "phone" => "3247526001",
                "activity_name" => "Panino & Co",
                "img" => "Panino-&-Co.webp",
                "address" => "Corso Buenos Aires, 55, 20100, Milano",
                "types" => [
                    "Panini",
                    "Hamburger"
                ]
            ]
        ],
        [
            "name" => "Mario",
            "surname" => "Gialli",
            "email" => "MarioGialli@gmail.com",
            "VAT_number" => "32109876543",
            "password" => "password",
            "restaurant" => [
                "email" => "Viscontea@example.com",
                "phone" => "3247526001",
                "activity_name" => "Pasticceria Viscontea",
                "img" => "Pasticceria-Viscontea.webp",
                "address" => "Via delle Spezie, 18, 20100, Milano",
                "types" => [
                    "Dolci"
                ]
            ]
        ],
        [
            "name" => "Luca",
            "surname" => "Gialli",
            "email" => "LucaGialli@gmail.com",
            "VAT_number" => "21098765432",
            "password" => "password",
            "restaurant" => [
                "email" => "House@example.com",
                "phone" => "3247526001",
                "activity_name" => "Poke House",
                "img" => "poke-house.webp",
                "address" => "Rue de Provence, 30, 20100, Milano",
                "types" => [
                    "Sushi"
                ]
            ]
        ],
        [
            "name" => "Giuseppe",
            "surname" => "Gialli",
            "email" => "GiuseppeGialli@gmail.com",
            "VAT_number" => "10987654321",
            "password" => "password",
            "restaurant" => [
                "email" => "Rossi@example.com",
                "phone" => "3247526001",
                "activity_name" => "Premiata Cremeria Rossi",
                "img" => "Premiata-Cremeria-Rossi.webp",
                "address" => "Hickory Lane, 7, 20100, Milano",
                "types" => [
                    "Dolci"
                ]
            ]
        ],
        [
            "name" => "Vanessa",
            "surname" => "Gialli",
            "email" => "VanessaGialli@gmail.com",
            "VAT_number" => "98765432101",
            "password" => "password",
            "restaurant" => [
                "email" => "Kebap@example.com",
                "phone" => "3247526001",
                "activity_name" => "San Gottardo Pizza Kebap",
                "img" => "San-Gottardo-Pizza-Kebap.webp",
                "address" => "Silom Road, 12, 20100, Milano",
                "types" => [
                    "Pizza",
                    "Panini"
                ]
            ]
        ],
        [
            "name" => "Giulio",
            "surname" => "Gialli",
            "email" => "GiulioGialli@gmail.com",
            "VAT_number" => "87654321010",
            "password" => "password",
            "restaurant" => [
                "email" => "Pescado@example.com",
                "phone" => "3247526001",
                "activity_name" => "Tapas De Pescado",
                "img" => "Tapas-De-Pescado.webp",
                "address" => "Bleecker Street, 90, 20100, Milano",
                "types" => [
                    "Pesce"
                ]
            ]
        ],
    ];

    public function run(): void
    {
        foreach ($this->users as $user) {
            $newUser = new User();
            $newUser->name = $user["name"];
            $newUser->surname = $user["surname"];
            $newUser->email = $user["email"];
            $newUser->VAT_number = $user["VAT_number"];
            $newUser->password = $user["password"];

            // Salva l'utente nel database per ottenere l'ID
            $newUser->save();

            // Creare un nuovo ristorante associato all'utente
            $restaurantData = $user["restaurant"];

            $newRestaurant = new Restaurant();
            $newRestaurant->email = $restaurantData["email"];
            $newRestaurant->img = $restaurantData["img"];
            $newRestaurant->phone = $restaurantData["phone"];
            $newRestaurant->address = $restaurantData["address"];
            $newRestaurant->activity_name = $restaurantData["activity_name"];

            // Assegna l'ID dell'utente come user_id del ristorante
            $newRestaurant->user_id = $newUser->id;
            // Salvare il ristorante associato all'utente
            $newRestaurant->save();

            // Associare i tipi di ristorante al ristorante
            $restaurantTypes = $restaurantData["types"];
            // pluck viene utilizzato per ottenere l'ID del tipo di ristorante dalla tabella types basato sul nome del tipo
            $newRestaurant->types()->attach(Type::whereIn('name', $restaurantTypes)->pluck('id'));
        }
    }
}
