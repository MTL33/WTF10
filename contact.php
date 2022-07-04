<?php
    include 'function.php';
    myPrint_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    <h1>Contact</h1>
    <!--mettre name par defaut pour ajouter les param a l'url lors de l'envoi'-->
    <form action="">
        <input type="text" name="nom" placeholder="votre nom"><br>
        <input type="email" name="email" placeholder="Votre email"><br>
        <textarea cols="30" name="message" rows="10"></textarea><br>
        <button>Envoyer</button>
    </form>
</body>
</html>