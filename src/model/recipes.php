<?php 

namespace App\model\recipes;

require_once('src/lib/database.php');

class RecipeRepository 
{
    
    public function getDeserts($identifier): Array
    {
        $statement = $this->connection -> getConnection()->prepare
        ("SELECT * FROM recipe WHERE recipe_id =:identifier AND recipe_order = 'desert' ");
        // binding param to protect against sql injection attacks
        $statement -> bindParam(":identifier", $identifier);
        
        $statement->execute([':identifier' => $identifier]);

        $deserts=[];
        while($row = $statement -> fetch()) {
            $desert = new RecipeRepository();
            $desert->recipe_id= $row['recipe_id'];
            $desert-> recipe_name = $row['recipe_name'];
            $deserts[]=$desert;
        }
        return $deserts;

    }

    public function getRecettes($limit = null)
    {
        $query =  "SELECT * FROM recipe  ORDER BY recipe_id";
        if ($limit) {
            $query = $query . 'LIMIT:resultLIMIT';
        }
        
        $statement = $this -> connection -> getConnection()-> prepare
        ($query);

        if ($limit) {
            $statement -> bindParam(':resultLimit', $limit, PDO:: PARAM_INT);
        }
        $statement -> execute();
        $recettes=[];
        while($row = $statement -> fetch()) {
            $recette = new RecipeRepository();
            $recette->recipe_id= $row['recipe_id'];
            $recette-> recipe_name = $row['recipe_name'];
            $recette->recipe_order = $row['recipe_order'];
            $recettes[]=$recette;
        }
        return $recettes;

    }

    public function addRecipe( string $recipe_name, string $recipe_order) : bool
    {
        
            $statement = $this -> connection -> getConnection() -> prepare
            ( " INSERT INTO recipe(recipe_name, recipe_order) VALUES (?, ?)");
            // preventing sql attack ??
           
            $image = $statement -> execute([
                $recipe_name, $recipe_order
            ]);

            $statement2 = $this -> connection -> getConnection() -> prepare 
            ( " WITH fictive AS ( 
            SELECT recipe_id, ing_id FROM recipe,ing WHERE 
            
            
            
            INSERT INTO recipe_ing(recipe_id, ing_id, q, unit) VALUES 
            (recipe_id, SELECT recipe_id FROM recipe WHERE :recipe_name),
            (ing_id, SELECT ing_id FROM ing WHERE :ing_name),
            ?, ?");

            return ($image >0 );
    
         
    }


}