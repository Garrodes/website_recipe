<?php 
require_once('src/lib/database.php');
require_once('src/model/recipes.php');
require_once('src/model/ingredients.php');

use test\Ingredients; 
function homepage() 
{
    $a = new Ingredients();
    $a -> getIngredients();
    
    
    require('templates/homepage.php');
}