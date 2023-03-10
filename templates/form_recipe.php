<?php $title="Ajout de Recette "; ?>
<?php ob_start(); ?>
  
    <h2> Ajoute ta recette : </h2>
        <form method="POST" action="index.php?action=add_recipe" >
            
            <div>
                <label for="recipe_name"> Recipe_name: </label>
                <input type="text" name="recipe_name" id="recipe_name" lenght=30  required/>
            </div>
            <div>
                <label for="recipe_order"> Recipe_order : </label>
                <input type="radio" name="recipe_order" id="main course" value="main course" checked/>
                <label for="main course"> main course </label>
                <input type="radio" name="recipe_order" id="desert" value="desert"/>
                <label for="desert"> desert</label>
            </div>
            <div>
                <label for="recipe_steps"> Instructions à suivre : </label></br>
                <textarea id="recipe_steps" name="recipe_steps" rows="10" cols="99" placeholder="Préchauffez le four à  .."></textarea>

            <p> Tu peux aussi y ajouter des ingrédients : </p>
            <div>
                <p>informations : 1 oeuf = ~ 60 g et on admettra que la densité de tout les liquides est de 1.</p>
            </div>
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

            <div>
                <label for="ing2_name"> Ingrédient 2: </label>
                <input type="text" name="ing2_name" id="ing2_name" lenght=30 />

                <label for="ing2_weight"> Poids/Volume : </label>
                <input type="number" name="ing2_weight" id="ing2_weight" />

                <input type="radio" name="ing2_unit" id="L" value="L" checked />
                <label for="L"> L </label>
                <input type="radio" name="ing2_unit" id="Kg" value="Kg" />
                <label for="Kg"> Kg </label>
                <input type="radio" name="ing2_unit" id="g" value="g"  />
                <label for="g"> g </label>
            </div>

            <div>
                <label for="ing3_name"> Ingrédient 3: </label>
                <input type="text" name="ing3_name" id="ing3_name" lenght=30 />

                <label for="ing3_weight"> Poids/Volume : </label>
                <input type="number" name="ing3_weight" id="ing3_weight" />

                <input type="radio" name="ing3_unit" id="L" value="L" checked />
                <label for="L"> L </label>
                <input type="radio" name="ing3_unit" id="Kg" value="Kg" />
                <label for="Kg"> Kg </label>
                <input type="radio" name="ing3_unit" id="g" value="g"  />
                <label for="g"> g </label>
            </div>

            <div>
                <label for="ing4_name"> Ingrédient 4: </label>
                <input type="text" name="ing4_name" id="ing4_name" lenght=30 />

                <label for="ing4_weight"> Poids/Volume : </label>
                <input type="number" name="ing4_weight" id="ing4_weight" />

                <input type="radio" name="ing4_unit" id="L" value="L" checked />
                <label for="L"> L </label>
                <input type="radio" name="ing4_unit" id="Kg" value="Kg" />
                <label for="Kg"> Kg </label>
                <input type="radio" name="ing4_unit" id="g" value="g"  />
                <label for="g"> g </label>
            </div>

            <div>
                <label for="ing5_name"> Ingrédient 5: </label>
                <input type="text" name="ing5_name" id="ing5_name" lenght=30 />

                <label for="ing5_weight"> Poids/Volume : </label>
                <input type="number" name="ing5_weight" id="ing5_weight" />

                <input type="radio" name="ing5_unit" id="L" value="L" checked />
                <label for="L"> L </label>
                <input type="radio" name="ing5_unit" id="Kg" value="Kg" />
                <label for="Kg"> Kg </label>
                <input type="radio" name="ing5_unit" id="g" value="g"  />
                <label for="g"> g </label>
            </div>

            <div>
                <label for="ing6_name"> Ingrédient 6: </label>
                <input type="text" name="ing6_name" id="ing6_name" lenght=30 />

                <label for="ing6_weight"> Poids/Volume : </label>
                <input type="number" name="ing6_weight" id="ing6_weight" />

                <input type="radio" name="ing6_unit" id="L" value="L" checked />
                <label for="L"> L </label>
                <input type="radio" name="ing6_unit" id="Kg" value="Kg" />
                <label for="Kg"> Kg </label>
                <input type="radio" name="ing6_unit" id="g" value="g"  />
                <label for="g"> g </label>
            </div>

            <div>
                <label for="ing7_name"> Ingrédient 7: </label>
                <input type="text" name="ing7_name" id="ing7_name" lenght=30 />

                <label for="ing7_weight"> Poids/Volume : </label>
                <input type="number" name="ing7_weight" id="ing7_weight" />

                <input type="radio" name="ing7_unit" id="L" value="L" checked />
                <label for="L"> L </label>
                <input type="radio" name="ing7_unit" id="Kg" value="Kg" />
                <label for="Kg"> Kg </label>
                <input type="radio" name="ing7_unit" id="g" value="g"  />
                <label for="g"> g </label>
            </div>

            <div>
                <label for="ing8_name"> Ingrédient 8: </label>
                <input type="text" name="ing8_name" id="ing8_name" lenght=30 />

                <label for="ing8_weight"> Poids/Volume : </label>
                <input type="number" name="ing8_weight" id="ing8_weight" />

                <input type="radio" name="ing8_unit" id="L" value="L" checked />
                <label for="L"> L </label>
                <input type="radio" name="ing8_unit" id="Kg" value="Kg" />
                <label for="Kg"> Kg </label>
                <input type="radio" name="ing8_unit" id="g" value="g"  />
                <label for="g"> g </label>
            </div>
            <div>
                <button type="submit" > Save !</button>
            </div>
        </form>
  

            
   
<?php $content=ob_get_clean() ; ?>

<?php require('templates/layout.php'); ?>