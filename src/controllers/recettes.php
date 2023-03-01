<?php
// spl_autoload_register();
require_once('src/lib/database.php');
require_once('src/model/recipes.php');

    function recettes()
    {
        $connection= new DatabaseConnection();

        $recettesRepository= new RecipeRepository;
        $recettesRepository->connection = $connection;
        $recette=$recettestRepository -> getRecettes();

        require('templates/recettes.php');
    }