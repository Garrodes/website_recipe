<?php 
require_once('src/lib/database.php');
require_once('src/model/recipes.php');
require_once('src/model/ingredients.php');

use test\Ingredients; 

function homepage() 
{
   // create a value , modify its content through a function Inflation() and return price;
   
    /*
    $carrot = new Ingredients();
    $carrot-> name = 'Carrotte';
    echo  $carrot->getName($carrot);
    var_dump($carrot);
    */

    $ings = new Ingredients();
    
    $ings -> getIngredients($ings);
    var_dump($ings);

    require('templates/homepage.php');
}