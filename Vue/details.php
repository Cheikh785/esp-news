<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détailss article</title>
</head>
<body>
    <?php   
        // var_dump($article);
        foreach($article as $art) {
    ?>
        <div class="container">
            <div class="article-details">
                <p class="titre-details"><?= $art['titre'];  ?></p>
                <p class="contenu-details"><?= $art['contenu'];   ?></p>
            </div>
        </div>
        <button class="retour"><a href="/esp-news/index.php">Retour</a></button>
    <?php } ?>
</body>
</html>