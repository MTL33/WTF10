<?php
require_once 'config.php';

$rq = "SELECT * FROM `news`";
$result = $connect->query($rq);
echo $connect->error;


$allNews = $result->fetch_all(MYSQLI_ASSOC); // fetch all d'office en assoc
myPrint_r($allNews);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les news</title>
    <style>
        details[open] summary{
            background: red;
            display: ;
        }
    </style>
</head>
<body>
    <h1>Les super news de qualité prima deluxe</h1>
    <?php foreach($allNews as $key => $news):?>
        <details data-id="<?php echo $news[id];?>"<?php echo ($key == 0) ? 'open' : '';?>>
        <summary><?php echo $news['titre'];?><summary>
            <?php echo $news['contenu'];?>
    </details>
    <?php endforeach;?>

<!-- ULLI-->
<ul>
<?php foreach($allNews as $key => $news):?>
       <li data-key="<?php echo $key;?>" class="news-item"><a href="details-news.php?id_news=<?php echo $news["id"];?>"><?php echo $news['titre'];?></li></a>
    <?php endforeach;?>
    </ul>
</body>
</html>
