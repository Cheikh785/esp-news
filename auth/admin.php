<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/auth-admin.css">
    <title>Page d'authentification de l'administrateur</title>
</head>
<body>
    <div class="form">
        <h4>Connexion</h4>
        <form method="post" action="../administrateur.php">
            <div class="input">
                <div class="inputBox">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" placeholder="Jonh Doe">
                </div>
                <div class="inputBox password">
                    <label for="password">Password</label>
                    <input type="password" placeholder=". . . . . . . .">
                </div>
                <div class="inputBox">
                    <button type="submit" name="" value="Se connecter">Se connecter</button>
                </div>
                <p class="incorrect">Erreur : identifiants incorrects !</p>
            </div>
        </form>
    </div>
</body>
</html>