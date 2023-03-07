<?php

namespace test;


class Ingredients 
{
    
    /*
    public function __construct($ing_id, $name, $category, $price)
    {
        $this -> ing_id = $ing_id;
        $this -> name = $name;
        $this -> category = $category;
        $this -> price = $price;
    }
    */
    /*
    public int $ing_id;
    public string $name;
    public string $category;
    public float $price;
    */
    // public array $ingredient =['ing_id'=>int, 'name'=>string,'category'=>string, 'price'=>float];

    public function getName($called) 
    {
        if ($called) {
            $this -> name= 'Changed value';
        } else {
            echo 'not called';
        }
        echo $this->name;
        
    }


    public function getIngredients(&$aa)
    {
        $IngredientJson = file_get_contents('public/data/ingredients.json');

        $IngredientDecoded=json_decode($IngredientJson, true);

        foreach($IngredientDecoded as $item) 
        {
            $item["ing_id"] -> ing_id;
            $item["name"] -> name;
            $item["category"] -> category;
            $item["price"] -> price;
            $items[] = $item;
        }
        
        $aa = $items;
        
        return $aa;
           
    }
        
       
        
}
