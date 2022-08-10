<?php
    include_once "Controller/controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités</title>
</head>
<body>
    <h1 class="welcome">Bienvenu dans l'application d'actualité des Polytechniciens</h1>
    <?php 
        include 'navbar.php';
    ?>

    <?php
        if (!$estVide) {
            foreach($listeArticles as $article) { ?>
            <div class="container">
                <div class="article">
                    <p class="titre"><?php echo $article['titre']; ?></p>
                    <p class="contenu"><?= substr($article['contenu'], 0, 210). "...";  ?></p>
                    <a href="<?= "/index.php?id=".$article['id']?>" class="lire-plus">Lire plus...</a>
                </div>
            </div> <?php } ?>
            <div class="container suivant-precedent">
                <a href="#" class="precedent">Precédent</a>
                <a href="#" class="un">1</a>
                <a href="#">2</a>
                <a>.</a>
                <a>.</a>
                <a>.</a>
                <a href="#">7</a>
                <a href="#">8</a>
                <a href="#" class="suivant">Suivant</a>
            </div>
    <?php 
     } else {
        ?> <div class="container alert"><p> Aucun article disponible !</p></div>
        <?php }
     ?>
</body>
</html>