<?php
include 'config.php';
myPrint_r($_GET);
$sql = "SELECT * FROM news WHERE id = " . $_GET['id_news'];
$result = $connect->query($sql);
echo $connect->error;
$theNews = $result->fetch_all(MYSQLI_ASSOC);
$nb_rows = $result->num_rows;
myPrint_r($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cepegra - <?php echo ($nb_rows > 0) ? $theNews[0]['titre'] : '' ?></title>
</head>
<body>
    <?php if ($nb_rows > 0 ):?>
    <header>
        <h1><?php echo $theNews[0]['titre'];?></h1>
    </header>
    <main>
        <p><?php echo $theNews[0]['contenu'];?></p>
    </main>
    <?php else :?>
        <p>La focking news n'existe pas !!!!</p>
    <?php endif;?>
</body>
</html>