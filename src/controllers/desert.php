<?php
// spl_autoload_register();
require_once('src/lib/database.php');
require_once('src/model/recipes.php');

    function deserts(string $identifier)
    {
        $connection= new DatabaseConnection();

        $desertRepository= new RecipeRepository;
        $desertRepository->connection = $connection;
        $desert=$desertRepository -> getDeserts($identifier);

        require('templates/deserts.php');
    }
