<?php $title="Site de Recette | Desserts"; ?>

<?php ob_start(); ?>

    <h1> <a href="index.php">Site de Recettes </a></h1>

    <div class=desert>
    <h2> Liste des recettes du site </h2>
        
        <h3> <?= htmlspecialchars($desert['recipe_name']); ?>

<?php $content=ob_get_clean() ; ?>

<?php require('templates/layout.php'); ?>