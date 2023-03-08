<?php
// spl_autoload_register();
require_once('src/lib/database.php');
require_once('src/model/recipes.php');

use App\model\recipes\RecipeRepository;

    function form_recipe() 
    {

        require('templates/form_recipe.php');
    }