<?php
    include_once("Controller/controller.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'administrateur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"  href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/administrateur.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <div class="row">
                    <div class="col-9 title">
                        <h1>Bienvenu Mbam Xoux</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-md-3 col-lg-2 col-xl-2 categorie">
                        <ul>
                            <li class="active"><a href="#">Accueil</a></li>
                            <li class=""><a href="#">Sport</a></li>
                            <li class=""><a href="#">Santé</a></li>
                            <li class=""><a href="#">Education</a></li>
                            <li class=""><a href="#">Politique</a></li>
                        </ul>
                    </div>
                    <?php
                    if (!$estVide) { ?>
                        <div class="col-sm-9 col-md-8 col-lg-9 col-xl-9 container-article">
                        <?php
                            foreach($listeAllArticles as $article) { ?>
                                <div class="article">
                                    <p class="titre"><?php echo $article['titre']; ?></p>
                                    <p class="contenu"><?= substr($article['contenu'], 0, 900);  ?></p>
                                    <div class="icone">
                                        <a href="#" class="edit" data-bs-toggle="modal" data-bs-target="#editArticleModal"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"><path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/></svg></a>
                                        <a href="#" class="delete"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16"><path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/></svg></a>
                                    </div>
                                </div> <?php } ?>
                            <!-- <div class="container">
                                <button class="precedent"> &lt;&lt; Précédent</button>
                                <button class="suivant">Suivant &gt;&gt;</button>
                            </div> -->
                        </div> <?php 
                    } else {    ?> 
                        <div class=" container alert"><p> Aucun article disponible !</p></div>  <?php 
                    }   ?>
                </div>
            </div>
            <div class="col-2 adding">
                <div class="row">
                    <div class="col ajouter-categorie">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">Ajouter une catégorie</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col modifier-categorie">
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editCategoryModal">Modifier une categorie</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col ajouter-article">
                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addArticleModal">Ajouter un article</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col ajouter-article">
                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#">Liste des Utilisateurs</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Modal to add an article-->
    <div class="modal fade" id="addArticleModal" tabindex="-1" aria-labelledby="addArticleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="addArticleModalLabel">Ajout d'un article</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="libelle" class="col-form-label">Libellé</label>
                            <input type="text" class="form-control" id="libelle" required>
                        </div>
                        <div class="mb-3">
                            <label for="contenu" class="col-form-label">Contenu</label>
                            <textarea class="form-control" id="contenu" rows="7" cols="15" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal to add a categorie-->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="addCategoryModalLabel">Ajout d'une categorie</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="libelle" class="col-form-label">Libellé</label>
                            <input type="text" class="form-control" id="libelle" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal to edit an article-->
    <div class="modal fade" id="editArticleModal" tabindex="-1" aria-labelledby="editArticleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="editArticleModalLabel">Modifier l'article</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="libelle" class="col-form-label">Libellé</label>
                            <input type="text" class="form-control" id="libelle" value="Première victoire du Sénégal">
                        </div>
                        <div class="mb-3">
                            <label for="contenu" class="col-form-label">Contenu</label>
                            <textarea class="form-control" id="contenu" rows="7" cols="15">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal to edit a category-->
    <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="editCategoryModalLabel">Modifier l'article</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="libelle1" class="col-form-label">Libellé</label>
                            <input type="text" class="form-control" id="libelle1" value="Accueil">
                        </div>
                        <div class="mb-3">
                            <label for="libelle2" class="col-form-label">Libellé</label>
                            <input type="text" class="form-control" id="libelle2" value="Sport">
                        </div>
                        <div class="mb-3">
                            <label for="libelle3" class="col-form-label">Libellé</label>
                            <input type="text" class="form-control" id="libelle3" value="Santé">
                        </div>
                        <div class="mb-3">
                            <label for="libelle4" class="col-form-label">Libellé</label>
                            <input type="text" class="form-control" id="libelle4" value="Education">
                        </div>
                        <div class="mb-3">
                            <label for="libelle5" class="col-form-label">Libellé</label>
                            <input type="text" class="form-control" id="libelle5" value="Politique">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>