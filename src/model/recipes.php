<?php 


require_once('src/lib/database.php');

class RecipeRepository 
{
    public \DatabaseConnection $connection;

    public ?PDO $database = null;

    public function getDeserts($identifier): Array
    {
        $statement = $this->connection -> getConnection()->prepare
        ("SELECT recipe_id, recipe_name FROM recipe WHERE recipe_id = ? ORDER BY recipe_id ");
        $statement->execute([$identifier]);

        $deserts=[];
        while($row = $statement -> fetch()) {
            $desert = new RecipeRepository();
            $desert->recipe_id= $row['recipe_id'];
            $desert-> recipe_name = $row['recipe_name'];
            $deserts[]=$desert;
        }
        return $deserts;

    }


}