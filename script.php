<?php

    //db connection
    $host='localhost';
    $dbName='kitchen-app';
    $user='hannah';
    $pass='insecure';

    //DSN - data source name (string with associated data structure to describe db connection source)
    $dsn= 'mysql:host=' . $host . ';dbname=' . $dbName;
    $pdo= new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $stmt_get_ingredients = $pdo->query('SELECT * FROM ingredients');
    $stmt_get_recipes = $pdo->query('SELECT * FROM recipes');



    //classes
    class Food {
        private $id;
        private $food;
        private $qty;
        private $meausrement;
        private $is_low;

        public function __construct($id, $food, $qty=0, $measurement, $is_low) {
            $this-> id = $id;
            $this-> food = $food;
            $this-> qty = $qty;
            $this-> measurement = $measurement;
            $this-> is_low = $is_low;
        }

        public function getFood() {
            return $this-> food;
        }
    }

    class Recipe {
        private $id;
        private $recipe;

        public function __construct($id, $recipe) {
            $this-> id = $id;
            $this-> recipe = $recipe;
        }
    }

    //get array with all foods objects
    while($row = $stmt_get_ingredients->fetch()) {
        $array_ingredients[$row->food] = new Food($row->id, $row->food, $row->qty, $row->measurement, $row->is_low);
    }       //print_r($array_ingredients);

    //get array with all recipes objects
    while($row = $stmt_get_recipes->fetch()) {
        $array_recipes[$row->recipe] = new Recipe($row->id, $row->recipe);
    }       //print_r($array_recipes);



















    // //ingredients
    // $marinara = new Food('marinara', 1000, 'grams', 'no');
    // $spaghetti = new Food('spaghetti', 1000, 'grams', 'no');
    // $mince = new Food('mince', 1000, 'grams', 'no');
    // $pizza_base = new Food('pizza_base', 3, 'count', 'no');
    // $mozarella = new Food('mozarella', 1000, 'grams', 'no');

    // //recipes
    $bolognese = new Recipe('bolognese', ['spaghetti' => '400', 'marinara' => '800', 'mince' => '500']);




