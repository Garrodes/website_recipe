<?php $title="Site de Recettes | Inventory "; ?>

<?php ob_start(); ?>

    <h1> <a href="index.php"> Site de Recettes </a></h1>

    <div class="recettes">
    <h2> Liste des recettes du site </h2>
     
        <h3> <?= var_dump($recette); ?>

        <form method="POST" action="index.php?action=#" >
            
            <div>
                <label for="name"> Recipe_name: </label>
                <input type="text" name="name" id="name" lenght=30 />
            </div>
            <div>
                <label for="category"> Recipe_order : </label>
                <input type="text" name="category" id="category" lenght=30 />
            </div>
            <div>
                <button type="submit" > Save !</button>
            </div>
        </form>
            
   
<?php $content=ob_get_clean() ; ?>

<?php require('templates/layout.php'); ?>