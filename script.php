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
        public $id;
        public $food;
        public $qty;
        public $meausrement;
        public $is_low;

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
        public $id;
        public $recipe;

        public function __construct($id, $recipe) {
            $this-> id = $id;
            $this-> recipe = $recipe;
        }
    }

    //load db data to array
    //get array with all foods objects
    while($row = $stmt_get_ingredients->fetch()) {
        $array_ingredients[] = new Food($row->id, $row->food, $row->qty, $row->measurement, $row->is_low);
    }       //print_r($array_ingredients);

    //get array with all recipes objects
    while($row = $stmt_get_recipes->fetch()) {
        $array_recipes[] = new Recipe($row->id, $row->recipe);
    }       
