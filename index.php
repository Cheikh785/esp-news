<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <base href="/actualite_v1/">
=======
<html lang="fr">
<head>
>>>>>>> front-end
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>esp news</title>
</head>
<body>
    <?php 
        include_once("Controller/controller.php");
        
        if (isset($_GET['id'])) {
            chargerDetails($_GET['id']);
        }
        
        if(isset($_GET['action'])) {
            if ($_GET['action'] == 'sport') {
                ChargerArticle("sport");
            } else if ($_GET['action'] == 'education') {
                ChargerArticle("education");
            } else if ($_GET['action'] == 'sante') {
                ChargerArticle("sante");
            } else if ($_GET['action'] == 'politique') {
                ChargerArticle("politique");
            } else {
                ChargerArticle("accueil");
            }
        } else {
            if (!isset($_GET['id']))
                ChargerArticle("accueil");
        }
    ?>
</body>
    <script>
        var ulContainer = document.getElementById("liste");

        var li = ulContainer.getElementsByTagName("li");

        for (var i = 0; i < li.length; i++) {
            li[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
</html>
