<?php
include_once __DIR__."/header.php"; 
?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="annonce.css" />

    <title>Inscription</title>
</head>


<form action="inscriptionbdd.php" method="post" id="annonce">
    
        <h1> *** Inscription ***</h1>
    </br>
    <label for="Prenom"></label>
    <input type="text" placeholder="Nom" name="Prenom">
    </br>
    <label for="Nom"></label>
    <input type="text" placeholder="Prenom" name="Nom">
    </br>
    <label for="Mail"></label>
    <input type="text" placeholder="Mail" name="Mail">
    </br>
    <label for="Mot de passe"></label>
    <input type="password" placeholder="Mot de passe" name="Motdepasse">
    </br>
    <label for="Pseudo"></label>
    <input type="text" placeholder="Pseudo" name="Pseudo">
    </br>
    <input type="submit" value="S'INSCRIRE">
    </br>
    <p>Déjà inscrit ? Par <a href="connexion.php">ici</a></p>
</form>
