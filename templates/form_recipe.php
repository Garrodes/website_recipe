<?php $title="Ajout de Recette "; ?>
<?php ob_start(); ?>

    <h1> <a href="index.php"> Site de Recettes </a></h1>

    

        <form method="POST" action="index.php?action=add_recipe" >
            
            <div>
                <label for="recipe_name"> Recipe_name: </label>
                <input type="text" name="recipe_name" id="recipe_name" lenght=30 />
            </div>
            <div>
                <label for="recipe_order"> Recipe_order : </label>
                <input type="text" name="recipe_order" id="recipe_order" lenght=30 />
            </div>
            <div>
                <button type="submit" > Save !</button>
            </div>
        </form>
            
   
<?php $content=ob_get_clean() ; ?>

<?php require('templates/layout.php'); ?>