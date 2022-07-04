<?php
include 'config.php';
myPrint_r($_GET);
$sql = "SELECT * FROM news WHERE id = " . $_GET['id_news'];
$result = $connect->query($sql);
echo $connect->error;
$theNews = $result->fetch_all(MYSQLI_ASSOC);
myPrint_r($theNews);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cepegra - <?php echo $theNews[0]['titre'];?></title>
</head>
<body>
    <header>
        <h1><?php echo $theNews[0]['titre'];?></h1>
    </header>
    <main>
        <p><?php echo $theNews[0]['contenu'];?></p>
    </main>
</body>
</html>