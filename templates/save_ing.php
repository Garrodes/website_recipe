<?php $title=' Save your ingredients !' ?>

<?php ob_start(); ?>

<h1> Saving entries into a Json file : </h1>

<form method="POST" action="index.php?action=add_ing" >
<div>
    <label for="ing_id"> Ing_id : </label>
    <input type="number" name="ing_id" id="ing_id" lenght=30 />
</div>
<div>
    <label for="name"> Name: </label>
    <input type="text" name="name" id="name" lenght=30 />
</div>
<div>
    <label for="category"> Category : </label>
    <input type="text" name="category" id="category" lenght=30 />
</div>
<div>
    <label for="price"> Price: </label>
    <input type="number" name="price" id="price" lenght=30 />
</div>
<div>
    <button type="submit" > Save !</button>
</form>
</div>

<?php $content=ob_get_clean(); ?>

<?php require('templates/layout.php'); ?>