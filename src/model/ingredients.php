<?php

namespace test;


class Ingredients 
{
    /* 
    private array $ingredient = [ 
        'int_id' => int, 
        'name'=> string, 
        'category' => string,
        'price' => float,
     ];
     */
    private int $ing_id;
    private string $name;
    private string $category;
    private float $price;
   
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