<?php
    require_once 'function.php';

    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'ingrwf10_php');

    define('MODE', 'dev'); //dev or prod

    //Se connecter l'ordre entre les parenthèses à de l'importance.
    //En azure c'est la méthode de connexion
    // PS pas de PHP chez netify

    $connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); 

    if($connect->connect_error) :
        die('Connexion error:' . $connect->connect_error);
    else :
        $connect->set_charset('utf8');
    endif;

    myPrint_r($connect);
?>