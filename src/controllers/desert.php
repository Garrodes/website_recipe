<?php
// spl_autoload_register();
require_once('src/lib/database.php');
require_once('src/model/recipes.php');

use App\Model\recipe\RecipeRepository; 

try {
    function desert(string $identifier)
    {
        $connection= new DatabaseConnection();

        $desertRepository= new RecipeRepository;
        $desertRepository->connect=$connection;
        $desert=$desertRepository -> getDeserts($identifier);


    }
} catch(Exception $e) {
    throw new Exception ('Function desert cannot be used');
}