<?php $title="Site de Recette Accueil" ?>

<?php ob_start(); ?>

<h1> Accueil du Site </h1>

<p> <a href ="index.php?action=save_ing"> Save your Ingredients in a JSON file !  </a></br> </p>

<h2><a href="index.php?action=deserts&id=<?= urlencode($desert-> identifier)?>"> Affiche la recette si c'est un dessert, selon l'id rentré </a></h2>

<h2><a href="index.php?action=recettes"> Liste des recettes du site </a></h2>

<h2><a href="index.php?action=form_recipe"> Ajouter une recette dans la db !  </a></h2>

<?php $content=ob_get_clean(); ?>

<?php require('templates/layout.php'); ?>