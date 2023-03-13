<?php 
require_once('src/lib/database.php');
require_once('src/model/recipes.php');
require_once('src/model/ingredients.php');
require_once('src/model/varManager.php');

use test\Ingredients; 
use App\Model\vrManager;


function homepage() 
{
   
    
    var_dump($Ing1_carrot =  IncrementName($Ing1_carrot, 4));

    require('templates/homepage.php');
}