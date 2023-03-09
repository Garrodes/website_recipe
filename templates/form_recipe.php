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
                <input type="text" name="recipe_order" id="recipe_order" lenght=30 />
            </div>
            <div>
                <button type="submit" > Save !</button>
            </div>
        </form>
    
    <h2> Tu peux aussi y ajouter des ingrédients : </h2>
       
        <form method="POST" action="#" >

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
        <!-- ajouter ing 2 , 3 etc ... si valide !-->
        </form>

            
   
<?php $content=ob_get_clean() ; ?>

<?php require('templates/layout.php'); ?>