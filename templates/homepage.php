<?php $title="Site de Recette Accueil" ?>

<?php ob_start(); ?>

<h1> Accueil du Site </h1>

<h2><a href="index.php?action=deserts&id=<?= urlencode($desert-> identifier)?>"> Desserts </a></h2>

<?php $content=ob_get_clean(); ?>

<?php require('templates/layout.php'); ?>