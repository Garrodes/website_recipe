<?php 
require_once('src/controllers/homepage.php');
require_once('src/controllers/desert.php');
require_once('src/controllers/recettes.php');
require_once('src/controllers/save_ing.php');
require_once('src/model/ingredients.php');
require_once('src/controllers/add_ing.php');

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
        } elseif ($_GET['action']==='save_ing')
        {
            save_ing();
        
        } elseif ($_GET['action']==='add_ing')
        {
             add_ing();
        
        } else {
            throw new Exception('La page que vous rechercher n\'existe pas');
        }
    } else {
        homepage();
    }

} catch(Exception $e) {
    echo 'Erreur' .$e->getMessage();
}