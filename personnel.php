<?php
require_once 'function.php'; //once pour éviter 2 fois l'usage de la même fonction
require 'data.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnel</title>
</head>
<body>
    <!--Obliger d'utiliser les {} pour plusieur données de tableau -->
    <h1>Gérant : <?php echo "${gerant['nom']} ${gerant['prenom']}";?></h1>

    <?php
        echo '<h1>LISTE PERSONNEL DANS UL LI</h1>';
        echo '<ul>';
        // Element est déféni par nos soins ici on injecte par élément
  
        foreach($personnel as $key => $personne){
          echo "<li data-key=\"$key\">${personne['prenom']}${personne['nom']}</li>" . '<br><br>';
      }
      echo '</ul>';

      // VERISON SYNTAXE + MIEUX

      echo '<h1>LISTE PERSONNEL DANS UL VERSION AUTRE SYNTAXE</h1>';
      echo '<ul>';

      foreach($personnel as $key => $personne) :
        echo "<li data-key=\"$key\">${personne['prenom']}${personne['nom']}</li>" . '<br><br>';
      endforeach;
      echo '</ul>';

      // VERISON SYNTAXE IF

      echo '<h1>LISTE PERSONNEL DANS UL VERSION AUTRE SYNTAXE</h1>';
      echo '<ul>';

      foreach($personnel as $key => $personne) :
        if($personne['service'] != 'Animation') : 
        echo "<li data-key=\"$key\">${personne['prenom']}${personne['nom']}</li>" . '<br><br>';
        endif;
    endforeach;
      echo '</ul>';
      ?>
</body>
</html>