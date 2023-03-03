<?php $title="Site de Recette Accueil" ?>

<?php ob_start(); ?>

<h1> Accueil du Site </h1>

<p> <a href ="index.php?action=save_ing"> Save your Ingredients JSON  </a></br> </p>

<h2><a href="index.php?action=deserts&id=<?= urlencode($desert-> identifier)?>"> Desserts </a></h2>

<h2><a href="index.php?action=recettes">Recettes </a></h2>

<?php $content=ob_get_clean(); ?>

<?php require('templates/layout.php'); ?>