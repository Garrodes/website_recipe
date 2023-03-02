<?php

namespace test;


class Ingredients 
{
    public $ing_id = null;
    public $name = 'default';
    public $category = 1;
    public $price = 1;
    // public array $ingredient =['ing_id'=>int, 'name'=>string,'category'=>string, 'price'=>float];
    public function getIngredients()
    {
        $IngredientJson = file_get_contents('public/data/ingredients.json');

        $Ingredient = json_decode($IngredientJson, true);

        foreach($Ingredient as $ing){
            echo $ing["name"];
        }
        
        

        // return print($Ingredient); // ???

    }

    public function getSpecs()
    {
     return sprintf(
        '%s, n:%s,cp(%s,%s)',
        $this -> ing_id,
        $this ->name,
        $this -> category,
        $this->price
    );
    }
}