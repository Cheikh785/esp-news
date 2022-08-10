<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    
    include_once("Dao/dao.php");

    function getAllCategories() {
        $connexion = connect_db();
        $tabCategory = Array();
        $sql = "SELECT * FROM Categorie";
        foreach($connexion->query($sql) as $row) {
            array_push($tabCategory, $row);
        }$connexion = connect_db();
        $tabCategory = Array();
        $sql = "SELECT * FROM Categorie";
        foreach($connexion->query($sql) as $row) {
            array_push($tabCategory, $row);
        }
        // close();
        return $tabCategory;
    }

    function getAllArticleByCategory($category = 0) {
        $connexion = connect_db();
        $tabArticle = Array();
        $sql = "SELECT * FROM Article where categorie =".$category;
        foreach($connexion->query($sql) as $row) {
            array_push($tabArticle, $row);
        }
        // close();
        return $tabArticle;
    }

    function getAllArticles() {
        $connexion = connect_db();
        $tabArticles = Array();
        $sql = "SELECT * FROM Article";
        foreach($connexion->query($sql) as $row) {
            array_push($tabArticles, $row);
        }
        // close();
        return $tabArticles;
    }

    function getArticleById($id) {
        $connexion = connect_db();
        $article = Array();
        $sql = "SELECT * FROM Article where id = ".$id;
        // close();
        return $connexion->query($sql)->fetchAll();
    }

    function getAllEditors() {
        $connexion = connect_db();
        $tabEditors = Array();
        $sql = "SELECT * FROM editeurs";
        foreach($connexion->query($sql) as $row) {
            array_push($tabEditors, $row);
        }
        // close();
        return $tabEditors;
    }
    function getEditorByTel($tel) {
        $connexion = connect_db();
        $sql = "SELECT telephone FROM editeurs where telephone = '$tel'";
        $result = $connexion->query($sql);
        return $result;
    } 

    function getEditorById($id) {
        $connexion = connect_db();
        $sql = "SELECT id FROM editeurs where id = ".$id;
        $result = $connexion->query($sql)->fetchAll();
        return $result;
    }

    function addEditor($prenom, $nom, $email, $tel, $adresse) {
        $connexion = connect_db();
        $sql = "INSERT INTO editeurs(prenom, nom, email, telephone, adresse) values('$prenom', '$nom', '$email', '$tel', '$adresse')";
        $result = $connexion->query($sql);
        return $result;
    }
    function addCategory($libelle) {
        $connexion = connect_db();
        $sql = "INSERT INTO Categorie(libelle) VALUES('$libelle')";
        $result = $connexion->query($sql);
        return $result;
    }

?>