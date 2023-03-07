<?php
 require_once('src/model/ingredients.php');
 require_once('src/model/recipes.php');
 
 use  test\Ingredients;

 function add_ing() 
 {   
  if ($_SERVER['REQUEST_METHOD']=='POST') 
      {
          if(isset($_POST['ing_id'])) {
              $ing_id = $_POST['ing_id'];
          } else {
              $ing_id = '';
          }
          if(isset($_POST['name'])) {
              $name = $_POST['name'];
          } else {
              $name = '';
          }
          if(isset($_POST['category'])) {
              $category = $_POST['category'];
          } else {
              $category = '';
          }
          if(isset($_POST['price'])) {
              $price = $_POST['price'];
          } else {
              $price = '';
          }
          
          $ings = new Ingredients();
    
          $ings -> getIngredients($ings);
    
          var_dump($ings);

          $newIng = array(
            'ing_id' => $ing_id,
            'name' => $name,
            'category' => $category,
            'price' => $price
        );
        $ings[] =  $newIng;
          var_dump($ings);
          $json = json_encode($ings);

          file_put_contents('public/data/ingredients.json', $json);
          
          var_dump($ing_id, $name, $category, $price);
      } else {
          echo 'method must be of POST type';
      }

  
   require('templates/save_ing.php');
 }