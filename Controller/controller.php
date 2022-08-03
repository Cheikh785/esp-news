<?php
    include_once("Modele/modele.php");

    
    function ChargerArticle($categorie) {
        $tabCategories = getAllCategories();
        $category = Array(0 => 'accueil', 1 => 'sport', 2 => 'education', 3 => 'sante', 4 => 'politique');
        if ($categorie == "accueil")
        $listeArticles = getAllArticles();
        else {
            foreach($category as $cat => $values) {
                if ($categorie == $values) {
                    $listeArticles = getAllArticleByCategory($cat);
                    break;
                }   
            }    
        }
        $estVide = empty($listeArticles);
        // echo $estVide;
        require_once "Vue/vue.php"; 
    } 


    function chargerDetails($id) {
       $article = getArticleById($id);
        // echo $id;
        // var_dump($article);
        include_once "Vue/details.php";
    }
?>