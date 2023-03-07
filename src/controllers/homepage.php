<?php 
require_once('src/lib/database.php');
require_once('src/model/recipes.php');
require_once('src/model/ingredients.php');

use test\Ingredients; 

function homepage() 
{
   
    /*
    $carrot = new Ingredients();
    $carrot-> name = 'Carrotte';
    echo  $carrot->getName($carrot);
    var_dump($carrot);
    */

    require('templates/homepage.php');
}