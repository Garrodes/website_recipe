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

                

        if (!empty($input['ing1_name']) && !empty($input['ing1_weight']))
        {

            $addedrecipe_id = $recipeRepository -> getRecipeId($recipe_name);
            
            $Ing1_id = $recipeRepository-> getIngId($input['ing1_name']);
            $Ing1 = $recipeRepository -> addIngSpecs($Ing1_id, $addedrecipe_id, $input['ing1_weight'], $input['ing1_unit']);

        } 

        // Moyen de formater les $ de variable en les incrémentant ? pour les regrouper ensuite ? 
        // ou si meme nom ça les regroupe automatiquement ? 
        // Sinon découper en plusieurs petits formulaires avec nom défini et avoir une liste de variable array:
        // $Ing1, $Ing2 ... qu'on va pouvoir rentrer avec une boucle for (sur un count des Ing rentrés) par la fonction addIngSpecs() 
        // moyen donc de lire un type de variable s'incrementant ? 

        /*while ( $inc_ing_entry <= $count_ing_entry)
        {
            $Ingredient[] = $Ing_row;
            $inc_ing_entry++;
        } */
        
        if (!$success)
            {
                throw new Exception('Erreur Données du formulaires non envoyées');
            } else {
                
                echo 'Données du formulaire enregistrées';
                header('Location:index.php?action=form_recipe');
        }
        }

    }