<?php 

namespace App\Model\recipe;

require_once('src/lib/database.php');

class RecipeRepository 
{
    public \DatabaseConnection $connection;

    public ?PDO $database = null;

    public function getDeserts(): Array
    {
        $statement= $this->connection -> getConnection()->prepare
        ("SELECT recipe_id, recipe_name FROM recipe WHERE recipe_name='desert' ORDER BY recipe_id ");
        $statement->execute([$identifier]);

        $deserts=[];
        while($row = $statement -> fetch()) {
            $desert-> recipe_name = $row['recipe_name'];
            $deserts[]=$desert;
        }
        return $deserts;

    }


}