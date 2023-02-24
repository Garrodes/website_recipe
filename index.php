<?php 
require_once('src/controllers/homepage.php');
require_once('src/controllers/desert.php');

try 
{
    if (isset($_GET['action']) && $_GET['action']!='') 
    {
        if ($_GET['action']==='desert') 
        { if (isset($_GET['recipe_id']) && $_GET['recipe_id']>=0)
            {
                $identifier=$_GET['recipe_id'];
                getDesert($identifier);
            } else {
                throw new Exception('Aucun id de recette envoyé');
            }

        }
    } else {
        homepage();
    }

} catch(Exception $e) {
    echo 'Erreur' .$e->getMessage();
}