<?php 
require_once('src/controllers/homepage.php');
require_once('src/controllers/desert.php');
require_once('src/controllers/recettes.php');

try 
{
    if (isset($_GET['action']) && $_GET['action']!=='') 
    {
        if ($_GET['action']==='deserts') 
        { if (isset($_GET['id']) && $_GET['id']>=0)
            {
                $identifier=$_GET['id'];
                deserts($identifier);
            } else {
                throw new Exception('Aucun id de recette envoyé');
            }

        }
        elseif ($_GET['action']==='recettes')
        {
            recettes();
        } else {
            throw new Exception('La page que vous rechercher n\'existe pas');
        }
    } else {
        homepage();
    }

} catch(Exception $e) {
    echo 'Erreur' .$e->getMessage();
}