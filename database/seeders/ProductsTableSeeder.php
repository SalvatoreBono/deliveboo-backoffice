<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    protected $products = [
        [
            "name" => "Capricciosa",
            "img" => "capricciosa.jpg",
            "description" => "Pizza Capricciosa con pomodoro, mozzarella, prosciutto cotto, funghi, olive e carciofi.",
            "price" => 11.99,
            "visible" => true,
            "restaurant_id" => 1
        ],
        [
            "name" => "Diavola",
            "img" => "diavola.jpg",
            "description" => "Pizza Diavola con pomodoro, mozzarella, salame piccante e peperoncino.",
            "price" => 10.99,
            "visible" => true,
            "restaurant_id" => 2
        ],
        [
            "name" => "Frutti di Mare",
            "img" => "frutti-di-mare.jpg",
            "description" => "Pizza ai Frutti di Mare con pomodoro, mozzarella e frutti di mare misti.",
            "price" => 12.99,
            "visible" => true,
            "restaurant_id" => 1
        ],
        [
            "name" => "Funghi e Cotto",
            "img" => "funghi-e-cotto.jpg",
            "description" => "Pizza con pomodoro, mozzarella, funghi e prosciutto cotto.",
            "price" => 9.99,
            "visible" => true,
            "restaurant_id" => 2
        ],
        [
            "name" => "Margherita",
            "img" => "margherita.jpg",
            "description" => "Pizza Margherita con pomodoro, mozzarella e basilico fresco.",
            "price" => 8.99,
            "visible" => false,
            "restaurant_id" => 1
        ],
        [
            "name" => "Marinara",
            "img" => "marinara.jpg",
            "description" => "Pizza Marinara con pomodoro, aglio, origano e olio d'oliva.",
            "price" => 7.99,
            "visible" => true,
            "restaurant_id" => 2
        ],
        [
            "name" => "Ortolana",
            "img" => "ortolana.jpg",
            "description" => "Pizza Ortolana con pomodoro, mozzarella, melanzane, zucchine e peperoni.",
            "price" => 10.49,
            "visible" => true,
            "restaurant_id" => 3
        ],
        [
            "name" => "Quattro Formaggi",
            "img" => "quattro-formaggi.jpg",
            "description" => "Pizza Quattro Formaggi con pomodoro e una selezione di quattro formaggi diversi.",
            "price" => 10.99,
            "visible" => true,
            "restaurant_id" => 3
        ],
        [
            "name" => "Quattro Stagioni",
            "img" => "quattro-stagioni.jpg",
            "description" => "Pizza Quattro Stagioni con pomodoro, mozzarella, prosciutto cotto, funghi, carciofi e olive nere.",
            "price" => 11.49,
            "visible" => true,
            "restaurant_id" => 1
        ],
        [
            "name" => "Salame",
            "img" => "salame.jpg",
            "description" => "Pizza Salame con pomodoro, mozzarella e salame piccante.",
            "price" => 10.49,
            "visible" => false,
            "restaurant_id" => 2
        ],
        [
            "name" => "Tonno e Cipolla",
            "img" => "tonno-e-cipolla.jpg",
            "description" => "Pizza Tonno e Cipolla con pomodoro, mozzarella, tonno e cipolla rossa.",
            "price" => 9.99,
            "visible" => true,
            "restaurant_id" => 3
        ],
        [
            "name" => "Vegetariana",
            "img" => "vegetariana.jpg",
            "description" => "Pizza Vegetariana con pomodoro, mozzarella e una selezione di verdure.",
            "price" => 10.49,
            "visible" => false,
            "restaurant_id" => 3
        ],
        [
            "name" => "Wurstel e Patatine",
            "img" => "wurstel-e-patatine.jpg",
            "description" => "Pizza con pomodoro, mozzarella, wurstel e patatine fritte.",
            "price" => 10.99,
            "visible" => true,
            "restaurant_id" => 1
        ],
        [
            "name" => "Caprese",
            "img" => "caprese.jpg",
            "description" => "Insalata Caprese con pomodori freschi, mozzarella di bufala e basilico.",
            "price" => 9.99,
            "visible" => true,
            "restaurant_id" => 2
        ],
        [
            "name" => "Cesar Salad",
            "img" => "cesar-salad.jpg",
            "description" => "Cesar Salad con lattuga romana, pollo grigliato, crostini e salsa Cesar.",
            "price" => 11.99,
            "visible" => false,
            "restaurant_id" => 3
        ],
        [
            "name" => "Insalata di Pollo",
            "img" => "insalata-pollo.jpg",
            "description" => "Insalata mista con petto di pollo grigliato, pomodori e olive.",
            "price" => 10.99,
            "visible" => true,
            "restaurant_id" => 2
        ],
        [
            "name" => "Insalata Mista",
            "img" => "insalata-mista.jpg",
            "description" => "Insalata mista con lattuga, pomodori, cetrioli e condimento.",
            "price" => 8.99,
            "visible" => true,
            "restaurant_id" => 4
        ],
        [
            "name" => "Insalata Pomodoro",
            "img" => "insalata-pomodori.jpg",
            "description" => "Insalata con pomodori, cipolla rossa, basilico e olio d'oliva.",
            "price" => 7.99,
            "visible" => false,
            "restaurant_id" => 4
        ],
        [
            "name" => "Insalata Salmone",
            "img" => "insalata-salmone.jpg",
            "description" => "Insalata con salmone affumicato, cetrioli, cipolla rossa e crema acida.",
            "price" => 12.99,
            "visible" => true,
            "restaurant_id" => 3
        ],
        [
            "name" => "Insalata Valeriana",
            "img" => "insalata-valeriana.jpg",
            "description" => "Insalata con valeriana, noci, mela verde e formaggio gorgonzola.",
            "price" => 9.99,
            "visible" => true,
            "restaurant_id" => 4
        ],
        [
            "name" => "Insalatona",
            "img" => "insalatona.jpg",
            "description" => "Insalatona con gamberi, calamari, cozze, pomodori e cetrioli.",
            "price" => 13.99,
            "visible" => true,
            "restaurant_id" => 5
        ],
        [
            "name" => "Arancino Formaggio",
            "img" => "arancino-formaggio.jpg",
            "description" => "Arancino ripieno di formaggio fuso e sugo di pomodoro.",
            "price" => 4.99,
            "visible" => true,
            "restaurant_id" => 1
        ],
        [
            "name" => "Arancino Ragu",
            "img" => "arancino-ragu.jpg",
            "description" => "Arancino ripieno di ragù di carne e piselli.",
            "price" => 4.99,
            "visible" => true,
            "restaurant_id" => 6
        ],
        [
            "name" => "Calamari",
            "img" => "calamari.jpg",
            "description" => "Calamari fritti serviti con salsa al limone.",
            "price" => 9.99,
            "visible" => false,
            "restaurant_id" => 6
        ],
        [
            "name" => "Cotoletta",
            "img" => "cotoletta.jpg",
            "description" => "Cotoletta di pollo impanata e fritta, servita con limone.",
            "price" => 8.99,
            "visible" => true,
            "restaurant_id" => 5
        ],
        [
            "name" => "Gamberi",
            "img" => "gamberi.jpg",
            "description" => "Gamberi fritti con salsa cocktail.",
            "price" => 11.99,
            "visible" => false,
            "restaurant_id" => 6
        ],
        [
            "name" => "Frittura mista",
            "img" => "mista.jpg",
            "description" => "Selezione mista di frittura con calamari, gamberi e verdure.",
            "price" => 12.99,
            "visible" => true,
            "restaurant_id" => 5
        ],
        [
            "name" => "Patatine Fritte",
            "img" => "patatine-fritte.jpg",
            "description" => "Patatine fritte croccanti servite con ketchup e maionese.",
            "price" => 3.99,
            "visible" => true,
            "restaurant_id" => 2
        ],
        [
            "name" => "Pesce",
            "img" => "pesce.jpg",
            "description" => "Frittura di pesce con sarde.",
            "price" => 14.99,
            "visible" => true,
            "restaurant_id" => 7
        ],
        [
            "name" => "Amatriciana",
            "img" => "amatriciana.jpg",
            "description" => "Pasta all'amatriciana con pancetta, pomodoro e pecorino.",
            "price" => 11.99,
            "visible" => false,
            "restaurant_id" => 5
        ],
        [
            "name" => "Bolognese",
            "img" => "bolognese.jpg",
            "description" => "Tagliatelle al sugo bolognese con carne macinata e pomodoro.",
            "price" => 12.99,
            "visible" => true,
            "restaurant_id" => 7
        ],
        [
            "name" => "Cacio e Pepe",
            "img" => "cacio-e-pepe.jpg",
            "description" => "Spaghetti cacio e pepe con formaggio pecorino e pepe nero.",
            "price" => 10.99,
            "visible" => true,
            "restaurant_id" => 7
        ],
        [
            "name" => "Carbonara",
            "img" => "carbonara.jpg",
            "description" => "Spaghetti carbonara con uova, pancetta, pecorino e pepe nero.",
            "price" => 11.99,
            "visible" => true,
            "restaurant_id" => 5
        ],
        [
            "name" => "Lasagna",
            "img" => "lasagna.jpg",
            "description" => "Lasagna al forno con strati di pasta, carne e besciamella.",
            "price" => 13.99,
            "visible" => true,
            "restaurant_id" => 7
        ],
        [
            "name" => "Orecchiette Cime di Rapa",
            "img" => "orecchiette-cime-di-rapa.jpg",
            "description" => "Orecchiette con cime di rapa, aglio, peperoncino e pangrattato.",
            "price" => 11.49,
            "visible" => false,
            "restaurant_id" => 7
        ],
        [
            "name" => "Pesto",
            "img" => "pesto.jpg",
            "description" => "Trofie al pesto con basilico, pinoli, pecorino e olio d'oliva.",
            "price" => 10.99,
            "visible" => true,
            "restaurant_id" => 8
        ],
        [
            "name" => "Scoglio",
            "img" => "scoglio.jpg",
            "description" => "Linguine allo scoglio con frutti di mare e pomodoro.",
            "price" => 14.99,
            "visible" => true,
            "restaurant_id" => 7
        ],
        [
            "name" => "Bistecca di Suino",
            "img" => "bistecca-suino.jpg",
            "description" => "Bistecca di suino alla griglia con salsa barbecue e contorni.",
            "price" => 14.99,
            "visible" => true,
            "restaurant_id" => 8
        ],
        [
            "name" => "Costine",
            "img" => "costine.jpg",
            "description" => "Costine di maiale affumicate e glassate con salsa barbecue.",
            "price" => 12.99,
            "visible" => true,
            "restaurant_id" => 9
        ],
        [
            "name" => "Filetto di Manzo",
            "img" => "filetto-manzo.jpg",
            "description" => "Filetto di manzo alla griglia con salsa chimichurri e verdure grigliate.",
            "price" => 19.99,
            "visible" => false,
            "restaurant_id" => 9
        ],
        [
            "name" => "Fiorentina",
            "img" => "fiorentina.jpg",
            "description" => "Fiorentina di manzo alla griglia, servita con olio d'oliva e sale marino.",
            "price" => 22.99,
            "visible" => true,
            "restaurant_id" => 9
        ],
        [
            "name" => "Grigliata Mista",
            "img" => "grigliata-mista-di-carne.jpg",
            "description" => "Selezione mista di carni alla griglia con salse speciali e contorni.",
            "price" => 16.99,
            "visible" => true,
            "restaurant_id" => 9
        ],
        [
            "name" => "Pollo alla Griglia",
            "img" => "pollo-griglia.jpg",
            "description" => "Pollo intero alla griglia marinato con erbe aromatiche e spezie.",
            "price" => 13.99,
            "visible" => false,
            "restaurant_id" => 8
        ],
        [
            "name" => "Pollo allo Spiedo",
            "img" => "pollo-spiedo.jpg",
            "description" => "Pollo allo spiedo croccante con patatine fritte e maionese.",
            "price" => 11.99,
            "visible" => true,
            "restaurant_id" => 10
        ],
        [
            "name" => "Tagliata",
            "img" => "tagliata.jpg",
            "description" => "Tagliata di manzo con rucola, scaglie di grana e aceto balsamico.",
            "price" => 18.99,
            "visible" => true,
            "restaurant_id" => 10
        ],
        [
            "name" => "Panino Bacon",
            "img" => "bacon.jpg",
            "description" => "Panino con bacon croccante, lattuga, pomodoro e maionese.",
            "price" => 8.99,
            "visible" => true,
            "restaurant_id" => 9
        ],
        [
            "name" => "Panino Prosciutto",
            "img" => "prosciutto.jpg",
            "description" => "Panino con prosciutto crudo, formaggio, lattuga e pomodoro.",
            "price" => 9.49,
            "visible" => true,
            "restaurant_id" => 8
        ],
        [
            "name" => "Panino Salmone",
            "img" => "salmone.jpg",
            "description" => "Panino con salmone affumicato, formaggio cremoso, cetriolo e lattuga.",
            "price" => 10.99,
            "visible" => false,
            "restaurant_id" => 8
        ],
        [
            "name" => "Panino Salsiccia",
            "img" => "salsiccia.jpg",
            "description" => "Panino con salsiccia italiana, peperoni grigliati e cipolla.",
            "price" => 9.99,
            "visible" => true,
            "restaurant_id" => 4
        ],
        [
            "name" => "Panino Wurstel e patatine",
            "img" => "wurstel-e-patatine.jpg",
            "description" => "Panino con wurstel, patatine, senape, ketchup e cipolla croccante.",
            "price" => 7.99,
            "visible" => true,
            "restaurant_id" => 10
        ],
        [
            "name" => "Cheeseburger",
            "img" => "Cheeseburger.jpg",
            "description" => "Hamburger con formaggio fuso, lattuga, pomodoro e maionese.",
            "price" => 8.99,
            "visible" => true,
            "restaurant_id" => 7
        ],
        [
            "name" => "Chicken Burger",
            "img" => "chicken-burger.jpg",
            "description" => "Panino di pollo croccante con lattuga, pomodoro e salsa speciale.",
            "price" => 7.99,
            "visible" => true,
            "restaurant_id" => 4
        ],
        [
            "name" => "Double Cheeseburger",
            "img" => "Double-Cheeseburger.jpg",
            "description" => "Doppio hamburger con doppio formaggio fuso, lattuga, pomodoro e maionese.",
            "price" => 10.99,
            "visible" => true,
            "restaurant_id" => 8
        ],
        [
            "name" => "Double Chicken Burger",
            "img" => "Doublechicken-burger.jpg",
            "description" => "Doppio panino di pollo croccante con lattuga, pomodoro e salsa speciale.",
            "price" => 9.99,
            "visible" => true,
            "restaurant_id" => 9
        ],
        [
            "name" => "Hamburger BBQ",
            "img" => "Hamburger-BBQ.jpg",
            "description" => "Hamburger con salsa barbecue, cipolla, lattuga e formaggio cheddar.",
            "price" => 9.49,
            "visible" => false,
            "restaurant_id" => 6
        ],
        [
            "name" => "Hamburger Eggs and Bacon",
            "img" => "Hamburger-eggs-and-bacon.jpg",
            "description" => "Hamburger con uova, bacon croccante, lattuga e pomodoro.",
            "price" => 10.49,
            "visible" => true,
            "restaurant_id" => 6
        ],
        [
            "name" => "Hamburger",
            "img" => "Hamburger.jpg",
            "description" => "L'originale hamburger con lattuga, pomodoro e maionese.",
            "price" => 9.99,
            "visible" => true,
            "restaurant_id" => 10
        ],

        [
            "name" => "Hosomaki Avocado",
            "img" => "Hosomaki-avocado.jpg",
            "description" => "Rotolino di riso con avocado avvolto nell'alga nori.",
            "price" => 5.99,
            "visible" => true,
            "restaurant_id" => 9
        ],
        [
            "name" => "Hosomaki Salmon",
            "img" => "Hosomaki-salmon.jpg",
            "description" => "Rotolino di riso con salmone avvolto nell'alga nori.",
            "price" => 6.49,
            "visible" => true,
            "restaurant_id" => 10
        ],
        [
            "name" => "Hosomaki Tuna",
            "img" => "Hosomaki-tuna.jpg",
            "description" => "Rotolino di riso con tonno avvolto nell'alga nori.",
            "price" => 6.49,
            "visible" => true,
            "restaurant_id" => 5
        ],
        [
            "name" => "Nigiri Gambero",
            "img" => "Nigiri-gambero.jpg",
            "description" => "Gambero su cuscino di riso, legato con striscia di alga nori.",
            "price" => 7.99,
            "visible" => false,
            "restaurant_id" => 10
        ],
        [
            "name" => "Nigiri Polpo",
            "img" => "Nigiri-polpo.jpg",
            "description" => "Polpo su cuscino di riso, legato con striscia di alga nori.",
            "price" => 8.49,
            "visible" => true,
            "restaurant_id" => 9
        ],
        [
            "name" => "Nigiri Salmone",
            "img" => "Nigiri-salmone.jpg",
            "description" => "Salmone su cuscino di riso, legato con striscia di alga nori.",
            "price" => 7.99,
            "visible" => true,
            "restaurant_id" => 6
        ],
        [
            "name" => "Nigiri Tonno",
            "img" => "Nigiri-tonno.jpg",
            "description" => "Tonno su cuscino di riso, legato con striscia di alga nori.",
            "price" => 8.49,
            "visible" => true,
            "restaurant_id" => 9
        ],
        [
            "name" => "Sashimi Branzino",
            "img" => "Sashimi-branzino.jpg",
            "description" => "Freschi fette di branzino crudo, servite con salsa di soia.",
            "price" => 10.99,
            "visible" => false,
            "restaurant_id" => 4
        ],
        [
            "name" => "Sashimi Salmone",
            "img" => "Sashimi-salmone.jpg",
            "description" => "Freschi fette di salmone crudo, servite con salsa di soia.",
            "price" => 11.99,
            "visible" => true,
            "restaurant_id" => 10
        ],
        [
            "name" => "Sashimi Tonno",
            "img" => "Sashimi-tonno.jpg",
            "description" => "Freschi fette di tonno crudo, servite con salsa di soia.",
            "price" => 12.99,
            "visible" => true,
            "restaurant_id" => 10
        ],
        [
            "name" => "Spiedini di Gamberi",
            "img" => "Spiedini-di-Gamberi.jpg",
            "description" => "Gamberi alla griglia serviti su spiedini con salsa teriyaki.",
            "price" => 9.99,
            "visible" => true,
            "restaurant_id" => 7
        ],
        [
            "name" => "Uramaki California",
            "img" => "Uramaki-california.jpg",
            "description" => "Uramaki con granchio, avocado, cetriolo e sesamo.",
            "price" => 8.99,
            "visible" => true,
            "restaurant_id" => 10
        ],
        [
            "name" => "Uramaki Ebiten",
            "img" => "Uramaki-ebiten.jpg",
            "description" => "Uramaki con gambero fritto, avocado e maionese piccante.",
            "price" => 9.49,
            "visible" => true,
            "restaurant_id" => 10
        ],
        [
            "name" => "Uramaki Spicy Tuna",
            "img" => "Uramaki-Spicy-Tuna.jpg",
            "description" => "Uramaki con tonno piccante, avocado e salsa piccante.",
            "price" => 9.49,
            "visible" => false,
            "restaurant_id" => 10
        ],
        [
            "name" => "Tiramisù",
            "img" => "tiramisu.jpg",
            "description" => "Tiramisù fatto in casa con caffè e mascarpone.",
            "price" => 6.99,
            "visible" => true,
            "restaurant_id" => 10
        ],
        [
            "name" => "Cheesecake",
            "img" => "cheesecake.jpg",
            "description" => "Deliziosa cheesecake fatta in casa con crosta di biscotti e crema di formaggio.",
            "price" => 7.99,
            "visible" => true,
            "restaurant_id" => 10
        ],
        [
            "name" => "Foresta Nera",
            "img" => "foresta-nera.jpg",
            "description" => "Torta Foresta Nera con panna montata e ciliegie al maraschino.",
            "price" => 8.99,
            "visible" => false,
            "restaurant_id" => 10
        ],
        [
            "name" => "Panna Cotta",
            "img" => "panna-cotta.jpg",
            "description" => "Panna cotta servita con salsa di caramello e frutti di bosco freschi.",
            "price" => 6.49,
            "visible" => true,
            "restaurant_id" => 5
        ],
        [
            "name" => "Profiteroles",
            "img" => "profitterol.jpg",
            "description" => "Profiteroles ripieni di crema chantilly e glassati con cioccolato fondente.",
            "price" => 7.49,
            "visible" => true,
            "restaurant_id" => 4
        ],
        [
            "name" => "Tartufo Bianco",
            "img" => "tartufo-bianco.jpg",
            "description" => "Tartufo al cioccolato bianco con cuore di cioccolato fondente.",
            "price" => 6.99,
            "visible" => true,
            "restaurant_id" => 10
        ],
        [
            "name" => "Tartufo Caffè",
            "img" => "tartufo-caffe.jpg",
            "description" => "Tartufo al caffè con croccante di caffè e cioccolato.",
            "price" => 6.99,
            "visible" => true,
            "restaurant_id" => 5
        ],
        [
            "name" => "Tartufo Cioccolato",
            "img" => "tartufo-cioccolato.jpg",
            "description" => "Tartufo al cioccolato con nocciole tritate e scaglie di cioccolato.",
            "price" => 6.99,
            "visible" => false,
            "restaurant_id" => 6
        ],
        [
            "name" => "Tartufo Pistacchio",
            "img" => "tartufo-pistacchio.jpg",
            "description" => "Tartufo al pistacchio con guscio di cioccolato e cuore cremoso al pistacchio.",
            "price" => 7.49,
            "visible" => true,
            "restaurant_id" => 6
        ]
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->products as $product) {
            $newProduct = new Product();
            $newProduct->name = $product["name"];
            $newProduct->img = $product["img"];
            $newProduct->description = $product["description"];
            $newProduct->price = $product["price"];
            $newProduct->visible = $product["visible"];
            $newProduct->restaurant_id = $product["restaurant_id"];
            $newProduct->save();
        }
    }
}
