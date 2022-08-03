<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #aa8; 
        }
        .article-details {
            border: 3px dashed yellow;
            padding: 1% 5% 2% 4%;
            margin: 3% 6%;
        }
        .titre-details {
            font-weight: bold;
            text-align: center;
            margin-left: 20%;
            margin-right: 20%;
            font-size: 120%;
        }
        .contenu-details {
            margin-left: 3%;
            margin-right: 3%;
        }
        .retour {
            font-size: 140%;
            background-color: #674;
            display: flex;
            margin-left: 40%;
            margin-top: 4%;
        }
        .retour a {
            text-decoration: none;
            color: black;
        }
        .retour:hover {
            cursor: pointer;
        }
    </style>
    <title>Document</title>
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
                <button class="retour"><a href="index.php">Retour</a></button>
            </div>
        </div>
    <?php } ?>
</body>
</html>