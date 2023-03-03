<?php

namespace test;


class Ingredients 
{
    
    /*public function __construct($ing_id, $name, $category, $price)
    {
        $this -> ing_id = $ing_id;
        $this -> name = $name;
        $this -> category = $category;
        $this -> price = $price;
    }
    */
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

    
        return $IngredientDecoded ;
        
    }

    public function addIng()
    {
        if ($_SERVER['REQUEST METHOD']==='POST') 
        {
            if(isset($_POST['ing_id'])) {
                $ing_id = $_POST['ing_id'];
            } else {
                $ing_id = '';
            }
            if(isset($_POST['name'])) {
                $name = $_POST['name'];
            } else {
                $name = '';
            }
            if(isset($_POST['category'])) {
                $category = $_POST['category'];
            } else {
                $category = '';
            }
            if(isset($_POST['price'])) {
                $price = $_POST['price'];
            } else {
                $price = '';
            }

            $ing = getIngredients();

            $newIng = array(
                'ing_id' => $ing_id,
                'name' => $name,
                'cateogry' => $category,
                'price' => $price
            );
            $ings[] = $newIng;
            
            $json = json_encore($ings);

            file_put_contents('public/data/save_ing.json', $json);
            
            var_dump($ing_id, $name, $category, $price);
        } else {
            echo 'method must be of POST type';
        }

    }
}