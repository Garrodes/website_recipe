<?php 
require_once('src/lib/database.php');
require_once('src/model/recipes.php');
require_once('src/model/ingredients.php');

use test\Ingredients; 

function homepage() 
{
   // create a value , modify its content through a function Inflation() and return price;
   $Abricot = new Ingredients(3, 'abricot','fruit', 5);
   var_dump($Abricot);
    
    require('templates/homepage.php');
}