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

    public function getRecettes()
    {
        $statement = $this -> connection -> getConnection()-> prepare
        ( "SELECT * FROM recipe  ORDER BY recipe_id");
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
            ( " INSERT INTO recipe(recipe_name, recipe_order) VALUES (?, ? )");
            // preventing sql attack ??
            //$statement -> bindParam();
            $image = $statement -> execute([
                $recipe_name, $recipe_order
            ]);

            return ($image >0 );
            // recup data from form : method POST, inserting into a readable variable by request ??
         
    }


}