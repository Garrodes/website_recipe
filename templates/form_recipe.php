<?php $title="Ajout de Recette "; ?>
<?php ob_start(); ?>

    <h1> <a href="index.php"> Site de Recettes </a></h1>

    
    <h2> Ajouter ta recette : </h2>
        <form method="POST" action="index.php?action=add_recipe" >
            
            <div>
                <label for="recipe_name"> Recipe_name: </label>
                <input type="text" name="recipe_name" id="recipe_name" lenght=30  required/>
            </div>
            <div>
                <label for="recipe_order"> Recipe_order : </label>
                <input type="radio" name="recipe_order" id="main course" checked/>
                <label for="main course"> main course </label>
                <input type="radio" name="recipe_order" id="desert"/>
                <label for="desert"> desert</label>
            </div>
            <p> Tu peux aussi y ajouter des ingrédients : </p>
            <div>
                <p>informations : 1 oeuf = ~ 60 g et on admettra que la densité de tout les liquides est de 1.</p>
            </div>
            <div>
                <label for="ing1_name"> Ingrédient 1: </label>
                <input type="text" name="ing1_name" id="ing1_name" lenght=30 />

                <label for="ing1_weight"> Poids/Volume : </label>
                <input type="number" name="ing1_weight" id="ing1_weight" />

                <input type="radio" name="ing1_unit" id="L" value="L" checked />
                <label for="L"> L </label>
                <input type="radio" name="ing1_unit" id="Kg" value="Kg" />
                <label for="Kg"> Kg </label>
                <input type="radio" name="ing1_unit" id="g" value="g"  />
                <label for="g"> g </label>
            </div>
            <div>
                <button type="submit" > Save !</button>
            </div>
        </form>
  

            
   
<?php $content=ob_get_clean() ; ?>

<?php require('templates/layout.php'); ?>