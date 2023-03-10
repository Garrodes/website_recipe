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
        $recipe_steps = null;

        

        if (!empty($input['recipe_name']) && !empty($input['recipe_order']))
        {
            $recipe_name = $input['recipe_name'];
            $recipe_order = $input['recipe_order'];
        } else {
            throw new Exception('Données formulaires invalides');
        }

        if (!empty($input['recipe_steps'])) 
        {
            $recipe_steps = $input['recipe_steps'];
        }

        $connection= new DatabaseConnection();

        $recipeRepository= new RecipeRepository;
        $recipeRepository->connection = $connection;
        $success = $recipeRepository-> addRecipeSpecs($recipe_name, $recipe_order, $recipe_steps);

                
        $addedrecipe_id = $recipeRepository -> getRecipeId($recipe_name);
        
        
        if (!empty($input['ing1_name']) && !empty($input['ing1_weight']))
        {
   
            $Ing1_id = $recipeRepository-> getIngId($input['ing1_name']);
            
            $Ing1 = $recipeRepository -> addIngSpecs( $addedrecipe_id, $Ing1_id, $input['ing1_weight'], $input['ing1_unit']);

            
        } 

        if (!empty($input['ing2_name']) && !empty($input['ing2_weight']))
        {
         
            $Ing2_id = $recipeRepository-> getIngId($input['ing2_name']);
            
            $Ing2 = $recipeRepository -> addIngSpecs( $addedrecipe_id, $Ing2_id, $input['ing2_weight'], $input['ing2_unit']);

        }

        if (!empty($input['ing3_name']) && !empty($input['ing3_weight']))
        {
         
            $Ing3_id = $recipeRepository-> getIngId($input['ing3_name']);
            
            $Ing3 = $recipeRepository -> addIngSpecs( $addedrecipe_id, $Ing3_id, $input['ing3_weight'], $input['ing3_unit']);

        } 

        if (!empty($input['ing4_name']) && !empty($input['ing4_weight']))
        {
         
            $Ing4_id = $recipeRepository-> getIngId($input['ing4_name']);
            
            $Ing4 = $recipeRepository -> addIngSpecs( $addedrecipe_id, $Ing4_id, $input['ing4_weight'], $input['ing4_unit']);

        } 
        
        if (!empty($input['ing5_name']) && !empty($input['ing5_weight']))
        {
         
            $Ing5_id = $recipeRepository-> getIngId($input['ing5_name']);
            
            $Ing5 = $recipeRepository -> addIngSpecs( $addedrecipe_id, $Ing5_id, $input['ing5_weight'], $input['ing5_unit']);

        } 

        if (!empty($input['ing6_name']) && !empty($input['ing6_weight']))
        {
         
            $Ing6_id = $recipeRepository-> getIngId($input['ing6_name']);
            
            $Ing6 = $recipeRepository -> addIngSpecs( $addedrecipe_id, $Ing6_id, $input['ing6_weight'], $input['ing6_unit']);

        } 

        if (!empty($input['ing7_name']) && !empty($input['ing7_weight']))
        {
         
            $Ing7_id = $recipeRepository-> getIngId($input['ing7_name']);
            
            $Ing7 = $recipeRepository -> addIngSpecs( $addedrecipe_id, $Ing7_id, $input['ing7_weight'], $input['ing7_unit']);

        } 

        if (!empty($input['ing8_name']) && !empty($input['ing8_weight']))
        {
         
            $Ing8_id = $recipeRepository-> getIngId($input['ing8_name']);
            
            $Ing8 = $recipeRepository -> addIngSpecs( $addedrecipe_id, $Ing8_id, $input['ing8_weight'], $input['ing8_unit']);

        } 

        
        if (!$success)
            {
                throw new Exception('Erreur Données du formulaires non envoyées');
            } else {
                header('Location:index.php?action=form_recipe');
        }
        }

    }