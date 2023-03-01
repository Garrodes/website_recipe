<?php $title="Site de Recettes | Inventory "; ?>

<?php ob_start(); ?>

    <h1> <a href="index.php"> Site de Recettes </a></h1>

    <div class="recettes">
    <h2> Liste des recettes du site </h2>
     
        <h3> <?= var_dump($recette); ?>
   
<?php $content=ob_get_clean() ; ?>

<?php require('templates/layout.php'); ?>