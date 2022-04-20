<?php
include_once __DIR__ . "/header.php";
?>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="annonce.css" />

    
    <title>Inscription</title>
</head>


<form action="inscriptionbdd.php" method="post" id="annonce">
    
        <h1> Inscription </h1>
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
<<<<<<< HEAD
</form>
<style>
h1 {
  color: rgb(0, 255, 136);
}
#annonce {
   background-color: white;
   box-shadow: 10px 5px 5px rgb(0, 255, 136);
}
button {
	width: 80%;
	margin-left: 10%;
	height: 30px;
	border-radius: 5px;
}
input {
	background-color:rgb(0, 255, 136);
}
</style>

</body>
</html>
=======
</form>
>>>>>>> 5c06c85738f10447d160218be477b38f5037a527
