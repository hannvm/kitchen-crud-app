<?php
    /*
    Exercise in OOP programming in PHP for kitchen management
    */

    class Food {
        private $food;
        private $qty;
        private $meausrement;
        private $is_low;

        public function __construct($food, $qty=0, $measurement, $is_low) {
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
        public $recipe;
        public $ingredients;

        public function __construct($recipe, $ingredients) {
            $this-> recipe = $recipe;
            $this-> ingredients = $ingredients;
        }

        public function getIngredients() {
            return $this-> ingredients;
        }
    }

    //ingredients
    $marinara = new Food('marinara', 1000, 'grams', 'no');
    $spaghetti = new Food('spaghetti', 1000, 'grams', 'no');
    $mince = new Food('mince', 1000, 'grams', 'no');
    $pizza_base = new Food('pizza_base', 3, 'count', 'no');
    $mozarella = new Food('mozarella', 1000, 'grams', 'no');

    //recipes
    $bolognese = new Recipe('bolognese', ['spaghetti' => '400', 'marinara' => '800', 'mince' => '500']);




