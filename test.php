<?php
    //Code excuté sur le serveur pas acessbile par les consoles log contrairement au javascript.
    $nom = "Chevalier";
    $prenom = "Alexandre";
    $fruit = "pomme";
    define('FORMATION', 'WTF10'); // Création d'une constante.
    $age = "25";
    echo $prenom . " le super " . $nom . " de " . $age . " ans " . '<br><br>';
    echo "$nom $prenom<br><br>";
    echo '$nom $prenom<br>'; // Dans les simples quotes les variables ne sont pas interprétées.
    echo "<br>" . 52 . "ans <br><br>"; // PHP Sensible à la case.
    echo FORMATION; // Constante peut pas être utilisé dans une balise.
    echo "Hello ${prenom} ${nom}<br><br>";
    echo "J'ai mis dans mon panier des ${fruit}s et \"j'aime\" ça ...";

    //ARAY IN PHP

    $panier = array(); //Déclaration longue
    $panier = []; // Déclaration courtes
    $panier = array("bananes", "cerises"); // Déclaration de tableau avec du valeur 
    $panier[] = "Pommes"; //équivalent du push en javascript
    $panier[] = "Poires"; //équivalent du push en javascript

    echo '<pre>'; // Va permettre de formatter le Array qu'on va appeler dans le print R
    print_r($panier); //Afficher le contenu complet d'un arrêt 
    echo '</pre>';// Fermeture du pre

    echo '<pre>'; // Va permettre de formatter le Array qu'on va appeler dans le print R
    var_dump($panier); //Plus complet que le print R, mais est moins lisible.
    echo '</pre>';// Fermeture du pre

    //BOUCLE ITERRATION EN PHP

    echo count($panier); // Semblable au tab.length en javascript 

    // Element est déféni par nos soins ici on injecte par élément

    foreach($panier as $element){
        echo $element . '<br><br>';
    }

    //LISTE SIMPLE 
    echo '<h1> Liste simple</h1>';

    echo '<ul>';
      // Element est déféni par nos soins ici on injecte par élément

      foreach($panier as $fruit){
        echo "<li>$fruit</li>" . '<br><br>';
    }
    echo '</ul>';

        //LISTE AVEC une clé de valeur indentée comme en JSON
        echo '<h1> Liste avec DATAKEY (voir console)</h1>';
        echo '<ul>';
        // Element est déféni par nos soins ici on injecte par élément
  
        foreach($panier as $key => $fruit){
          echo "<li data-key=\"$key\">$fruit</li>" . '<br><br>';
      }
      echo '</ul>';
    
?>