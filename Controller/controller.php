<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    include_once("Modele/modele.php");

    $listeAllArticles = getAllArticles();
    $listeAllEditors = getAllEditors();
    $editor = NULL;
    $estVide = NULL;
    // echo "bonjour";

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

    function addAEditor($prenom, $nom, $email, $tel, $adresse) {
        $resultAdding = addEditor($prenom, $nom, $email, $tel, $adresse);
        // var_dump($resultAdding);
    }

    function getEditeurById($id) {
        $editor = getEditorById($id);
        // var_dump($editor);
        return $editor;
    }

    function addCategorie($libelle) {
        $result = addCategory($libelle);
        return $result;
    }
?>
