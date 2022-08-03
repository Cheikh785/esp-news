<?php
    include_once("Dao/dao.php");

    function getAllCategories() {
        $connexion = connect_db();
        $tabCategory = Array();
        $sql = "SELECT * FROM Categorie";
        foreach($connexion->query($sql) as $row) {
            array_push($tabCategory, $row);
        }
        return $tabCategory;
        close();
    }

    function getAllArticleByCategory($category = 0) {
        $connexion = connect_db();
        $tabArticle = Array();
        $sql = "SELECT * FROM Article where categorie =".$category;
        foreach($connexion->query($sql) as $row) {
            array_push($tabArticle, $row);
        }
        return $tabArticle;
        close();
    }

    function getAllArticles() {
        $connexion = connect_db();
        $tabArticles = Array();
        $sql = "SELECT * FROM Article";
        foreach($connexion->query($sql) as $row) {
            array_push($tabArticles, $row);
        }
        return $tabArticles;
        close();
    }

    function getArticleById($id) {
        $connexion = connect_db();
        $article = Array();
        $sql = "SELECT * FROM Article where id = ".$id;
        return $connexion->query($sql)->fetchAll();
        close();
    }

?>