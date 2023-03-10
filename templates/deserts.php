<?php $title="Site de Recette | Desserts"; ?>

<?php ob_start(); ?>

    <div class="deserts">
    <h2> Liste des desserts du site </h2>
     
  
        <h3> <?php var_dump($desert); ?> </h3>
   
<?php $content=ob_get_clean() ; ?>

<?php require('templates/layout.php'); ?>