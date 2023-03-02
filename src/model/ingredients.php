<?php

namespace test;


class Ingredients 
{
    
    public function __construct($ing_id, $name, $category, $price)
    {
        $this -> ing_id = $ing_id;
        $this -> name = $name;
        $this -> category = $category;
        $this -> price = $price;
    }
    
    /* private int $ing_id;
    private string $name;
    private string $category;
    private float $price;
    */
   
    // public array $ingredient =['ing_id'=>int, 'name'=>string,'category'=>string, 'price'=>float];
    public function getIngredients()
    {
        
        $IngredientJson = file_get_contents('public/data/ingredients.json');

        $IngredientDecoded=json_decode($IngredientJson, true);

        var_dump($given_array);
        foreach($IngredientDecoded as $ing) 
        {
            echo $ing["name"];
        }
        
        

        // return print($Ingredient); // ???

    }

    
}