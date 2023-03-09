<?php
// spl_autoload_register();
require_once('src/lib/database.php');
require_once('src/model/recipes.php');

use App\model\recipes\RecipeRepository;

    function add_recipe(array $input) 
    {
        if (!$input) {
            throw new Exception('Données du formulaires non récupérées !');
            
        } else {
        $recipe_name = null;
        $recipe_order = null ;

        

        if (!empty($input['recipe_name']) && !empty($input['recipe_order']))
        {
            $recipe_name = $input['recipe_name'];
            $recipe_order = $input['recipe_order'];
        } else {
            throw new Exception('Données formulaires invalides');
        }
        $connection= new DatabaseConnection();

        $recipeRepository= new RecipeRepository;
        $recipeRepository->connection = $connection;
        $success = $recipeRepository-> addRecipe($recipe_name, $recipe_order);
        if (!$success)
            {
                throw new Exception('Erreur Données du formulaires non envoyées');
            } else {
                
                echo 'Données du formulaire enregistrées';
                header('Location:index.php?action=form_recipe');
        }
        }

    }